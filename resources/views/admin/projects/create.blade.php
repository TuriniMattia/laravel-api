@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <h1>Inserisci un nuovo progetto</h1>

    </div>
    <div class="container">
        <form action="{{route ('admin.projects.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="project_name" class="form-label">Nome del nuovo progetto</label>
                <input type="text" class="form-control" id="project_name" name="project_name" placeholder="Nome del nuovo progetto">
                
                @error('project_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                
            </div>
            <div class="mb-3">
                <label for="type_id" class="form-label">Linguaggio usato</label>
                <select class="form-control" name="type_id" id="type_id">
                    <option value="">--Seleziona Linguaggio--</option>
                    @foreach($types as $type)
                    <option @selected($type->id == old('type_id')) value="{{ $type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <h2>Seleziona tecnologia di sviluppo</h2>
                @foreach ($technologies as $technology)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{technology->id}}" id="technology-{{technology->id}}">
                    <label class="form-check-label" for="technology-{{technology->id}}">
                      {{$technology->name}}
                    </label>
                  </div>
                @endforeach
            </div>
            <div class="mb-3">
                <label for="project_description" class="form-label"> Descrizione del progetto</label></label>
                <textarea class="form-control" name="project_description" id="project_description" rows="10" placeholder="Descrizione del progetto"></textarea>
                @error('project_description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
              </div>
              <div class="mb-3">
                <label for="github_link" class="form-label">Link al GitHub del progetto</label>
                {{-- <input type="url" class="form-control" id="github_link" name="github_link" placeholder="http::/...."> --}}
                <input type="text" class="form-control" id="github_link" name="github_link" placeholder="http::/....">
                @error('github_link')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>


            <button class="btn btn-success">Crea</button>

        </form>


    </div>

</section>
@endsection