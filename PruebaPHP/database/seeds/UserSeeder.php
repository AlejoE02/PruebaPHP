<?php

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
        //
        User::insert([
            ['name'=>'Coordinador','email'=>'root@app.com','password'=> bcrypt('root'), 'FK_tipo_usuario'=>'1']
        ]);
    }
}
