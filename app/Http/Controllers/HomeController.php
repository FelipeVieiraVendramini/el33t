<?php

namespace App\Http\Controllers;

use App\GamePlatform;
use App\Games;
use App\Tournament;

class HomeController extends Controller
{
    public function loadIndex() {
        $games = Games::all();
        return view('master', ['routeName' => 'master', 'games' => $games]);
    }

    public function loadPlay($search = null, $page = null) {
        $amountPerPage = env('TOURNAMENTS_LIST_PAGE_LIMIT');

        if ($search == null)
            $search = 'all';
        if ($page == null || !preg_match('/^[0-9]*$/', $page))
            $page = 0;
        else
            $page = max(1, $page-1);

        $resultCount = 0;
        if ($search == 'all') {
            $resultCount = Tournament::all()->count();

            if ($page * $amountPerPage > $resultCount) {
                $page = ($resultCount-($resultCount%$amountPerPage))/$amountPerPage;
            }

            \Log::debug($page*$amountPerPage . " e " . $page*$amountPerPage);
            $tournaments = Tournament::skip($page*$amountPerPage)->take($amountPerPage)->get();
        }
        else {
            $platform = GamePlatform::where('name', $search)->first();
            if ($platform == null)
                return redirect()->route('play')->withErrors('Invalid platform.');

            $resultCount = Tournament::where('platform', $platform->id)->count();
            if ($page * $amountPerPage > $resultCount) {
                $page = ($resultCount-($resultCount%$amountPerPage))/$amountPerPage;
            }

            $tournaments = Tournament::where('platform', $platform->id)->skip($page*$amountPerPage)
                ->take(10)->get();
        }

        foreach ($tournaments as $tournament)
            $tournament->init();

        $games = Games::all();
        $platforms = GamePlatform::all();

        return view('master', [
            'routeName' => 'play',
            'platform' => $search,
            'pagination' => $page,
            'tournaments' => $tournaments,
            'max_result' => $resultCount,
            'games' => $games,
            'platforms' => $platforms
        ]);
    }
}
