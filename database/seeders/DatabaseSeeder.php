<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Book;
use App\Models\Loan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create(['name' => 'Admin', 'email' => 'admin@perpus.test', 'password' => 'password', 'role' => 'admin']);
        User::create(['name' => 'Dimas', 'email' => 'siswa@perpus.test', 'password' => 'password', 'role' => 'siswa', 'kelas' => 'XII RPL 3']);

        Book::create(['title' => 'Laskar Pelangi', 'author' => 'Andrea Hirata', 'publisher' => 'Bentang Pustaka', 'year' => 2005, 'stock' => 4]);
        Book::create(['title' => 'Bumi', 'author' => 'Tere Liye', 'publisher' => 'Gramedia Pustaka Utama', 'year' => 2014, 'stock' => 3]);
        Book::create(['title' => 'Belajar Laravel', 'author' => 'Budi Raharjo', 'publisher' => 'Informatika', 'year' => 2023, 'stock' => 5]);
    }
}
