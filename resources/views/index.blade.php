@extends('template')
@section('title') Blog @endsection
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Laravel Express</h1>
            </div>
        </div>
    </header>
@section('content')
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4">
                <a href="#">
                    <img class="img-responsive" src="http://fakeimg.pl/700x400/" alt=""/>
                </a>
                <h3>
                    <a href="#">{{$post}}</a>
                </h3>
            </div>
        @endforeach
    </div>
@endsection