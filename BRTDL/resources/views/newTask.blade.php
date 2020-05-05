@extends('layouts.app')

@section('content')


<div class="card">
  <div class="card-content">
    <p class="title" style="text-align: center">
      Nový úkol
    </p>
    <form method="POST" action="/NewTask">
      @csrf
  <div class="grey-text">
    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">Název</label>
      </div>
      <div class="field-body">
        <div class="field">
          <p class="control">
            <input class="input" name="name" type="text" placeholder="Normal input" value="{{ $project->name }}">
          </p>
        </div>
      </div>
    </div>
    <input type="hidden" value="{{ $project->id }}" name="project">
    
  <div class="text-center py-4 mt-3">
    <button class="button is-success" type="submit">Uložit změny</button>
  </div>
</form>

</div>


@endsection
