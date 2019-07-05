<?php

use Illuminate\Database\Seeder;

class TipoUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        RolUsuario::insert([
            ['id'=>'1','descripcion'=>'Proveedor'],
            ['id'=>'2','descripcion'=>'Cliente']
        ]);
    }
}
