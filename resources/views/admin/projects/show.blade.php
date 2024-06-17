@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <h1>Descrizione del Progetto: {{$project->project_name}}</h1>
        <p>{!! $project->project_description!!}</p>
        <h4>Categoria</h4>
        <p>{{optional($project->type)->name}}</p>
        <h4>Tecnologie usate</h4>
        <ul class="d-flex gap-2 list-unstyled">
            @foreach ($project->technologies as $technology)
              <li> {{$technology->name}}</li>  
            @endforeach
        </ul>
    </div>
    <div class="container">

    </div>

</section>
@endsection