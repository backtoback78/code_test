<?php

namespace App;
use Carbon\Carbon;


use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    public function category()
  	{
    
    	return $this->belongsTo(Category::class); // relie la table robots à la table categories ManyToOne. On va chercher une category a partir du robot.
    	
  	}

    
    public function user()
  	{
    
    	return $this->belongsTo(User::class); // relie la table robots à la table categories ManyToOne. On va chercher une category a partir du robot.
    	
  	}

		protected $fillable = [
      'title',
      'abstract',
			'content',
      'category_id'
      ];



	public function getPublishedAtAttribute($date)
    {
      if ($date != null)
      {
        return Carbon::parse($date)->format('d/m/Y');
      }
      
    }
    
    public function setCategoryIdAttribute($value)
    {

      $this->attributes['category_id'] = (($value == 0) ? null : $value);


      /*dump($value); die;*/

    }



}
