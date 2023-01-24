<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Refreshing Design',
                'lang' => 1,
                'title' => 'Refreshing Design',
                'desc_service' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
eirmod tempor ividunt labor dolore magna.',
                'img' => '1674521382about-img1.jpg.jpg',
                'icon' => 'lni-capsule',
                'isavisable' => 1,
                'type' => 0,
                'created_at' => '2023-01-23 19:35:28',
                'updated_at' => '2023-01-24 01:14:03',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'Solid Bootstrap',
                'lang' => 1,
                'title' => 'Solid Bootstrap',
                'desc_service' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
eirmod tempor ividunt labor dolore magna.',
                'img' => '',
                'icon' => 'lni-bootstrap',
                'isavisable' => 1,
                'type' => 0,
                'created_at' => '2023-01-23 19:35:28',
                'updated_at' => '2023-01-24 01:14:03',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => '100+ Components',
                'lang' => 1,
                'title' => '100+ Components',
                'desc_service' => 'eirmod tempor ividunt labor dolore magnaeirmod tempor ividunt labor dolore magnaeirmod tempor ividunt labor dolore magna',
                'img' => NULL,
                'icon' => 'lni-shortcode',
                'isavisable' => 1,
                'type' => 0,
                'created_at' => '2023-01-24 12:44:27',
                'updated_at' => '2023-01-24 12:44:27',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'Speed Optimized',
                'lang' => 1,
                'title' => 'Speed Optimized',
                'desc_service' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
eirmod tempor ividunt labor dolore magna.',
                'img' => NULL,
                'icon' => 'lni-dashboard',
                'isavisable' => 1,
                'type' => 0,
                'created_at' => '2023-01-24 12:44:27',
                'updated_at' => '2023-01-24 12:44:27',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'Fully Customizable',
                'lang' => 1,
                'title' => 'Fully Customizable',
                'desc_service' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
eirmod tempor ividunt labor dolore magna.',
                'img' => NULL,
                'icon' => 'lni-layers',
                'isavisable' => 1,
                'type' => 0,
                'created_at' => '2023-01-24 12:46:03',
                'updated_at' => '2023-01-24 12:46:03',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'Regular Updates',
                'lang' => 1,
                'title' => 'Regular Updates',
                'desc_service' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
eirmod tempor ividunt labor dolore magna.
',
                'img' => NULL,
                'icon' => 'lni-reload',
                'isavisable' => 1,
                'type' => 0,
                'created_at' => '2023-01-24 12:46:03',
                'updated_at' => '2023-01-24 12:46:03',
            ),
        ));
        
        
    }
}