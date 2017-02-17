@extends('layouts.admin')

@section('title', 'Page Title')

@section('content')
@if (count($errors) > 0)
    <div class="alert alert-danger">
      <p>Une erreur est survenue dans le formulaire</p>
    </div>
@endif

    {{--Title--}}
  <form action="{{route('question.update', $question->id)}}" method="post" class="col s12">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <!--<input type="hidden" name="_method" value="PUT">-->
    <div class="row">
      <div class="input-field col s3">
    <input type="text" name="title" value="{{$question->title}}">
    <label >Titre</label>
     <!--@if($errors->has('title')) <span>{{$errors->first('title')}}</span>@endif-->
      </div>
    </div>

       {{--abstract--}}
    <div class="row">        
            <div class="input-field col s12">
              <textarea  class="materialize-textarea" name="abstract" value="" >{{$question->abstract}}</textarea>
              <label>Abstract</label>
            </div>     
    </div>
    
    {{--Question--}}
    <div class="row">        
            <div class="input-field col s12">
              <textarea  class="materialize-textarea" name="content" value="" >{{$question->content}}</textarea>
              <label >Question (Content)</label>
            </div>     
    </div>

      {{--Categorie--}}
    <div class="row">
      <div class="input-field col s12">
            <select class="prisc" name="category_id"> 
                <option value="0" {{$question->category? '' : 'selected'}}>Non catégorisé</option>
                @foreach($categories as $id=>$name)
                <option {{($question->category? $question->category->id == $id : false)? 'selected':''}} value="{{$id}}" >{{$name}}</option>           
                @endforeach
              </select>
              <label>Selection des catégories</label>
      </div>
    </div>
    
      {{--Publication--}}
    <div class="row">
        <div class="col s12">
          <div class="switch">
            <label>
              Non publiée
              <input type="checkbox" name="status" value="on" {{ ($question->status!= null)?  'checked' : ''}}>
              <span class="lever"></span>
              Publiée
            </label>
          </div>
        </div>
      </div>
       {{--Date--}}
    <div class="row">
        <div class="col s12">
          
          <input id="published_at" type="checkbox" name="published_at" value="on" {{ ($question->published_at != null)?  'checked' : ''}} >
          <label for="published_at">Date</label>
        </div>
    </div>
    
      {{--Submit--}}
      <div class="row">
        <div class="col s12">
            <button class="btn waves-effect waves-light" type="submit" name="action">Modifier
                <i class="material-icons right"></i>
            </button>
        </div>
      </div>

  </form>
@endsection

