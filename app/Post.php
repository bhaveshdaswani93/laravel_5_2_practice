<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at']
    ;
    public $directory = "/images/";
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function photos(){
        return $this->morphMany('App\Photo','imageable');
    }

    public function tags()
    {
        return $this->morphToMany('App\Tag','tagable');
    }

    protected $fillable = [
        'title','content','path'
    ];

    public static function scopeGetPost($query) {
        return $query->orderBy('id','desc');
    }
    
    public function getPathAttribute($value) {
        return $this->directory.$value;
    }

    
}
