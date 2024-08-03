@extends('layouts.web-secondary')

@section('page-content')
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8" id="blog_posts_wrapper">

        <h4 class="mb-5">You searched for "<strong>{{\substr($search_text, 0, 25)}}</strong>"</h4>

        <!-- Blog Post -->
        @foreach ($blogPosts as $post)
          <div class="card mb-4 blog_post">
            <img class="card-img-top" src="{{imageUrl($post->image, ['w' => 750, 'h' => 300, 'fm' => 'pjpg'])}}" alt="{{$post->seo_title}}">
            <div class="card-body">
              <h2 class="card-title post_title">{{$post->title}}</h2>
              <p class="card-text">{{$post->excerpt}}</p>
              <a href="{{route('site.blog-post', $post->slug)}}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on {{$post->created_at->format('F dS, Y')}} by <a href="#">{{$post->author->name}}</a> in <a href="{{route('site.blog-category-posts', $post->category->slug)}}">{{$post->category->name}}</a>
            </div>
          </div>
        @endforeach

        <!-- Pagination -->
        <div class="pagination justify-content-center mb-4">
          {{$blogPosts->links()}}
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
  #blog_posts_wrapper {
    margin-top: 25px;
  }

  .card.blog_post {
    border: none;
  }

  .blog_post .post_title {
    font-family: 'Titillium Web', sans-serif;
  }
</style>
@endpush
