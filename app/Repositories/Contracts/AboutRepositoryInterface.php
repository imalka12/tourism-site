<?php

namespace App\Repositories\Contracts;

interface AboutRepositoryInterface
{

    /**
     * Get team memberes list
     * 
     * @return Collection<Team> $teamMembers
     */
    public function getTeamMembersList();
}
