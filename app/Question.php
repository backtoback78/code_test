<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    public function category()
  	{
    
    	return $this->belongsTo(Category::class); // relie la table robots à la table categories ManyToOne. On va chercher une category a partir du robot.
    	
  	}

    
    public function User()
  	{
    
    	return $this->belongsTo(Category::class); // relie la table robots à la table categories ManyToOne. On va chercher une category a partir du robot.
    	
  	}



}
