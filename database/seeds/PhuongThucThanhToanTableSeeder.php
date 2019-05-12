<?php

use Illuminate\Database\Seeder;

class PhuongThucThanhToanTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phuong_thuc_thanh_toans')->insert([
            [
                'phuongThuc' => 'Chuyển khoản',
                'status' => '1'
            ],
            [
                'phuongThuc' => 'Paypal',
                'status' => '1'
            ]
            
        ]);
    }
}
