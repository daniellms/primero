<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PoliticaUsuario
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function before($user, $ability)
    {// este metodo se ejecuta antes q todos los demas de esta clase, se puede poner cualquier 
        //condicion, si devuelve verdadero, niguno de los demas metodos se ejecutara
        // if ($user->tieneRole(['admin'])) {
        //     return true;
        // }
        if ($user->esAdmin() ) //este metodo utiliza otro metodo del modelo user(tieneAdmin)
        {
           return true;
        }

    }

    public function edit(User $authUser, User $user)
    {
        //return 'algo';
  //  return  dd(auth()->user()->id.$user->id);
      return $authUser->id === $user->id;
    }

    public function update(User $authUser, User $user)
    {
      return $authUser->id === $user->id;
    }
}
