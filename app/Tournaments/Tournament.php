<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Tournament extends Model
{
    //
    protected $table = "tournament";

    protected $fillable = [
        'creator_id', 'game_id', 'platform', 'email', 'phone', 'name', 'insc_start', 'insc_end', 'start_data', 'about',
        'prizes', 'paid', 'rules', 'mode', 'type', 'team_amount', 'min_members', 'max_members', 'solo_amount',
        'created_at', 'updated_at',
    ];

    public $TournamentSchedule;

    public $TournamentTeams;

    public $Game;

    public $Owner;

    public $Platform;

    public function init() {
        \Log::debug(sprintf('%d,%d,%d,%d', $this->game_id, $this->creator_id, $this->platform, $this->id));

        $this->Game = Games::find($this->game_id);
        $this->Owner = User::find($this->creator_id);
        $this->Platform = GamePlatform::find($this->platform);
        $this->TournamentSchedule = TournamentSchedule::where('tournament_id', $this->id)->get();
        $this->TournamentTeams = TournamentTeam::where('tournament_id', $this->id)->get();
    }

    public function getStartDate() {
        return date('d/m/Y H:i', $this->start_data);
    }
}