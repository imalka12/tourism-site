@extends('layouts.web-secondary')

@section('page-content')
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4 post-title">{{$post->title}}</h1>

        <!-- Date/Time -->
        <p>Posted on {{$post->created_at->format('F d, Y')}} at {{$post->created_at->format('h:i A')}} in <a href="{{route('site.blog-category-posts', $post->category->slug)}}">{{$post->category->name}}</a>  by <a href="#">{{$post->author->name}}</a></p>

        <div class="text-center">
          <img class="img-fluid rounded" src="{{imageUrl($post->image, ['w' => 900, 'h' => 300, 'fm' => 'pjpg'])}}" alt="{{$post->title}}">
        </div>

        <!-- Post Content -->
        <div class="pt-5">
          {!! $post->body !!}
        </div>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
        @include('layouts.partials.blog-sidebar-search')
        @include('layouts.partials.blog-categories')
        @include('layouts.partials.blog-sidebar-widgets')
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection

@push('custom-css')
  <style>
    .post_title {
      font-family: 'Titillium Web', sans-serif;
    }
  </style>
@endpush
