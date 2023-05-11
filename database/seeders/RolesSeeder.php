<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            \App\Models\Roles::insert([
                [
                    'name' => 'admin',
                    'slug' => 'admin',
                    'description' => 'Admin role management',
                ], [
                    'name' => 'customer',
                    'slug' => 'customer',
                    'description' => 'Customer role management',
                ], [
                    'name' => 'seller',
                    'slug' => 'seller',
                    'description' => 'Seller role management',
                ]]
            );
    }
}
