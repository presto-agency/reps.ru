<?php

namespace App\Traits\ModelRelations;


use App\Models\TourneyList;
use App\User;

trait TourneyPlayerRelation
{

    /**
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function tourney()
    {
        return $this->belongsTo(TourneyList::class, 'tourney_id', 'id');
    }

}
