<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        DB::table('use')->insert([
            'name' => Str::random(10),
            'email'  => Str::random(10).'@gmail.com',
            'password' => Hash::make('12345'),
        ]);
        public function run()
		{
			DB::table('domains')->insert([
				'name' => Str::random(10) . '.com',
            ]);
            public function run()
		{
			DB::table('users')->insert([
				'name' => Str::random(10),
				'email' => Str::random(10).'@gmail.com',
				'password' => Hash::make('12345'),
			]);
		}

            }
    }
}
