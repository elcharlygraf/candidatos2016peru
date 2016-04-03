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
					'partido' => 'ALIANZA POPULAR'
					),
				array(
					'nombres' => 'ALEJANDRO TOLEDO MANRIQUE',
					'partido' => 'PERU POSIBLE'
					),
				array(
					'nombres' => 'ANTERO FLORES ARAOZ',
					'partido' => 'PARTIDO POLITICO ORDEN'
					),
				array(
					'nombres' => 'DIEZ-CANSECO TÁVARA',
					'partido' => 'PERU NACION'
					),
				array(
					'nombres' => 'GREGORIO SANTOS GUERRERO',
					'partido' => 'DEMOCRACIA DIRECTA'
					),
				array(
					'nombres' => 'ALFREDO BARNECHEA GARCIA',
					'partido' => 'ACCION POPULAR'
					),
				array(
					'nombres' => 'KEIKO FUJIMORI HIGUCHI',
					'partido' => 'FUERZA POPULAR'
					),
				array(
					'nombres' => 'FERNANDO OLIVERA VEGA',
					'partido' => 'FRENTE ESPERANZA'
					),
				array(
					'nombres' => 'MIGUEL HILARIO ESCOBAR',
					'partido' => 'PROGRESANDO PERU'
					),
				array(
					'nombres' => 'PEDRO PABLO KUCZYNSKI',
					'partido' => 'PERUANOS POR EL KAMBIO'
					),
				array(
					'nombres' => 'VERONIKA MENDOZA',
					'partido' => 'EL FRENTE AMPLIO'
					)
            ));
    }
}
