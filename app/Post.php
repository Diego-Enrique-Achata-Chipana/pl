<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    public function editTitle($newtitle){
        $this->title = $newtitle;
        $this->save();
    }
}
