<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Value::create([
            "attribute_id" => 1,
            "name" => "red",
        ]);

        Value::create([
            "attribute_id" => 1,
            "name" => "blue",
        ]);

        Value::create([
            "attribute_id" => 1,
            "name" => "dark",
        ]);

        Value::create([
            "attribute_id" => 2,
            "name" => "MDF",
        ]);

        Value::create([
            "attribute_id" => 2,
            "name" => "LDP",
        ]);
    }
}
