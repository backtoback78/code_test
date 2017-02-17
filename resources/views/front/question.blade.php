@extends('layouts.master')

@section('title', 'Page Title')

@section('content')



	<div class="row">
		<div class="col s10">
			<ul><li><a href="{{url('question', $question->id)}}">Title : {{$question->title}}</a></li></ul> 
			<ul><li>{{$question->abstract}}</li></ul>
			<ul><li>{{$question->content}}</li></ul> 			 
			<div class="row">
    			<form class="col s12">
     			 	<div class="row">
        				<div class="input-field col s12">
          					<textarea id="textarea1" class="materialize-textarea"></textarea>
          					<label for="textarea1">Réponse</label>
        				</div>
      				</div>
      				<button class="btn waves-effect waves-light" type="submit" name="action">Soumettre
    					<i class="material-icons right">send</i>
  					</button>
    			</form>
  			</div>
		</div>
		
		
	</div>


@endsection