<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Category;

class FrontController extends Controller
{
    public function index(){
    	
	  	$questions = Question::paginate($this->nbPaginate);

	    return view('front.index', ['questions' => $questions]);	   
        
  	}

      public function showQuestionsByCat($id, $slug= ''){
  
	  	/*return "hello $id.$slug";*/
	  	$questions= Category::find($id)->questions()->paginate($this->nbPaginate);

	  	return view('front.category', ['questions' =>$questions]);

  	}

      public function showQuestion(int $id){
  
	  	/*return "hello $id.$slug";*/
	  	$question= Question::find($id);

	  	return view('front.question', ['question' =>$question]);
  	}

	  public function showContact()

   {

       return view('front.contact');

   }

      public function showMention()

   {

       return view('front.mention');

   }

   
}
