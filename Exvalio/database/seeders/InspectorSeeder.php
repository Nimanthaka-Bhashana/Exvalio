<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class InspectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Inspector One',
            'email' => 'inspector1@exvalio.com',
            'password' => Hash::make('inspector123'),
            'role' => 'inspector',
        ]);

        User::create([
            'name' => 'Inspector Two',
            'email' => 'inspector2@exvalio.com',
            'password' => Hash::make('inspector123'),
            'role' => 'inspector',
        ]);
    }
}
