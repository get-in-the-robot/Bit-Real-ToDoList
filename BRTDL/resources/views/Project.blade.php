@extends('layouts.app')

@section('content')


<div class="card">
    <div class="columns">
        <div class="column is-half">
            <div class="card">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img style="width: 100%; height: 550px; background-image: url('{{ $project->image }}');
                        background-size: cover;
                        background-repeat: no-repeat;">
                    </figure>
                </div>
                <div class="card-content">
                    <div class="media">
                        <div class="media-content">
                            <p class="title is-4">{{ $project->name }}</p>
                            <p class="subtitle is-6">{{ $project->updated_at }}</p>
                        </div>
                    </div>

                    <div class="content">
                        {{ substr($project->description, 10) }}
                    </div>
                    <div class="buttons">
                        <a class="button is-info" href="/project/{{ $project->id }}/NewTask">Přidat úkol</a>
                        <a class="button is-warning" href="/project/{{ $project->id }}/edit">Upravit projekt</a>
                        <form action="/project/{{ $project->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button is-danger">Smazat projekt</button>
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






</div>







@endsection