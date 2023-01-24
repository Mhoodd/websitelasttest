<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewsModelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('news_models')->delete();
        
        \DB::table('news_models')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Make your team a Design driven company',
                'lang' => 1,
                'desc_news' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard..',
                'img_news' => '16745134311.jpg.jpg',
            'details_news' => '<p><span style="color: rgb(109, 109, 109); font-family: Inter, sans-serif; font-size: 16px; background-color: rgb(225, 225, 225);">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard</span></p><p><span style="color: rgb(109, 109, 109); font-family: Inter, sans-serif; font-size: 16px; background-color: rgb(225, 225, 225);">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard</span></p><p><span style="color: rgb(109, 109, 109); font-family: Inter, sans-serif; font-size: 16px; background-color: rgb(225, 225, 225);">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard</span><span style="color: rgb(109, 109, 109); font-family: Inter, sans-serif; font-size: 16px; background-color: rgb(225, 225, 225);"><br></span><span style="color: rgb(109, 109, 109); font-family: Inter, sans-serif; font-size: 16px; background-color: rgb(225, 225, 225);"><br></span><br></p>',
                'byname' => NULL,
                'active' => 1,
                'created_at' => '2023-01-23 22:37:11',
                'updated_at' => '2023-01-23 22:37:11',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'dsfakdasdfklasdj',
                'lang' => 1,
                'desc_news' => 'dkkkskkskskksk sdnfajh sdfjkha sdjkhf ksda >.....',
                'img_news' => '16745135812.jpg.jpg',
                'details_news' => '<p>fdsklafj sldkljf sdkjf safklsdjfkas DSFSD</p>',
                'byname' => 'dksjjsjsjjsj',
                'active' => 1,
                'created_at' => '2023-01-23 22:39:42',
                'updated_at' => '2023-01-23 22:55:17',
            ),
        ));
        
        
    }
}