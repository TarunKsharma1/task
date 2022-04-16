<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "email" =>'admin@task.com',
            "password" => bcrypt('12345'),
            "name" => "tarun",
        ]);
    }
}
