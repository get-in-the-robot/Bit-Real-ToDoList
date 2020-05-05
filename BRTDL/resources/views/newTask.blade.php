@extends('layouts.app')

@section('content')

<mdb-card>
    <mdb-card-body>
        <form method="POST" action="/NewTask">
            @csrf
        <p class="h4 text-center py-4">Nový úkol</p>
        <div class="grey-text">
          <mdb-input label="Název" name="name" group type="text" validate error="wrong" success="right"/>
            <input type="hidden" value="{{ $project->id }}" name="project">
        </div>
        <div class="text-center py-4 mt-3">
          <mdb-btn color="cyan" type="submit">Register</mdb-btn>
        </div>
      </form>
    </mdb-card-body>
  </mdb-card>

@endsection
