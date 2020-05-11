@extends('layouts.app')

@section('content')


<div class="card"  style="background-color: #f7efef">
    <div class="columns mb-0">
        <div class="column is-half pb-0">
        <div class="card" style="background-color: {{ $project->color }};">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img style="width: 100%; height: 550px; background-image: url('{{ $project->image }}');
                        background-size: cover;
                        background-repeat: no-repeat; cursor: pointer"
                         data-toggle="modal" data-target="#exampleModal">
                    </figure>
                </div>
                <div class="card-content" >
                    <div class="media">
                        <div class="media-left">
                            <figure class="image is-48x48 ">
                              <img  class="projectsimage" style="background-image: url('{{ $project->simage }}'); height: 100%;">
                              
                            </figure>
                          </div>
                        <div class="media-content" >
                            <p style=" color: {{ $project->font_color }}" class="title is-4">{{ $project->name }}</p>
                            <p style=" color: {{ $project->font_color }}" class="subtitle is-6">{{ $project->updated_at }}</p>
                        </div>
                    </div>

                    <div class="content" style=" color: {{ $project->font_color }}">
                        {{ $project->description }}
                    </div>
                    <div class="buttons">
                        <a class="button is-info" href="/project/{{ $project->id }}/NewTask"><i class="fas fa-plus mr-2"></i>Přidat úkol</a>
                        <a class="button is-warning" href="/project/{{ $project->id }}/edit"><i class="fas fa-edit mr-2"></i>Upravit projekt</a>
                        <form action="/project/{{ $project->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button is-danger"><i class="fas fa-trash mr-2"></i>Smazat projekt</button>
                        </form>

                    </div>
                </div>


            </div>

        </div>
        <div class="column is-half">
            <ul class="block-list is-small is-outlined is-success pr-4 pt-2" style="height: 100%">
                @if($project->tasks != null)


                @foreach ($project->tasks as $task)
                <li>
                    <div class="columns">
                        <div class="column is-9 is-size-4"
                            style='{{ $task->completed == false ? "" : "text-decoration: line-through;" }}'>
                            {!! \Illuminate\Support\Str::limit($task->name, 34,'...') !!}
                        </div>

                        <div class="column is-3">
                            <div class="buttons">
                                <form action="/task/{{ $task->id }}" method="post">
                                    @csrf
                                    @method('PATCH')
                                    <button
                                        class="button {{ $task->completed == false ? "is-danger" : "is-success" }}  is-light  px-3 py-0 mr-4"
                                        type="submit"><i
                                            class="fas fa-{{ $task->completed == false ? "times" : "check" }}"></i></button>
                                </form>

                                <form action="/task/{{ $task->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="button is-danger px-4 py-0" type="submit"><i
                                            class="fas fa-trash"></i></button>

                                </form>
                            </div>

                        </div>


                    </div>
                </li>

                @endforeach
                
                @else 
                    <button>sss</button>
                
                @endif
            </ul>
        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <img src="{{ $project->image }}" alt="">
            </div>
          </div>
        </div>
      </div>



</div>







@endsection