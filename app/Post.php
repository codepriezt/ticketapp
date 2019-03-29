<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
         
     //primary key
    public $primarykey = 'id';

        //timestamp
    public $timestamp = 'true';
}
