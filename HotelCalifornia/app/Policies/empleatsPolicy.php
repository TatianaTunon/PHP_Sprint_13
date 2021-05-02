<?php

namespace App\Policies;

use App\Models\User;
use App\Models\empleats;
use Illuminate\Auth\Access\HandlesAuthorization;

class empleatsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\empleats  $empleats
     * @return mixed
     */
    public function view(User $user, empleats $empleats)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if ($user->hasRole('admin')) {
            return true;}

        if ($user->hasRole('jefe_departament')) {
            return true;}
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\empleats  $empleats
     * @return mixed
     */
    public function update(User $user, empleats $empleats)
    {
        if ($user->hasRole('admin')) {
            return true;}

        if ($user->hasRole('jefe_departament')) {
            return true;}
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\empleats  $empleats
     * @return mixed
     */
    public function delete(User $user, empleats $empleats)
    {
        if ($user->hasRole('admin')) {
            return true;}

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\empleats  $empleats
     * @return mixed
     */
    public function restore(User $user, empleats $empleats)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\empleats  $empleats
     * @return mixed
     */
    public function forceDelete(User $user, empleats $empleats)
    {
        //
    }
}
