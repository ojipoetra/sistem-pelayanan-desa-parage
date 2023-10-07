<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categori;
use App\Models\Register;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        // Categori::create([
        //     'nama' => 'Pertanian',
        //     'slug' => 'pertanian'
        // ]);
        // Categori::create([
        //     'nama' => 'Olahrage',
        //     'slug' => 'olahrage'
        // ]);
        // Categori::create([
        //     'nama' => 'Ekonomi',
        //     'slug' => 'ekonomi'
        // ]);
        // Categori::create([
        //     'nama' => 'Umum',
        //     'slug' => 'umum'
        // ]);
    }
}
