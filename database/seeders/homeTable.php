<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class homeTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homes')->insert([
            "name" => "Best Mobile Apps Showcase",
            "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,",
            "image" => "front/images/mockup.png",

        ]);
        DB::table('homes')->insert([
            "name" => "Playstore",
            "content" => null,
            "image" => null
        ]);
        DB::table('homes')->insert([
            "name" => "Appstore",
            "content" => null,
            "image" => null
        ]);
        DB::table('homes')->insert([
            "name" => "Likes",
            "content" => "8,300+",
            "image" => "front/images/like.svg"
        ]);
        DB::table('homes')->insert([
            "name" => "Communication",
            "content" => "3,000+",
            "image" => "front/images/comments.svg"
        ]);
        DB::table('homes')->insert([
            "name" => "Advertising",
            "content" => "103,570+",
            "image" => "/front/images/user-group.svg"
        ]);
        DB::table('homes')->insert([
            "name" => "Users",
            "content" => "123,000+",
            "image" => "/front/images/user-group.svg"
        ]);
        DB::table('homes')->insert([
            "name" => "ABOUT THE APP",
            "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,",
            "image" => "/front/images/about.png"
        ]);
        DB::table('homes')->insert([
            "name" => "Our Features",
            "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,",
            "image" => null
        ]);
        DB::table('homes')->insert([
            "name" => "How it's works",
            "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,",
            "image" => "/front/images/how.png"
        ]);
        DB::table('homes')->insert([
            "name" => "First Step for App",
            "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
            "image" => null
        ]);
        DB::table('homes')->insert([
            "name" => "Second Step for App",
            "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
            "image" => null
        ]);
        DB::table('homes')->insert([
            "name" => "Third Step for App",
            "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
            "image" => null
        ]);
        DB::table('homes')->insert([
            "name" => "Fourth Step for App",
            "content" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
            "image" => null
        ]);
        DB::table('homes')->insert([
            "name" => "What Our Client's Say",
            "content" => null,
            "image" => null
        ]);
        DB::table('homes')->insert([
            "name" => "Reliable and Secure Platform",
            "content" => null,
            "image" => null
        ]);
        DB::table('homes')->insert([
            "name" => "Everything is perfectly orgainized for future",
            "content" => null,
            "image" => null
        ]);
        DB::table('homes')->insert([
            "name" => "Tons of features and easy to use and customize",
            "content" => null,
            "image" => null
        ]);
        DB::table('homes')->insert([
            "name" => "Connect us",
            "content" => null,
            "image" => 'front/images/icon-user.svg'
        ]);
        DB::table('homes')->insert([
            "name" => "Contact Information",
            "content" => "Contact Form",
            "image" => "front/images/icon-mail.svg"
        ]);
        DB::table('homes')->insert([
            "name" => "Location:",
            "content" => "Jurain,Dhaka Bangladesh",
            "image" => "front/images/icon-map.svg"
        ]);
        DB::table('homes')->insert([
            "name" => "Email:",
            "content" => "websitename@gmail.com",
            "image" => 'front/images/icon-mail.svg'
        ]);
        DB::table('homes')->insert([
            "name" => "Mobile NO.:",
            "content" => "+1234321321",
            "image" => 'front/images/icon-mobile.svg'
        ]);
        DB::table('homes')->insert([
            "name" => "Phone NO.:",
            "content" => "+1234321321",
            "image" => 'front/images/icon-phone.svg'
        ]);
        DB::table('homes')->insert([
            "name" => "© copyright 2021 all rights reserved",
            "content" => "send",
            "image" => null
        ]);
    }
}
