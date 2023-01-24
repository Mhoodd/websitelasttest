<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sliders')->delete();
        
        \DB::table('sliders')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Corporate & Business',
                'lang' => 1,
                'title' => 'Corporate & Business Site Template by Ayro UI.',
                'desc_slide' => '              We are a digital agency that helps brands to achieve their
business outcomes. We see technology as a tool to create amazing
things.
',
                'img' => '1674509728hero-image.jpg.jpg',
                'icon' => NULL,
                'isavisable' => 1,
                'type' => 0,
                'urlvideo' => 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
                'created_at' => '2023-01-23 21:35:28',
                'updated_at' => '2023-01-23 21:50:10',
            ),
        ));
        
        
    }
}