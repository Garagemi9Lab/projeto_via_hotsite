<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(User::where('email','=', 'rafael@garagemi9lab.com.br')->count()){
            $usuario = User::where('email','=', 'rafael@garagemi9lab.com.br')->first();
            $usuario->name = "Via";
            $usuario->email = "rafael@garagemi9lab.com.br";
            $usuario->password = Hash::make("via1234");
            $usuario->save();
            
        }else{
            $usuario = new User();
            $usuario->name = "Via";
            $usuario->email = "rafael@garagemi9lab.com.br";
            $usuario->password = Hash::make("via1234");
            $usuario->save();
            
        }
    }
}
