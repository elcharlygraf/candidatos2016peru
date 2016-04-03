<?php

use Illuminate\Database\Seeder;

class CandidatosSeed extends Seeder
{

    public function run()
    {
        DB::table('candidatos')->insert(
        array(
			array(
				'nombres' => 'ALAN GARCIA PEREZ',
				'partido' => 'ALIANZA POPULAR',
				'logo'	  => 'alan.png'
				),
			array(
				'nombres' => 'ALEJANDRO TOLEDO',
				'partido' => 'PERU POSIBLE',
				'logo'	  => 'toledo.png'
				),
			array(
				'nombres' => 'ANTERO FLORES ARAOZ',
				'partido' => 'PARTIDO POLITICO ORDEN',
				'logo'	  => 'antero.png'
				),
			array(
				'nombres' => 'GREGORIO SANTOS G.',
				'partido' => 'DEMOCRACIA DIRECTA',
				'logo'	  => 'gregorio.png'
				),
			array(
				'nombres' => 'ALFREDO BARNECHEA G.',
				'partido' => 'ACCION POPULAR',
				'logo'	  => 'bernechea.png'
				),
			array(
				'nombres' => 'KEIKO FUJIMORI H.',
				'partido' => 'FUERZA POPULAR',
				'logo'	  => 'keiko.png'
				),
			array(
				'nombres' => 'FERNANDO OLIVERA VEGA',
				'partido' => 'FRENTE ESPERANZA',
				'logo'	  => 'popi.png'
				),
			array(
				'nombres' => 'MIGUEL HILARIO E.',
				'partido' => 'PROGRESANDO PERU',
				'logo'	  => 'hilario.png'
				),
			array(
				'nombres' => 'PEDRO PABLO KUCZYNSKI',
				'partido' => 'PERUANOS POR EL KAMBIO',
				'logo'	  => 'ppk.png'
				),
			array(
				'nombres' => 'VERONIKA MENDOZA',
				'partido' => 'EL FRENTE AMPLIO',
				'logo'	  => 'veronika.png'
				)
        ));
    }
}
