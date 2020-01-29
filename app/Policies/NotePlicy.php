<?php

namespace App\Policies;

use App\Show;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NotePlicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function updateNote(User $user,Show $show)
    {
        return $user->owns($show);
    }
}
