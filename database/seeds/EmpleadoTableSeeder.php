<?php
use Illuminate\Database\Seeder;
class EmpleadoTableSeeder extends Seeder
{

    public function run()
    {
        factory(App\Modelo\Empleado::class, 5)->create();
    }
}