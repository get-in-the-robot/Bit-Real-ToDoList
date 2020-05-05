@extends('layouts.app')

@section('content')


<mdb-card class="mx-auto col-4" style="width: auto">
    <mdb-card-image src="{{ $project->image }}" alt="Card image cap" class="p-2"></mdb-card-image>
    <mdb-card-body>
        <mdb-card-title style="text-align: center">{{ $project->name }}</mdb-card-title>
        <mdb-card-text>{{ $project->description }}</mdb-card-text>
        <mdb-list-group>
            @foreach ($project->tasks as $task)
            <form action="/task/{{ $task->id }}" method="post">
                @csrf
                @method('PATCH') 
                <mdb-list-group-item class="w-100 mx-auto shadow"  tag="button" type="submit" ><span style='{{ $task->completed == false ? "" : "text-decoration: line-through;" }}'>{{ $task->name }}</span></form>
                    </mdb-list-group-item>
            
            @endforeach
          </mdb-list-group>
          <div class="text-center">
              <mdb-btn color="primary" tag="a" href="/project/{{ $project->id }}/NewTask" class="w-50 mt-4">Přidat úkol</mdb-btn>
          </div>
          <div class="text-center">
            <mdb-btn color="warning" tag="a" href="/project/{{ $project->id }}/edit" class="w-50 mt-4">Upravit projekt</mdb-btn>
        </div>
        <div class="text-center">
            <form action="/project/{{ $project->id }}" method="post">
                @csrf
                @method('DELETE')
            <mdb-btn color="danger" type="submit" class="w-50 mt-4">Smazat projekt</mdb-btn>
            </form>
        </div>
          
    </mdb-card-body>
</mdb-card>


@endsection