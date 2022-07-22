<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Data;
use Illuminate\Support\Facades\DB;

class DataTableTrans extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $best01['bestImage'] = "front/images/mockup.png";
        $best01['likesNumber'] = "8,300+";
        $best01['communicationNumber'] = "3,000+";
        $best01['advertisingNumber'] = "103,570+";
        $best01['usersNumber'] = "123,000+";
        $best01['likesImage'] = "front/images/like.svg";
        $best01['communicationImage'] = "front/images/comments.svg";
        $best01['advertisingImage'] = "/front/images/noise.svg";
        $best01['usersImage'] = "/front/images/user-group.svg";
        $best01['aboutImage'] = "/front/images/about.png";

        //
        $best01['best'] = [
            'en' => "Best Mobile Apps Showcase",
            'ar' => "أفضل عرض لتطبيقات الجوال"
        ];
        $best01['lorem'] = [
            'en' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,",
            'ar' => "لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. لوريم إيبسوم هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ،"
        ];
        $best01['playstore'] = [
            'en' => "Playstore",
            'ar' => "المتجر"
        ];
        $best01['appstore'] = [
            'en' => "Appstore",
            'ar' => "متجر التطبيقات"
        ];
        $best01['likes'] = [
            'en' => "Likes",
            'ar' => "اعجاب"
        ];
        $best01['communication'] = [
            'en' => "Comunication",
            'ar' => "الاتصالات"
        ];
        $best01['advertising'] = [
            'en' => "Best Mobile Apps Showcase",
            'ar' => "الاعلان"
        ];
        $best01['users'] = [
            'en' => "Usres",
            'ar' => "المستخدمين"
        ];
        $best01['about'] = [
            'en' => "ABOUT THE APP",
            'ar' => "حول التطبيق"
        ];
        $best01['reliable'] = [
            'en' => "Reliable and Secure Platform",
            'ar' => "منصة موثوقة وآمنة"
        ];
        $best01['everything'] = [
            'en' => "Everything is perfectly orgainized for future",
            'ar' => "كل شيء منظم تمامًا للمستقبل"
        ];
        $best01['tons'] = [
            'en' => "Tons of features and easy to use and customize",
            'ar' => "طن من الميزات وسهلة الاستخدام والتخصيص"
        ];
        $best01['feature'] = [
            'en' => "Our Features",
            'ar' => "ميزاتنا"
        ];

        Data::create($best01);
    }
}
