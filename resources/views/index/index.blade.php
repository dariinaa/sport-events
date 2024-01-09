@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="about-us-content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="single-about-us">
                        <div class="about-us-txt">
                            <h2>{{$title}}</h2>
                            {!! $text !!}
                        </div><!--/.about-us-txt-->
                    </div><!--/.single-about-us-->
                </div><!--/.col-->
                <div class="col-sm-6">
                    <div class="single-about-us">
                        <div class="about-us-img">
                            <img src="{{$imgURL}}" alt="about images">
                        </div><!--/.about-us-img-->
                    </div><!--/.single-about-us-->
                </div><!--/.col-->
            </div><!--/.row-->
        </div><!--/.about-us-content-->
    </div><!--/.container-->
@endsection