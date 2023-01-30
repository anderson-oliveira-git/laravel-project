<?php

namespace Database\Seeders;

use App\Models\Finalidade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FinalidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $finalidades = [
            'Aluguel',
            'Venda',
            'Troca'
        ];

        foreach($finalidades as $finalidade) {
            Finalidade::create([
                'nome' => $finalidade
            ]);
        }
    }
}
