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
        $usuario->name = "Juan";
        //$usuario->apellidos = "Mamani Mamani";
        $usuario->email = "juan99@gmail.com";
        $usuario->password = "123";
        $usuario->edad = 20;
        $usuario->peso = 785;
        $usuario->altura = 170;

        $usuario->save();

        $usuario2 = new User;
        $usuario2->name = "Carlos";
        //$usuario2->apellidos = "Perez H";
        $usuario2->email = "carlos98@gmail.com";
        $usuario2->password = "123";
        $usuario2->edad = 22;
        $usuario2->peso = 79;
        $usuario2->altura = 172;

        $usuario2->save();

        $usuario3 = new User;
        $usuario3->name = "Jorge";
        //$usuario3->apellidos = "Fernandez P";
        $usuario3->email = "jorge97@gmail.com";
        $usuario3->password = "123";
        $usuario3->edad = 29;
        $usuario3->peso = 98;
        $usuario3->altura = 180;

        $usuario3->save();
    }
}
/*{
    "name":"juans",
    "email":"juans@gmail.com",
    "password":"123",
    "edad":"22",
    "peso":"79",
    "altura":"172"
}*/
