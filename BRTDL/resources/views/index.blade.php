@extends('layouts.app')

@section('content')

  @foreach ($projects->chunk(4) as $projects4)

  <div class="columns">

    @foreach ($projects4 as $project)
    
    <div class="card text-left col-4">
    <img class="card-img-top" src="{{ $project->image }}" alt="">
      <div class="card-body">
        <h4 class="card-title">SSTitle</h4>
        <p class="card-text">SSBody</p>
      </div>
    </div>


  @endforeach

</div>

  @endforeach

  @endsection