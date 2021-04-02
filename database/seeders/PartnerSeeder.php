<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 6; $i++) {
            $gallery = new Partner();
            $gallery->image = null;
            $gallery->link = 'https://www.google.com/';
            $gallery->save();
        }
    }
}
