<?php
/**
 * Created by PhpStorm.
 * User: slenderman
 * Date: 29-01-15
 * Time: 04:13 PM
 */

class DocenteTableSeeder extends Seeder{

    public function run()
    {
        Eloquent::unguard();


        $docente = Docente::create(
            array(
                'rut'=>'11.111.111-1',
                'password'=>Hash::make('admin'),
                'nombre'=>'ADMIN',
                'apellidopaterno'=>'ADMIN',
                'apellidomaterno'=>'ADMIN',
                'genero'=>'masculino',
                'email'=>'admin@admin.cl',
                'deleted_at'=> null,
                'fk_departamento'=>'1'

            )

        );

        // $this->call('UserTableSeeder');
        $docente->save();
    }

}