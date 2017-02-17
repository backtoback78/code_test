<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Category;

class Controller extends BaseController
{
     use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $nbPaginate;

    public function __construct(){
  
  		/*$cat=Category::all();
	  	
	  	dump($cat);*/

	  	$this->nbPaginate = env('NUMBER_PAGINATE', 2);

		view()->composer('partials.nav', function($view){

	// $categories = Category::pluck('id', 'title'); 
  
  		// select title, id, slug from categories
  		$categories =Category::all() ;// SELECT title, id FROM categories Queries builder

		$view->with('categories', $categories);

		});

	}




}
