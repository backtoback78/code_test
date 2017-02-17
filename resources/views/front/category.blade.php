@extends('layouts.master')

@section('title', 'Page Title')

@section('content')

<div class="row">
	<div class="offset-s4 col s6">
		{{ $questions->links() }}
</div>
@foreach($questions as $question)
	<div class="row">
		<div class="col s10">
			<ul><li><a href="{{url('question', $question->id)}}">Title : {{$question->title}}</a></li></ul> 
			<ul><li>{{$question->content}}</li></ul> 
		</div>
		<div class="col s2">
			<ul><li>{{$question->category? $question->category->name : '' }}</li></ul>
		</div>
	</div>
@endforeach
<div class="row">
	<div class="offset-s4 col s6">
		{{ $questions->links() }}
</div>
@endsection