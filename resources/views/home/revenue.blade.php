@extends('layouts.master')
@section('page-content')
    <div>
        <h1>Rocket League</h1>
        <revenue-graph
                :keys={{$performance->keys()}}
                        :values={{$performance->values()}}
                        :key={{$performance2->keys()}}
                        :value={{$performance2->values()}}>
        </revenue-graph>
    </div>

@endsection