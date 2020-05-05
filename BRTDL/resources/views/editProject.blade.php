@extends('layouts.app')

@section('content')

<div class="card">
  <div class="card-content">
    <p class="title" style="text-align: center">
      Upravit projekt
    </p>
    <form method="POST" action="/project/{{ $project->id }}/edit">
      @csrf
      @method('PATCH')
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

    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">Popisek</label>
      </div>
      <div class="field-body">
        <div class="field">
          <p class="control">
            <input class="input" value="{{ $project->description }}" name="description" type="text" placeholder="Normal input">
          </p>
        </div>
      </div>
    </div>

    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">Obrázek</label>
      </div>
      <div class="field-body">
        <div class="field">
          <p class="control">
            <input class="input" value="{{ $project->image }}" name="image" type="text" placeholder="Normal input">
          </p>
        </div>
      </div>
    </div>

    
  <div class="text-center py-4 mt-3">
    <button class="button is-success" type="submit">Uložit změny</button>
  </div>
</form>

</div>

@endsection
