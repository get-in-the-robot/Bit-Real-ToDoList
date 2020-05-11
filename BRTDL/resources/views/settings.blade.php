@extends('layouts.app')

@section('content')


<div class="card">
  <div class="card-content">
    <p class="title" style="text-align: center">
      Upravit profil
    </p>
    <form method="POST" action="/user/{{ Auth::user()->id }}">
      @csrf
      @method('PATCH')
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Avatar: </label>
        </div>
        <div class="field-body">
          <div class="field">
            <p class="control">
              <input class="input" value="{{ Auth::user()->avatar }}" name="avatar" type="text"
                placeholder="Normal input">
            </p>
          </div>
        </div>
      </div>
        <div class="text-center py-4 mt-3">
          <button class="button is-success" type="submit">Uložit změny</button>
        </div>
    </form>
  </div>

</div>


@endsection