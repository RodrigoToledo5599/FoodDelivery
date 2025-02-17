<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{}
    function __construct(){

        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('password'),
            'endereco' => '123 Main St',
            'telefone' => '123-456-7890',
        ]);
        
        // Seed 2
        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'password' => Hash::make('password'),
            'endereco' => '456 Elm St',
            'telefone' => '456-789-0123',
        ]);
        
        // Seed 3
        User::create([
            'name' => 'Bob Johnson',
            'email' => 'bob@example.com',
            'password' => Hash::make('password'),
            'endereco' => '789 Oak St',
            'telefone' => '789-012-3456',
        ]);
        
        // Seed 4
        User::create([
            'name' => 'Alice Williams',
            'email' => 'alice@example.com',
            'password' => Hash::make('password'),
            'endereco' => '321 Pine St',
            'telefone' => '321-654-0987',
        ]);
        
        // Seed 5
        User::create([
            'name' => 'Michael Brown',
            'email' => 'michael@example.com',
            'password' => Hash::make('password'),
            'endereco' => '654 Cedar St',
            'telefone' => '654-987-0123',
        ]);
    }
}
