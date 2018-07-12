@extends('layouts.master')
@section('page-content')
    <Graph :labels="['January','Febuary','March' ,'Apirl']"
           :values="[20,30,4,25]">
    </Graph>
@endsection