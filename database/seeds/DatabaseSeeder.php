<?php

use Illuminate\Database\Seeder;
use App\Mensaje;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Mensaje::create([
            'nombre' => 'Natanael',
            'email' => 'nata@gmail.com',
            'mensaje' => 'este es un mensaje de prueba'
        ]);
    }
}
