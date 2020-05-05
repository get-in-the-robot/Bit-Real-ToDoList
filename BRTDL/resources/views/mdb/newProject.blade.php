@extends('layouts.app')

@section('content')

<mdb-card>
    <mdb-card-body>
        <form method="POST" action="/NewProject">
            @csrf
        <p class="h4 text-center py-4">Nový projekt</p>
        <div class="grey-text">
          <mdb-input label="Název" name="name" group type="text" validate error="wrong" success="right"/>
          <mdb-input label="Popisek" name="description" group type="text" validate error="wrong" success="right"/>
          <mdb-input label="Obrázek" name="image" group type="text" validate error="wrong" success="right"/>
        </div>
        <div class="text-center py-4 mt-3">
          <mdb-btn color="cyan" type="submit">Register</mdb-btn>
        </div>
      </form>
    </mdb-card-body>
  </mdb-card>

@endsection
