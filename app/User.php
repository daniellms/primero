<?php

namespace App;

use CreateAsignarRolesTable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function roles(){
        //para relacion de tablas
        //definimos la relacion del usuario con el role
        //return $this -> belongsTo para one to 
        return $this -> belongsToMany(Role::class,'asignar_roles'); // me trae un array de los roles asignados a este usuario
    }
    
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tieneRole(array $roles){
      //  dd($this->role);
        foreach($roles as $role )
        {
            foreach($this->roles as $usuarioRole)
            {
                if($usuarioRole -> nombre_control === $role)
                {
                return true;//$usuarioRole -> nombre_control === $role;// si son iguales, devuelve verdadero
                }
            }
          //  return $usuarioRole -> nombre_control === $role; // si son iguales, devuelve verdadero
        }
    }

    public function esAdmin(){
        return $this->tieneRole(['admin']); // si tiene admin retorna true
    }
    
}
