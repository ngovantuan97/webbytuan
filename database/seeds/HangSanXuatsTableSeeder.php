<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class HangSanXuatsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('hangsanxuats')->insert([
        	[
        		'tenHang' => 'SamSung',
        		'status' => '1',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
        		'tenHang' => 'Nokia',
        		'status' => '1',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
        		'tenHang' => 'Apple',
        		'status' => '1',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
        		'tenHang' => 'Xiaomi',
        		'status' => '1',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
        		'tenHang' => 'OPPO',
        		'status' => '1',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        	[
        		'tenHang' => 'Hawei',
        		'status' => '1',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        	],
        ]);
    }
}
