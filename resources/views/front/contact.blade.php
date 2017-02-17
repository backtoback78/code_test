@extends('layouts.master')

@section('title', 'Page Title')

@section('content')

<div class="container">
  <div class="row">
    <h3>Contact</h3>
  <div>
  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" required>
          <label for="first_name">Nom*</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" required>
          <label for="last_name">Prénom*</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" required>
          <label for="email">Email*</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" required></textarea>
          <label for="textarea1">Textarea</label>
        </div>
      </div>
      <div class="row">
        <p>* Champs obligatoires</p>
      </div>
      <div class="row">
        <button class="btn waves-effect waves-light" type="submit" name="action">Envoyer
        <i class="material-icons right">send</i>
        </button>
      </div>
    </form>
  </div>
</div>
        
@endsection