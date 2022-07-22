<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Howconcat;

class HowConcatTableTrans extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $best01['howImage'] = "/front/images/how.png";
        $best01['fullNameImage'] = "front/images/icon-user.svg";
        $best01['emailImage'] = "front/images/icon-mail.svg";
        $best01['locationImage'] = "front/images/icon-map.svg";
        $best01['mobileImage'] = "front/images/icon-mobile.svg";
        $best01['phoneImage'] = "front/images/icon-phone.svg";
        $best01['mobileValue'] = "+1234321321";
        $best01['phoneValue'] = "+1234321321";
        $best01['emailValue'] = "websitename@gmail.com";


        //
        $best01['how'] = [
            'en' => "How it's works",
            'ar' => "كيف يعمل"
        ];
        $best01['first'] = [
            'en' => "First Step for App",
            'ar' => "الخطوة الأولى للتطبيق"
        ];
        $best01['second'] = [
            'en' => "Second Step for App",
            'ar' => "الخطوة الثانية للتطبيق"
        ];
        $best01['third'] = [
            'en' => "Third Step for App",
            'ar' => "الخطوة الثالثة للتطبيق "
        ];
        $best01['fourth'] = [
            'en' => "Fourth Step for App",
            'ar' => "الخطوة الرابعة للتطبيق"
        ];
        $best01['loremSmoll'] = [
            'en' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
            'ar' => "لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد"
        ];
        $best01['client'] = [
            'en' => "What Our Client's Say",
            'ar' => "ماذا يقول عملاؤنا"
        ];
        $best01['connectUs'] = [
            'en' => "Connect Us",
            'ar' => "اتصل بنا"
        ];
        $best01['contactInformation'] = [
            'en' => "Contact Information",
            'ar' => "معلومات الاتصال "
        ];
        $best01['contactForm'] = [
            'en' => "Contact Form",
            'ar' => "نموذج الاتصال"
        ];
        $best01['location'] = [
            'en' => "Location :",
            'ar' => "الموقع"
        ];
        $best01['locationValue'] = [
            'en' => "Jurain,Dhaka Bangladesh",
            'ar' => "جورين ، دكا بنغلادش"
        ];
        $best01['email'] = [
            'en' => "Email:",
            'ar' => "البريد الإلكتروني"
        ];
        $best01['mobile'] = [
            'en' => "Mobile NO.:",
            'ar' => "رقم الجوال "
        ];
        $best01['phone'] = [
            'en' => "Phone NO.:",
            'ar' => "رقم الهاتف "
        ];
        $best01['placeholderFullName'] = [
            'en' => "الاسم بالكامل",
            'ar' => ""
        ];
        $best01['placeholderEmail'] = [
            'en' => "Email",
            'ar' => " البريد الإلكتروني"
        ];
        $best01['placeholderMessage'] = [
            'en' => "Write your message here",
            'ar' => "اكتب رسالتك هنا"
        ];
        $best01['send'] = [
            'en' => "send",
            'ar' => "ارسال"
        ];
        $best01['homeList'] = [
            'en' => "Home",
            'ar' => "الرئيسية"
        ];
        $best01['aboutList'] = [
            'en' => "About",
            'ar' => "حول"
        ];
        $best01['featureList'] = [
            'en' => "Features",
            'ar' => "الميزات"
        ];
        $best01['howWorkList'] = [
            'en' => "How Work",
            'ar' => "كيف يعمل"
        ];
        $best01['reviewsList'] = [
            'en' => "Reviews",
            'ar' => "المراجع"
        ];
        $best01['connectList'] = [
            'en' => "Connect",
            'ar' => "اتصل بنا"
        ];
        Howconcat::create($best01);
    }
}
