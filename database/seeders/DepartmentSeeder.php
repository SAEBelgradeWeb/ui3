<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create(['title' => 'Cardiology']);
        Department::create(['title' => 'Psychiatry']);
        Department::create(['title' => 'Urology']);
        Department::create(['title' => 'Gastroenterology']);
    }
}
