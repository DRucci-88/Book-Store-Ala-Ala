<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\BookGenre;
use App\Models\Genre;
use App\Models\Receipt;
use App\Models\Role;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        Book::factory(15)->create();
        Genre::factory(5)->create();
//        Role::factory(2)->create();
//        User::factory(5)->create();
        Receipt::factory(15)->create();
        Transaction::factory(20)->create();
        BookGenre::factory(30)->create();

        User::create([
            'role_id' => 1,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin')
        ]);
        User::create([
            'role_id' => 2,
            'name' => 'robert',
            'email' => 'robert@gmail.com',
            'password' => Hash::make('robert')
        ]);

        Role::create([
            'name' => 'admin',
        ]);
        Role::create([
            'name' => 'member',
        ]);
    }
}
