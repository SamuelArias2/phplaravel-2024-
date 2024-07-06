<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();



        DB::table('estudiante')->insert([
            'nombre' => 'admin2',
            'apellido' => 'admin2',
            'email' => 'admin2@admin.com',
            'pin' => Hash::make('admin2'),
        ]);
    }
}
