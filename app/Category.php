<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     public function questions()
  	{
    
    	return $this->hasMany(Question::class); // relie la table robots à la table categories ManyToOne. On va chercher une category a partir du robot.
    	
  	}
}
