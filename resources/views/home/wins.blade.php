@extends('layouts.master')
@section('page-content')
    <div>
        <h1>Rocket League</h1>
        <wins-graph :player="{{$anuj}}"
                    :opponent="{{$jeff}}"></wins-graph>
    </div>

@endsection