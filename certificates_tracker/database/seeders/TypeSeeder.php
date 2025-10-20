<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['name' => 'Certificate', 'description' => 'Certificates awarded for various skills.'],
            ['name' => 'PhD', 'description' => 'Doctoral degrees.'],
            ['name' => 'Diploma', 'description' => 'Academic diplomas.'],
        ];

        foreach ($types as $type) {
            Type::create($type);
        }
    }
}
