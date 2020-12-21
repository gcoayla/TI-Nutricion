<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new User;
        $usuario->nombre = "Juan";
        $usuario->apellidos = "Mamani Mamani";
        $usuario->correo = "juan99@gmail.com";
        $usuario->contrasena = "123";
        $usuario->edad = 20;
        $usuario->peso = 78.5;
        $usuario->altura = 1.70;
        
        $usuario->save();

        $usuario2 = new User;
        $usuario2->nombre = "Carlos";
        $usuario2->apellidos = "Perez H";
        $usuario2->correo = "carlos98@gmail.com";
        $usuario2->contrasena = "123";
        $usuario2->edad = 22;
        $usuario2->peso = 79.5;
        $usuario2->altura = 1.72;
        
        $usuario2->save();

        $usuario3 = new User;
        $usuario3->nombre = "Jorge";
        $usuario3->apellidos = "Fernandez P";
        $usuario3->correo = "jorge97@gmail.com";
        $usuario3->contrasena = "123";
        $usuario3->edad = 29;
        $usuario3->peso = 98.5;
        $usuario3->altura = 1.80;
        
        $usuario3->save();
    }
}
