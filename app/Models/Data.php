<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Cviebrock\EloquentSluggable\Sluggable;



class Data extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = [
        'best', 'lorem', 'playstore', 'appstore',
        "likes", "communication", "advertising", "users", "about",
        "reliable", "everything", "tons", "feature"
    ];
    public $timestamps = false;
    /*
    public function sluggable()
    {
        return [
            'slug->en' => [
                'source' => 'besten'
            ], 'slug->ar' => [
                'source' => 'bestar'
            ]
        ];
    }*//*
    public function getRouteKeyName()
    {
        return 'slag';
    }*/
    public function asJson($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }
    /////////////////////////////////////////trans
    //best
    public function getBestenAttribute()
    {
        return $this->getTranslation('best', 'en');
    }
    public function getBestarAttribute()
    {
        return $this->getTranslation('best', 'ar');
    }
    //Lorem
    public function getLoremenAttribute()
    {
        return $this->getTranslation('lorem', 'en');
    }
    public function getLoremarAttribute()
    {
        return $this->getTranslation('lorem', 'ar');
    }
    //playstore
    public function getPlaystoreenAttribute()
    {
        return $this->getTranslation('playstore', 'en');
    }
    public function getPlaystorearAttribute()
    {
        return $this->getTranslation('playstore', 'ar');
    }
    //appstore
    public function getAppstoreenAttribute()
    {
        return $this->getTranslation('appstore', 'en');
    }
    public function getAppstorearAttribute()
    {
        return $this->getTranslation('appstore', 'ar');
    }
    //likes
    public function getLikesenAttribute()
    {
        return $this->getTranslation('likes', 'en');
    }
    public function getLikesarAttribute()
    {
        return $this->getTranslation('likes', 'ar');
    }
    //communication
    public function getcommunicationenAttribute()
    {
        return $this->getTranslation('communication', 'en');
    }
    public function getCommunicationarAttribute()
    {
        return $this->getTranslation('communication', 'ar');
    }
    //advertising
    public function getAdvertisingenAttribute()
    {
        return $this->getTranslation('advertising', 'en');
    }
    public function getAdvertisingarAttribute()
    {
        return $this->getTranslation('advertising', 'ar');
    }
    //users
    public function getUsresenAttribute()
    {
        return $this->getTranslation('users', 'en');
    }
    public function getUsersarAttribute()
    {
        return $this->getTranslation('users', 'ar');
    }
    //about
    public function getAboutenAttribute()
    {
        return $this->getTranslation('about', 'en');
    }
    public function getAboutarAttribute()
    {
        return $this->getTranslation('about', 'ar');
    }
    //reliable
    public function getReliableenAttribute()
    {
        return $this->getTranslation('reliable', 'en');
    }
    public function getReliablearAttribute()
    {
        return $this->getTranslation('reliable', 'ar');
    }
    //everything
    public function getEverythingenAttribute()
    {
        return $this->getTranslation('everything', 'en');
    }
    public function getEverythingarAttribute()
    {
        return $this->getTranslation('everything', 'ar');
    }
    //tons
    public function getTonsenAttribute()
    {
        return $this->getTranslation('tons', 'en');
    }
    public function getTonsarAttribute()
    {
        return $this->getTranslation('tons', 'ar');
    }
    //feature
    public function getFeatureenAttribute()
    {
        return $this->getTranslation('feature', 'en');
    }
    public function getFeaturearAttribute()
    {
        return $this->getTranslation('feature', 'ar');
    }
}
