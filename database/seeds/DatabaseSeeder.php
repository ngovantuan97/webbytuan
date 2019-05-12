<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // 
        DB::table('hangsanxuats')->delete();
        $this->call(HangSanXuatsTableSeeder::class);

        DB::table('sanphams')->delete();
        $this->call(SanPhamsTableSeeder::class);

        DB::table('admins')->delete();
        $this->call(AdminTableSeeder::class);

        DB::table('mucgias')->delete();
        $this->call(MucGiaTableSeeder::class);

        DB::table('phuong_thuc_thanh_toans')->delete();
        $this->call(PhuongThucThanhToanTableSeeder::class);
    }
}
