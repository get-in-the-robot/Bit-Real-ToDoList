<template>
    <div class="column is-one-quarter">
  <div class="card" style="background-color: {{ $project->color }}">
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
            <figure class="image is-48x48 ">
              <img  class="projectsimage" style="background-image: url('{{ $project->simage }}'); height: 100%;">
              
            </figure>
          </div>
          <div class="media-content">
            <p style=" color: {{ $project->font_color }}" class="title is-4">{{ $project->name }}</p>
            <p style=" color: {{ $project->font_color }}" class="subtitle is-6">{{ $project->created_at }}</p>
          </div>
        </div>

        <div class="content">
          
        </div>
      </div>
      <div class="buttons">
        <a class="button is-outlined col-6 m-0" href="/project/{{ $project->id }}"><i class="fas fa-eye mr-2"></i>Zobrazit projekt</a>
        <form action="/project/{{ $project->id }}/fav" method="post" class="col-6 p-0">
        @csrf
        @method('PATCH')

        <button type="submit" class="button {{ $project->favorite == false ? 'is-outlined' : 'is-warning' }}  m-0 w-100">
        <i class="fa{{ $project->favorite == false ? 'r' : 's' }} fa-star mr-2"></i>Oblíbené</button>
      </form>
      </div>
      
    </div>
  </div>
</template>