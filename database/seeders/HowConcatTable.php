<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HowConcatTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('howconcats')->insert([
            "how" => "How it's works",
            "howImage" => "/front/images/how.png",
            "loremSmoll" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
            "first" => "First Step for App",
            "second" => "Second Step for App",
            "Third" => "Third Step for App",
            "Fourth" => "Fourth Step for App",
            "client" => "What Our Client's Say",
            "connectUs" => "Connect Us",
            "contactInformation" => "Contact Information",
            "fullNameImage" => "front/images/icon-user.svg",
            "emailImage" => "front/images/icon-mail.svg",
            "ContactForm" => "Contact Form",
            "location" => "Location :",
            "locationValue" => "Jurain,Dhaka Bangladesh",
            "locationImage" => "front/images/icon-map.svg",
            "email" => "Email:",
            "emailValue" => "websitename@gmail.com",
            "mobile" => "Mobile NO.:",
            "mobileValue" => "+1234321321",
            "mobileImage" => "front/images/icon-mobile.svg",
            "phone" => "Phone NO.:",
            "phoneValue" => "+1234321321",
            "phoneImage" => "front/images/icon-phone.svg",

        ]);
    }
}
