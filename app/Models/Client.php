<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Client extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $fillable = [
        "name", "content", "image", "email"
    ];
    public $translatable = [
        "name", "content"
    ];

    public function asJson($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }
    /*
    //name
    public function getNameenAttribute()
    {
        return $this->getTranslation('name', 'en');
    }
    public function getNamearAttribute()
    {
        return $this->getTranslation('name', 'ar');
    }
    //content
    public function getContentenAttribute()
    {
        return $this->getTranslation('content', 'en');
    }
    public function getContentarAttribute()
    {
        return $this->getTranslation('content', 'ar');
    }
    */
}
