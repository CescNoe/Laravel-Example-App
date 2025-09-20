<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $v1 = new Vehicle();
        $v1->name='Vehículo 01';
        $v1->brand='Toyota';
        $v1->model='Yaris';
        $v1->year=1990;
        $v1->save();

        $v2 = new Vehicle();
        $v2->name='Vehículo 02clear';
        $v2->brand='Honda';
        $v2->model='Civic';
        $v2->year=1995;
        $v2->save();

        $v3 = new Vehicle();
        $v3->name='Vehículo 03';
        $v3->brand='Ford';
        $v3->model='Focus';
        $v3->year=2000;
        $v3->save();

        $v4 = new Vehicle();
        $v4->name='Vehículo 04';
        $v4->brand='Chevrolet';
        $v4->model='Malibu';
        $v4->year=2005;
        $v4->save();

        $v5 = new Vehicle();
        $v5->name='Vehículo 05';
        $v5->brand='Nissan';
        $v5->model='Altima';
        $v5->year=2010;
        $v5->save();
    }
}
