<?php

namespace Database\Seeders;

use App\Models\Proximidade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProximidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proximidades = [
            'Academia', 
            'Banco', 
            'Bombeiro', 
            'Cinema', 
            'Clínica Médica', 
            'Correios', 
            'Escola', 
            'Estacionamento', 
            'Farmácia', 
            'Hospital', 
            'Padaria', 
            'Parque', 
            'Ponto de Ônibus', 
            'Ponto de Táxi', 
            'Posto de Combustível', 
            'Posto Policial', 
            'Restaurante', 
            'Supermercado', 
        ];

        foreach($proximidades as $proximidade) {
            Proximidade::create([
                'nome' => $proximidade
            ]);
        }
    }
}
