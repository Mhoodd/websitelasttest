<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GeneralinfoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('generalinfo')->delete();
        
        \DB::table('generalinfo')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Logo',
                'lang' => '1',
                'valueoftext' => '',
                'fileupload' => '1674531819logo_white.png.png',
                'typeofdata' => 'file',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-01-24 03:43:39',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Home',
                'lang' => '1',
                'valueoftext' => 'Home',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Services',
                'lang' => '1',
                'valueoftext' => 'Services',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Blog',
                'lang' => '1',
                'valueoftext' => 'Blog',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Contact',
                'lang' => '1',
                'valueoftext' => 'Contact',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Watch_Intro',
                'lang' => '1',
                'valueoftext' => 'Watch Intro',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'OurBestServices',
                'lang' => '1',
                'valueoftext' => 'Our Best Services',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'our_servicestext',
                'lang' => '1',
                'valueoftext' => 'There are many variations of sssssss kkk Ipsum available, but the majority have suffered alteration in some form.',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-01-24 03:59:36',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'lastnew_title',
                'lang' => '1',
                'valueoftext' => 'Latest News & Blog',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'lastnew_text',
                'lang' => '1',
                'valueoftext' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Get_toch',
                'lang' => '1',
                'valueoftext' => 'Get in Touch',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'readytostart',
                'lang' => '1',
                'valueoftext' => 'Ready to Get Started',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'readytostartdescription',
                'lang' => '1',
                'valueoftext' => 'At vero eos et accssssssus et iusto odio dignissimos ducimus quiblanditiis praesentium',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Name',
                'lang' => '1',
                'valueoftext' => 'Name',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Phone',
                'lang' => '1',
                'valueoftext' => 'Phone',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'email',
                'lang' => '1',
                'valueoftext' => 'Email',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'subject',
                'lang' => '1',
                'valueoftext' => 'Subject',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'message',
                'lang' => '1',
                'valueoftext' => 'Message',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'sendmessage',
                'lang' => '1',
                'valueoftext' => 'Send Message',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'address_word',
                'lang' => '1',
                'valueoftext' => 'Address',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Schedule_word',
                'lang' => '1',
                'valueoftext' => 'Schedule',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Schedule_text',
                'lang' => '1',
                'valueoftext' => '24 Hours / 7 Days Open
<br>
Office time: 10 AM - 5:30 PM',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'address_text',
                'lang' => '1',
                'valueoftext' => '175 5th Ave, New York, NY 10010 United States',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'contact_email',
                'lang' => '1',
                'valueoftext' => 'yourmail@gmail.com',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'contact_phone',
                'lang' => '1',
                'valueoftext' => '0984537278623',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Logo_footer',
                'lang' => '1',
                'valueoftext' => 'logo.png',
                'fileupload' => '1674531819logo.png.png',
                'typeofdata' => 'file',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-01-24 03:43:40',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'footer_text',
                'lang' => '1',
                'valueoftext' => 'Making the world a better place through constructing elegant hierarchies.',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'footer_copyright',
                'lang' => '1',
                'valueoftext' => '© 2024 Olivx. Designed and Developed',
                'fileupload' => '',
                'typeofdata' => '',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => '2023-01-24 03:59:48',
            ),
        ));
        
        
    }
}