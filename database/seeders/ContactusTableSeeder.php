<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contactus')->delete();
        
        \DB::table('contactus')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'mmhod',
                'email' => 'kdskl@ds.com',
                'phone' => '2838838',
                'subject' => 'dsfklj',
                'message' => 'kdsf jfkdjfksd ljflk jsdj fklsdj k jsdl',
                'ipandserver' => '{',
                'readornot' => 1,
                'created_at' => '2023-01-24 11:24:51',
                'updated_at' => '2023-01-24 11:24:51',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'dfslkajfkld',
                'email' => 'kljdkslf@dksl.com',
                'phone' => '2333',
                'subject' => 'kkdjlfdj',
                'message' => 'kldjsfkljsd',
                'ipandserver' => '{',
                'readornot' => 1,
                'created_at' => '2023-01-24 11:25:28',
                'updated_at' => '2023-01-24 11:25:28',
            ),
        ));
        
        
    }
}