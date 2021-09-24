<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function article(){
        // hasMany (perche' e' un rapporto 1 a molti) dove non abbiamo la foreign key 
        return $this->hasMany(Article::class);
 
    }
}
