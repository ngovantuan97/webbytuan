<?php

use Illuminate\Database\Seeder;

class MucGiaTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mucgias')->insert([
            [
                'tenMucGia' => '1-5 triệu',
                'mucGiaTu' => '1000000',
                'mucGiaDen' => '5000000',
                'status' => '1'

            ],
            [
                'tenMucGia' => '6-10 triệu',
                'mucGiaTu' => '6000000',
                'mucGiaDen' => '10000000',
                'status' => '1'
            ],
            [
                'tenMucGia' => '11-20 triệu',
                'mucGiaTu' => '11000000',
                'mucGiaDen' => '20000000',
                'status' => '1'
            ],
            [
                'tenMucGia' => '21-30 triệu',
                'mucGiaTu' => '21000000',
                'mucGiaDen' => '30000000',
                'status' => '1'
            ],
            [
                'tenMucGia' => '31-50 triệu',
                'mucGiaTu' => '31000000',
                'mucGiaDen' => '50000000',
                'status' => '1'
            ],
            [
                'tenMucGia' => 'Trên 50 triệu',
                'mucGiaTu' => '50000000',
                'mucGiaDen' => '5000000000',
                'status' => '1'
            ]
        ]);
    }
}
