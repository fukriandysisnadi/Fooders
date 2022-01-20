<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
           ['banner' => 'BackgroundBanner.jpg'],
           ['banner' => 'BannerSale.jpg'],
           ['banner' => 'SaleBanner.jpg'],
        ]);
    }
}
