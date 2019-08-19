<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Admin::class)->create([
            'name' => 'admin',
            'email' => 'admin@foxmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
