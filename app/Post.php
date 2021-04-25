<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDelates;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
    ];
    
    
    
    public function getPaginate()
    {
        return $this->orderBy('updated_at','DESC')->paginate(5);
    }
}
