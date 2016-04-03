<?php

use Illuminate\Database\Seeder;

class VotacionSeed extends Seeder
{

    public function run()
    {
        DB::table('votaciones')->insert(
        array(
			array(
				'candidato_id'    => 1,
				'departamento_id' => 14,
				'dni'			  => '12345678'
				),
			array(
				'candidato_id'    => 2,
				'departamento_id' => 14,
				'dni'			  => '87654321'
				),
			array(
				'candidato_id'    => 3,
				'departamento_id' => 14,
				'dni'			  => '14785236'
				),
			array(
				'candidato_id'    => 4,
				'departamento_id' => 14,
				'dni'			  => '14785296'
				),
			array(
				'candidato_id'    => 5,
				'departamento_id' => 14,
				'dni'			  => '96325874'
				),
			array(
				'candidato_id'    => 6,
				'departamento_id' => 14,
				'dni'			  => '96385214'
				),
			array(
				'candidato_id'    => 7,
				'departamento_id' => 14,
				'dni'			  => '00000000'
				),
			array(
				'candidato_id'    => 8,
				'departamento_id' => 14,
				'dni'			  => '11111111'
				),
			array(
				'candidato_id'    => 9,
				'departamento_id' => 14,
				'dni'			  => '22222222'
				),
			array(
				'candidato_id'    => 10,
				'departamento_id' => 14,
				'dni'			  => '33333333'
				),
			array(
				'candidato_id'    => 11,
				'departamento_id' => 14,
				'dni'			  => '44444444'
				)
        ));
    }
}
