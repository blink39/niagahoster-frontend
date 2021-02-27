<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Schema::create('users', function (Blueprint $table) {
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->string('password');
        // });

        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password')
        // ]);

        $path = public_path('boxbilling.sql');
        $sql = file_get_contents($path);
        DB::unprepared($sql);
    }
}
