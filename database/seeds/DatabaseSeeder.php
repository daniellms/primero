<?php

use App\User;
use App\Mensaje;
use App\Producto;
use App\Role;
use Illuminate\Database\Seeder;
  // siempre importar la clase sino no reconoce

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // $this->createMensaje();
       //acordarse de q si no se pone a ejecutar estos metodos  aca nunca ejecutara os mismos
        $this->createUser();
        $this->createProducto();
        $this->createRole();
    }

    // protected function createMensaje()
    // {
    //     Mensaje::create([
    //         'nombre' => 'Natanael',
    //         'email' => 'nata@gmail.com',
    //         'mensaje' => 'este es un mensaje de prueba'
    //     ]);
    // }
    protected function createProducto()
    {
        Producto::create([
            //'nombre', 'tipo', 'numero_fisico','precio_compra','precio_venta','marca'
            'nombre' => 'guitarra',
            'tipo' => 'instrumento',
            'numero_fisico' => '123',
            'precio_compra' => 50,
            'precio_venta' => 100.50,
            'marca' => 'gibson'
        ]);
    }

    protected function createRole()
    {
        Role::create([
            // id nombre_control nombre_visual  descripcion 
            'nombre_control' => 'admin',
            'nombre_visual' => 'administrador de la aplicacion',
            'descripcion' => 'el admin tiene acceso total'
        ]);

        Role::create([
            // id nombre_control nombre_visual  descripcion 
            'nombre_control' => 'user',
            'nombre_visual' => 'Usuario novato',
            'descripcion' => 'El usuario no tiene acceso total a la aplicacion'
        ]);
    }
    

    protected function createUser()
    {
        User::create([
            'name' => 'daniel',
            'email' => 'correo@gmail.com',
            'password' => bcrypt('pass'),
            //'role_id' => 1
        ]);
        User::create([
            'name' => 'maximiliano',
            'email' => 'micorreo@gmail.com',
            'password' => bcrypt('pass1'),
           // 'role_id' => 1
        ]);

        User::create([
            'name' => 'romeo',
            'email' => 'otrocorreo@gmail.com',
            'password' => bcrypt('p123'),
           // 'role_id' => 2
        ]);
        User::create([
            'name' => 'mariela',
            'email' => 'mariela22@gmail.com',
            'password' => bcrypt('1231'),
         //   'role_id' => 2
        ]);
        User::create([
            'name' => 'federico',
            'email' => 'motrocorreoo@gmail.com',
            'password' => bcrypt('dddd'),
        //    'role_id' => 2
        ]);
    }
}
