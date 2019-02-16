<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Post extends Model
{
    //Table Name
    Protected $table ='posts';
    //Primary Key
    protected $primarykey= 'id';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
