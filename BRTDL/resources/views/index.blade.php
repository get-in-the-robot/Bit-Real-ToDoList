@extends('layouts.app')

@section('content')


                

                <mdb-row class="m-3">
                  @foreach ($user->projects as $project)
                  <mdb-col col="sm-3"><mdb-card>
                    <mdb-card-image src="{{ $project->image }}" alt="Card image cap"></mdb-card-image>
                    <mdb-card-body>
                      <mdb-card-title>{{ $project->name }}</mdb-card-title>
                      <mdb-card-text>{{ $project->descs }}</mdb-card-text>
                      <mdb-btn color="primary" tag="a" href="/project/{{ $project->id }}">Zobrazit projekt</mdb-btn>
                    </mdb-card-body>
                  </mdb-card></mdb-col>

                @endforeach

                  
                </mdb-row>
            

                @endsection