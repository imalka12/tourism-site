<?php

namespace App\Repositories\Contracts;

interface AboutRepositoryInterface {

    /**
     * Get team memberes list
     * 
     * @return Collection<App\Team> $teamMembers
     */
    public function getTeamMembersList();

}