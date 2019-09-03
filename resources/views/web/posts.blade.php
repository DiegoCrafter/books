@extends('layouts.app')

@section('content')
<div class="main main-raised" style="padding-inline-start: 0ch">
    <div class="blogs-2" id="blogs-2">
        <div class="container">
          <div class="row">
            <div class="col-md-10 ml-auto mr-auto">
              <h3>Publicaciones</h3>
              <div class="row">
                @foreach($posts as $post)
                <div class="col-md-4">
                  <div class="card card-plain card-blog">
                    <div class="card-header card-header-image">
                      <a>
                        @if($post->file)
                          <img src="{{ $post->file }}" class="img img-raised">
                        @endif
                      </a>
                    </div>
                    <div class="card-body">
                      <h6 class="card-category text-info">{{ $post->created_at }}</h6>
                      <h4 class="card-title">
                        <a>{{ $post->name }}</a>
                      </h4>
                      <p class="card-description">
                          {{ $post->excerpt }}
                        <a href="{{ route('post', $post->slug) }}"> Leer más </a>
                      </p>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection