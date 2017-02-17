<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;
use App\Category;
use App\Http\Requests\QuestionRequest;

class QuestionController extends Controller
{

    public function __construct()
    {
        // parent::_construct();

        view()->composer('back.partials.admin_nav', function($view){
            $view->with('user', auth()->user());
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::paginate($this->nbPaginate);

        return view('back.questions.index', ['questions' => $questions]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories = Category::pluck('name', 'id');
        return view('back.questions.create', compact('categories'));;
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionRequest $request)
    
    {

        $question = Question::create( $request->all() );

         $question->status = 'unpublished';

            if($request->status == 'on') {
                 $question->status = 'published';
            }

            if($request->published_at == 'on')
            {
                $date = \Carbon\Carbon::now();  

                $question->published_at = $date;
            }
           
            $question->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::find($id);
        $categories = Category::pluck('name', 'id');
        
        return view('back.questions.edit', compact('question','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuestionRequest $request, $id)
    {
        
            $question = Question::find($id);
            $question->update($request->all());
            $question->status = 'unpublished';
            if($request->status == 'on') {
                 $question->status = 'published';
            }

            if(empty($request->published_at)) $question->published_at = null;

            if( $request->published_at == 'on' )
            {
                $question->published_at = \Carbon\Carbon::now();
            }

            $question->save();
            session()->flash('flashmessage', 'mise à jour réussi');

            return redirect()->route('question.index');
  
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Récupération du robot - a optimiser pour ne récupérer que $robot->link et id;

        $question = Question::find($id);


        Question::destroy($id);

        //Flashmessage de confirmation

        session()->flash('flashMessage', 'Suppression effecutée');

        //Redirection sur l'index

        return redirect()->route('question.index');
    }
}
