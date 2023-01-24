<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutusinfoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('aboutusinfo')->delete();
        
        \DB::table('aboutusinfo')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'aboutus',
                'lang' => '1',
                'created_at' => NULL,
                'updated_at' => '2023-01-24 00:22:03',
                'aboutus_word' => 'About Us',
                'aboutus_text' => 'There are many variations of passages  Lorem Ipsum available, but the majority have in some form, by injected humour.
',
                'whoweare_word' => 'Who We Are',
                'whoweare_text' => '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-ssssssssssson of letters, look like readable English.</p><p>There are many variations of passages&nbsp; Lorem Ipsum available, but the majority have in some form, by injected humour.</p>',
                'ourvision_word' => 'Our Vision',
                'ourvision_text' => '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-levvvvvvvn of letters, look like readable English.</p><p>There are many variations of passages&nbsp; Lorem Ipsum available, but the majority have in some form, by injected humour.</p><p><br></p>',
                'ourhistory_word' => 'Our History',
                'ourhistory_text' => '<p>It is a long established fact that a reader wilhhhhhhhhhhhhhhh readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English.

There are many variations of passages  Lorem Ipsum available, but th</p><p style="box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; outline: none !important; margin-top: 0px; margin-bottom: 1rem; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Nunito Sans&quot;, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">mal distribution of letters, look like readable English.</p><p><br></p><p style="box-sizing: border-box; -webkit-font-smoothing: antialiased; text-rendering: optimizelegibility; outline: none !important; margin-top: 0px; margin-bottom: 1rem; font-size: 14px; color: rgb(0, 0, 0); font-family: &quot;Nunito Sans&quot;, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">There are many variations of passages&nbsp; Lorem Ipsum available, but th</p><p><br></p><p>e majority have in some form, by injected humour.</p>',
                'img_about' => '1674519641about-img1.jpg.jpg',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'عن الشركة',
                'lang' => '2',
                'created_at' => NULL,
                'updated_at' => NULL,
                'aboutus_word' => NULL,
                'aboutus_text' => NULL,
                'whoweare_word' => NULL,
                'whoweare_text' => NULL,
                'ourvision_word' => NULL,
                'ourvision_text' => NULL,
                'ourhistory_word' => NULL,
                'ourhistory_text' => NULL,
                'img_about' => NULL,
            ),
        ));
        
        
    }
}