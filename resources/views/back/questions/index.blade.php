@extends('layouts.admin')

@section('title', 'Page Title')

@section('content')

          
           @if($flash = session('flashMessage'))
        <div class="container flash">
        <div class="col s12">{{$flash}}</div>
        </div>
        @endif
        
<div class="row">
<a href="{{route('question.create')}}"class="waves-effect waves-light btn">Ajouter</a>
        
</div>
  <div class="row">
	<div class="offset-s4 col s6">
    
		{{ $questions->links() }}
</div>
  
    @forelse($questions as $question)         
    <div class="row">   
      <form action="{{route('question.destroy', $question->id)}}" method="post">
        <!-- insertion du token -->
          {{csrf_field()}}
         <!-- Utilisation de la méthode DELETE -->
          {{ method_field('DELETE') }}
           <table class="highlight">
            <thead>
              <tr>
                <th data-field="title">Titre</th>
                <th data-field="status">Status</th>
                <th data-field="categories">Catégorie</th>
                <th data-field="published_at">Date</th>
                <th data-field="name">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$question->title}}</td>
                <td>{{ ($question->status!= null)? $question->status : ''}}</td>
                <td>{{$question->category? $question->category->name : '' }}</td>
                <td>{{ ($question->published_at!= null)? $question->published_at : ''}}</td>
                <td><a href="{{route('question.edit', $question->id)}}" class="waves-effect waves-light btn">Editer</a></td>  
                <td><button name="action" class="waves-effect waves-light btn">Supprimer</button></td>  
              </tr>
              @empty
                <p>Aucune question trouvée</p>
              @endforelse
            </tbody>                          
          </table>
      </form>
      </div>         
      
      <div class="row">
	<div class="offset-s4 col s6">
		{{ $questions->links() }}
</div>
    </div>



@endsection
    




