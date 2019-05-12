<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert(
            [
                'username' => 'admin',
                'password' => md5('123456')
            ]
        );
    }
}
