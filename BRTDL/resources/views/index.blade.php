@extends('layouts.app')

@section('content')

  @foreach ($user->projects->chunk(4) as $projects4)

  <div class="columns">

    @foreach ($projects4 as $project)
  <div class="column is-one-quarter">
    <div class="card">
      <div class="card-image">
        <figure class="image is-4by3">
          <img style="width: 360px; height: 250px; background-image: url('{{ $project->image }}');
          background-size: cover;
          background-repeat: no-repeat;">
        </figure>
      </div>
      <div class="card-content">
        <div class="media m-0">
          <div class="media-left">
            <figure class="image is-48x48">
              <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
              
            </figure>
          </div>
          <div class="media-content">
            <p class="title is-4">{{ $project->name }}</p>
            <p class="subtitle is-6">{{ $project->created_at }}</p>
          </div>
        </div>

        <div class="content">
          
        </div>
      </div>
      <a class="button is-outlined" href="/project/{{ $project->id }}">Zobrazit projekt</a>
    </div>
  </div>


  @endforeach

</div>

  @endforeach

  @endsection