<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        Employee::query()->insert([
            'name' => Str::random(12),
            'surname' => Str::random(12),
            'position' => Str::random(15),
            'phone' => rand(100000000,999999999),
            'is_hired' => (bool)random_int(0, 1),
        ]);
    }
}
