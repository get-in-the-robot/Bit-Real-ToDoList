@extends('layouts.app')

@section('content')

<mdb-card>


  <div class="card">
    <div class="card-content">
      <p class="title" style="text-align: center">
        Nový projekt
      </p>
      <form method="POST" action="/NewProject">
        @csrf
    <div class="grey-text">
      <div class="field is-horizontal">
        <div class="field-label is-normal">
          <label class="label">Název</label>
        </div>
        <div class="field-body">
          <div class="field">
            <p class="control">
              <input class="input" name="name" type="text" placeholder="Normal input">
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
              <input class="input" name="description" type="text" placeholder="Normal input">
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
              <input class="input" name="image" type="text" placeholder="Normal input">
            </p>
          </div>
        </div>
      </div>
  
      
    <div class="text-center py-4 mt-3">
      <button class="button is-success" type="submit">Vytvořit projekt</button>
    </div>
  </form>
  
  </div>
  


@endsection
