<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    //
    protected $fillable = [
        'bg_image', 'favicon', 'title', 'name', 'description', 'phone', 'one_liner',
        'address', 'fb_link', 'twitter_link', 'insta_link', 'youtube_link', 'other_links'
    ];

}
