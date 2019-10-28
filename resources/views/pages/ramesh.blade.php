@extends('layouts.app')

@section('title' , 'Ramesh 😍')

@section('content')
    <div class="container">
        <div class="row main-content">
            <div class="two-thirds column">
                <img class="u-max-full-width"src="{{URL::asset('/images/ramesh.jpg')}}" alt="RDF">
            </div>
            <div class="one-third column">
                <p>
                    Her name is Ramesh,
                    <hr>
                    She is nice
                </p>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <style>
        
    </style>
@endsection