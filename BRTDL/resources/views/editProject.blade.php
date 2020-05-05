@extends('layouts.app')

@section('content')

<mdb-card>
    <mdb-card-body>
        <form method="POST" action="/project/{{ $project->id }}/edit">
            @csrf
            @method('PATCH')
        <p class="h4 text-center py-4">Nový projekt</p>
        <div class="grey-text">
        <mdb-input label="Název" value="{{ $project->name }}" name="name" group type="text" validate error="wrong" success="right"/>
          <mdb-input label="Popisek" value="{{ $project->description }}" name="description" group type="text" validate error="wrong" success="right"/>
          <mdb-input label="Obrázek" value="{{ $project->image }}" name="image" group type="text" validate error="wrong" success="right"/>
        </div>
        <div class="text-center py-4 mt-3">
          <mdb-btn color="cyan" type="submit">Uložit změny</mdb-btn>
        </div>
      </form>
    </mdb-card-body>
  </mdb-card>

@endsection
