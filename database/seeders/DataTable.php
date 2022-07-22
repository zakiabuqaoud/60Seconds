<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("data")->insert([
            "best" => "Best Mobile Apps Showcase",
            "lorem" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,",
            "bestImage" => "front/images/mockup.png",
            "playstore" => "Playstore",
            "appstore" => "Appstore",
            "likes" => "Likes",
            "likesNumber" => "8,300+",
            "likesImage" => "front/images/like.svg",
            "communication" => "Communication",
            "communicationNumber" => "3,000+",
            "communicationImage" => "front/images/comments.svg",
            "advertising" => "Advertising",
            "advertisingNumber" => "103,570+",
            "advertisingImage" => "/front/images/noise.svg",
            "users" => "Users",
            "usersNumber" => "123,000+",
            "usersImage" => "/front/images/user-group.svg",
            "about" => "ABOUT THE APP",
            "aboutImage" => "/front/images/about.png",
            "reliable" => "Reliable and Secure Platform",
            "everything" => "Everything is perfectly orgainized for future",
            "tons" => "Tons of features and easy to use and customize",
            "feature" => "Our Features"
        ]);
    }
}
