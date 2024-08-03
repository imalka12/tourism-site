<?php

namespace App\Repositories;

use App\Repositories\Contracts\AboutRepositoryInterface;
use App\Team;

class AboutRepository implements AboutRepositoryInterface {
    
    /**
     * @inheritDoc
     */
    public function getTeamMembersList() {
        $members = Team::all();
        return $members;
    }

}