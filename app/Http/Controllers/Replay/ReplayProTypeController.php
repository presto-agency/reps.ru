<?php

namespace App\Http\Controllers\Replay;

use App\Http\Controllers\Controller;
use App\Models\Replay;

class ReplayProTypeController extends Controller
{

    public function index($type)
    {
        $relations = [
            'users:id,name,avatar',
            'maps:id,name',
            'firstCountries:id,flag,name',
            'secondCountries:id,flag,name',
            'firstRaces:id,title,code',
            'secondRaces:id,title,code',
            'types:id,name,title',
            'comments',
        ];

        $replay = ReplayHelper::getReplaysWithType($relations, Replay::REPLAY_PRO, $type);
        $proRout = ReplayHelper::checkUrlPro() === true ? ReplayHelper::$REPLAY_PRO : false;
        $proRoutType = ReplayHelper::checkUrlProType($type) === true ? true : false;
        return view('replay.index',
            compact('replay', 'proRout', 'proRoutType', 'type')
        );
    }

    public function show($type, $id)
    {
        $relations = [
            'users:id,name,avatar,count_positive,count_negative',
            'users.totalComments',
            'maps:id,name,url',
            'types:id,name,title',
            'firstCountries:id,name,flag,name',
            'secondCountries:id,name,flag,name',
            'firstRaces:id,title,code',
            'secondRaces:id,title,code',
            'comments',
        ];
        $replay = ReplayHelper::findReplayWithType2($relations, $id,Replay::REPLAY_PRO);
        $countUserPts = $replay->users->totalComments->count();
        $proRout = ReplayHelper::checkUrlPro() === true ? ReplayHelper::$REPLAY_PRO : false;
        $proRoutType = ReplayHelper::checkUrlProType($type) === true ? ReplayHelper::$REPLAY_PRO : false;
        return view('replay.show',
            compact('replay', 'proRout', 'countUserPts', 'proRoutType', 'type')
        );
    }

}
