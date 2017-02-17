@extends('layouts.admin')

@section('title', 'Page Title')

@section('content')

  <div class="row">

  <h1>Nouvelle Question</h1>

      @if (count($errors) > 0)
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif


    <form action="{{route('question.store')}}" method="POST" class="col s12" enctype="multipart/form-data">
    {{csrf_field()}}
      <div class="row">
        <div class="input-field col s6">
          <input type="text" class="validate" name="title" value="{{old('title')}}">
          <label for="first_title">Titre</label>
          @if($errors->has('first_name')) <span>{{$errors->first('first_name')}}</span>@endif       
        </div>

      <div class="row">        
            <div class="input-field col s12">
              <textarea  class="materialize-textarea" name="abstract" >{{old('abstract')}}</textarea>
              <label >Résumé</label>
            </div>     
      </div>

     


      <div class="row">        
            <div class="input-field col s12">
              <textarea  class="materialize-textarea" name="content" >{{old('content')}}</textarea>
              <label >Enoncé</label>
            </div>     
      </div>

      

          
      <!-- Switch -->
      <div class="row">
        <div class="col s12">
          <div class="switch">
            <label>
              Unpublished
              <input type="checkbox" name="status" value="on" {{ ( !empty(old('status')) && old('status') == 'published' ) ? 'checked' : '' }}/>
              
              <span class="lever"></span>
              Published
            </label>
          </div>
        </div>
      </div>


      <div class="row">    
        <div class="input-field col s12">
        <select name="category_id"> 
            <option value="0">Non catégorisé</option>
            @foreach($categories as $id=>$name)

            <option {{ (old('category_id') == $id) ? 'selected' : '' }} value="{{$id}}">{{$name}}</option>           
            @endforeach
          </select>
          <label for="category_id">Selection des catégories</label>
        </div>
      </div>

      <div class="row">
        <div class="col s12">
          
          <input id="published_at" type="checkbox" name="published_at" value="on" {{ ( !empty(old('published_at')) && old('published_at') == 'on' ) ? 'checked' : '' }}>
          <label for="published_at">Date</label>
        </div>
    </div>



      {{--Submit--}}
      <div class="row">
        <div class="col s12">
        <input type="submit">
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right"></i>
            </button>
        </div>
      </div>


    


  </form>
  </div>
  
@endsection
