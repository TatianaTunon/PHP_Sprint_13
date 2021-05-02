<?php

namespace App\Policies;

use App\Models\User;
use App\Models\reservas;
use Illuminate\Auth\Access\HandlesAuthorization;

class reservasPolicy
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
     * @param  \App\Models\reservas  $reservas
     * @return mixed
     */
    public function view(User $user, reservas $reservas)
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
     * @param  \App\Models\reservas  $reservas
     * @return mixed
     */
    public function update(User $user, reservas $reservas)
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
     * @param  \App\Models\reservas  $reservas
     * @return mixed
     */
    public function delete(User $user, reservas $reservas)
    {
        if ($user->hasRole('admin')) {
            return true;}

        if ($user->hasRole('jefe_departament')) {
            return true;}
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\reservas  $reservas
     * @return mixed
     */
    public function restore(User $user, reservas $reservas)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\reservas  $reservas
     * @return mixed
     */
    public function forceDelete(User $user, reservas $reservas)
    {
        //
    }
}
