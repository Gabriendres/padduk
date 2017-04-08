<?php
use Illuminate\Database\Seeder;
class EmpresasTableSeeder extends Seeder
{

    public function run()
    {
        factory(App\Modelo\Empresa::class, 5)->create();
    }
}