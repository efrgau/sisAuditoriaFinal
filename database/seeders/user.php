<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->("name","Administrador");
        $user->("email","admin@admin.net");
        $user->("identification","123456578");
        $user->("celular","3206169881");
        $user->("password","FresitaRockera");
        $user->("idRol","3");
        $user->("Estado","5");
       
    }
}
