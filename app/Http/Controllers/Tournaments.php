<?php

namespace App\Http\Controllers;

use App\GamePlatform;
use App\GamesPlatformRelation;
use App\Tournament;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RedirectsUsers;

class Tournaments extends Controller
{
    use RedirectsUsers;

    protected $redirectTo = '/tournament/create/';

    public function createNew(Request $request) {

        $this->validator($request->all())->validate();

        $tournament = $this->create($request->all());

        return redirect($this->redirectPath().$tournament->id);
    }

    private function validator(array $data) {
        return Validator::make($data, [
            'codGame' => 'required|numeric|min:1',
            'gamePlataform' => 'required|numeric|min:1',
            'eventEmail' => 'required|string|email|max:128',
            'eventPhone' => 'required|string|min:10|max:15',
            'eventName' => 'required|string|min:10|max:32|unique:tournament,name',
            'eventStartDate' => 'required|date|after_or_equal:eventEndInscDate',
            'eventStartInscDate' => 'required|date|after_or_equal:now|before:eventEndInscDate',
            'eventEndInscDate' => 'nullable|date|after:eventStartInscDate|before:eventStartDate',
            'eventDescription' => 'required|string|max:32767',
            'eventPrize' => 'required|boolean',
            'eventRules' => 'nullable|string|max:32767',
            'eventPaid' => 'required|boolean',
            'eventLogo' => 'nullable|file|mimes:jpeg,bmp,png|max:1048576',
        ]);
    }

    private function create(array $data) {
        if (Auth::user() == null)
            return redirect(route('login'));

        return Tournament::create([
            'creator_id' => Auth::user()->id,
            'game_id' => $data["codGame"],
            'platform' => $data["gamePlataform"],
            'email' => $data["eventEmail"],
            'phone' => $data["eventPhone"],
            'name' => $data["eventName"],
            'insc_start' => strtotime($data["eventStartInscDate"]),
            'insc_end' => strtotime($data["eventEndInscDate"]),
            'start_data' => strtotime($data["eventStartDate"]),
            'about' => $data["eventDescription"],
            'prizes' => $data["eventPrize"],
            'paid' => $data["eventPaid"],
            'rules' => $data["eventRules"],
            'mode' => $data["eventMode"],
            'type' => $data["eventType"],
            'team_amount' => pow(2, $data["eventModeTeamsAmount"]),
            'min_members' => max(0, $data["minMemberPerTeam"]),
            'max_members' => max(0, $data["maxMemberPerTeam"]),
            'solo_amount' => max(0, $data["eventModeSoloAmount"])
        ]);
    }

    public function getPlatformPerGame(Request $request){
        $str  = "";
        foreach (GamesPlatformRelation::where('game_id', '=', $request->all()["id"])->get() as $relation)
        {
            $plat = GamePlatform::where('id', $relation->platform_id)->firstOrFail();
            $str .= "<label class=\"btn btn-secondary\">
                            <input type=\"radio\" name=\"gamePlataform\" id=\"platform$relation->platform_id\" autocomplete=\"off\"
                                   value=\"$plat->id\" checked> $plat->name
                        </label>\r\n";
        }
        return $str;
    }

    public function continueTournamentCreation($id) {
        if (Auth()->guest())
            return redirect()->route('login');

        if (!preg_match('/^[0-9]*$/', $id))
            return redirect()->route('home')->withErrors(\Lang::get('tournament.creation_event_invalid_id'));

        $tournament = Tournament::find($id);
        if (!isset($tournament) || $tournament == null)
            return redirect()->route('home')->withErrors(\Lang::get('tournament.creation_event_not_exist'));

        if (Auth()->user()->id != $tournament->creator_id)
            return redirect()->route('home');

        if ($tournament->release > 0)
            return redirect()->route('home')->withErrors(\Lang::get('tournament.creation_event_already_complete'));

        return view('master', [
            'routeName' => 'tournament',
            'subRoute' => 'create',
            'id' => $id,
            'tournament' => $tournament
        ]);
    }
}