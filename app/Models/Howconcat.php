<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Cviebrock\EloquentSluggable\Sluggable;

class Howconcat extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = [
        'how', 'first', 'second', 'third',
        "fourth", "loremSmoll", "client", "connectUs", "contactInformation",
        "contactForm", "location", "locationValue", "email", "mobile", "phone", "placeholderFullName", "placeholderEmail", "placeholderMessage",
        "send", "homeList", "aboutList", "featureList", "howWorkList", "reviewsList", "connectList"
    ];

    public $timestamps = false;
    public function asJson($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }
    ///////////////////////////////
    //how
    public function getHowenAttribute()
    {
        return $this->getTranslation('how', 'en');
    }
    public function getBestarAttribute()
    {
        return $this->getTranslation('how', 'ar');
    }
    //first
    public function getFirstenAttribute()
    {
        return $this->getTranslation('first', 'en');
    }
    public function getFirstenarAttribute()
    {
        return $this->getTranslation('first', 'ar');
    }
    //second
    public function getsSecondenAttribute()
    {
        return $this->getTranslation('second', 'en');
    }
    public function getSecondarAttribute()
    {
        return $this->getTranslation('second', 'ar');
    }
    //third
    public function getsThirdenAttribute()
    {
        return $this->getTranslation('third', 'en');
    }
    public function getThirdarAttribute()
    {
        return $this->getTranslation('third', 'ar');
    }
    //fourth
    public function getsFourthenAttribute()
    {
        return $this->getTranslation('fourth', 'en');
    }
    public function getFourtharAttribute()
    {
        return $this->getTranslation('fourth', 'ar');
    }
    //loremSmoll
    public function getLoremSmollenAttribute()
    {
        return $this->getTranslation('loremSmoll', 'en');
    }
    public function getLoremSmollarAttribute()
    {
        return $this->getTranslation('loremSmoll', 'ar');
    }
    //client
    public function getClientenAttribute()
    {
        return $this->getTranslation('client', 'en');
    }
    public function getClientarAttribute()
    {
        return $this->getTranslation('client', 'ar');
    }
    //connectUs
    public function getConnectUsenAttribute()
    {
        return $this->getTranslation('connectUs', 'en');
    }
    public function getConnectUsarAttribute()
    {
        return $this->getTranslation('connectUs', 'ar');
    }
    //contactInformation
    public function getContactInformationenAttribute()
    {
        return $this->getTranslation('contactInformation', 'en');
    }
    public function getContactInformationarAttribute()
    {
        return $this->getTranslation('contactInformation', 'ar');
    }
    //contactForm
    public function getContactFormenAttribute()
    {
        return $this->getTranslation('contactForm', 'en');
    }
    public function getContactFormarAttribute()
    {
        return $this->getTranslation('contactForm', 'ar');
    }
    //location
    public function getLocationenAttribute()
    {
        return $this->getTranslation('location', 'en');
    }
    public function getLocationarAttribute()
    {
        return $this->getTranslation('location', 'ar');
    }
    //locationValue
    public function getLocationValueenAttribute()
    {
        return $this->getTranslation('locationValue', 'en');
    }
    public function getLocationValuearAttribute()
    {
        return $this->getTranslation('locationValue', 'ar');
    }
    //email
    public function getEmailenAttribute()
    {
        return $this->getTranslation('email', 'en');
    }
    public function getEmailarAttribute()
    {
        return $this->getTranslation('email', 'ar');
    }
    //mobile
    public function getMobileenAttribute()
    {
        return $this->getTranslation('mobile', 'en');
    }
    public function getMobilearAttribute()
    {
        return $this->getTranslation('mobile', 'ar');
    }
    //phone
    public function getPhoneenAttribute()
    {
        return $this->getTranslation('phone', 'en');
    }
    public function getPhonearAttribute()
    {
        return $this->getTranslation('phone', 'ar');
    }
    //placeholderFullName
    public function getPlaceholderFullNameenAttribute()
    {
        return $this->getTranslation('placeholderFullName', 'en');
    }
    public function getPlaceholderFullNamearAttribute()
    {
        return $this->getTranslation('placeholderFullName', 'ar');
    }
    //placeholderEmail
    public function getplaceholderEmailenAttribute()
    {
        return $this->getTranslation('placeholderEmail', 'en');
    }
    public function getplaceholderEmailarAttribute()
    {
        return $this->getTranslation('placeholderEmail', 'ar');
    }
    //placeholderMessage
    public function getPlaceholderMessageenAttribute()
    {
        return $this->getTranslation('placeholderMessage', 'en');
    }
    public function getPlaceholderMessagearAttribute()
    {
        return $this->getTranslation('placeholderMessage', 'ar');
    }
    //send
    public function getSendenAttribute()
    {
        return $this->getTranslation('send', 'en');
    }
    public function getSendarAttribute()
    {
        return $this->getTranslation('send', 'ar');
    }
    //homeList
    public function getHomeListenAttribute()
    {
        return $this->getTranslation('homeList', 'en');
    }
    public function getHomeListarAttribute()
    {
        return $this->getTranslation('homeList', 'ar');
    }
    //aboutList
    public function getAboutListenAttribute()
    {
        return $this->getTranslation('aboutList', 'en');
    }
    public function getAboutListarAttribute()
    {
        return $this->getTranslation('aboutList', 'ar');
    }
    //featureList
    public function getFeatureListenAttribute()
    {
        return $this->getTranslation('featureList', 'en');
    }
    public function getFeatureListarAttribute()
    {
        return $this->getTranslation('featureList', 'ar');
    }
    //howWorkList
    public function getHowWorkListenAttribute()
    {
        return $this->getTranslation('howWorkList', 'en');
    }
    public function getHowWorkListarAttribute()
    {
        return $this->getTranslation('howWorkList', 'ar');
    }
    //reviewsList
    public function getReviewsListenAttribute()
    {
        return $this->getTranslation('reviewsList', 'en');
    }
    public function getReviewsListarAttribute()
    {
        return $this->getTranslation('reviewsList', 'ar');
    }
    //connectList
    public function getConnectListenAttribute()
    {
        return $this->getTranslation('connectList', 'en');
    }
    public function getConnectListarAttribute()
    {
        return $this->getTranslation('connectList', 'ar');
    }
}
