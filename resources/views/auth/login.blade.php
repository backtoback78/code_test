@extends('layouts.auth_master')

@section('title', 'Page Title')

@section('content')


<div class="container">
  <div class="row">
    <form class="col s12" method="post" action="{{url('login')}}">
      {{csrf_field()}}
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="email" class="validate">
          <label for="email" >Identifiant</label>  
          @if($errors->has('email')) <span>{{$errors->first('email')}}</span>@endif
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" name="password" class="validate">
          <label for="password">Mot de Passe</label>
          @if($errors->has('password')) <span>{{$errors->first('password')}}</span>@endif
        </div>
      </div>

      <div class="row">
      <input type="checkbox" id="indeterminate-checkbox" />
      <label for="indeterminate-checkbox">Se souvenir de moi</label>
    </div>

	<div class="row">
    <button class="btn waves-effect waves-light" type="submit" name="action">Connexion
    <i class="material-icons right">send</i>
  </button>
     </div>
    </form>
    <div class="row">
    <ul><li><a>Mot de passe oublié ?</a></li></ul>
    <ul><li><a href="{{route('home')}}"><- retour sur le site</a></li></ul>
     </div>
  </div>
 </div>       
@endsection