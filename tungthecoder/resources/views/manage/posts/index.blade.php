@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column has-text-centered">
        <h1 class="title">This is the posts.index page</h1>
      </div>

      <div class="column has-text-centered">
        <a href="{{route('posts.create')}}" class="button is-primary"><i class="fa fa-user-plus m-r-10"></i> Create New Post</a>
      </div>

    </div>
    <hr class="m-t-0">



  </div> <!-- end of .flex-container -->

@endsection