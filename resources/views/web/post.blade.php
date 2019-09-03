@extends('layouts.app')

@section('content')
<div class="main main-raised">
        <div class="container">
          <div class="section section-text">
                <div class="col-md-8 ml-auto mr-auto text-center">
                        <h1 class="title">{{ $post->name }}</h1>
                        <br>
                      </div>
            <div class="row">
              <div class="col-md-8 ml-auto mr-auto">
                <h3 class="title">Resumen</h3>
                <p>{{ $post->excerpt }}</p>
               
              </div>
              <div class="col-md-8 ml-auto mr-auto">
                <h3 class="title">Post:</h3>
                <p>{!! $post->body !!}</p>
              </div>
            </div>
          </div>
          <div class="section col-md-8 ml-auto mr-auto">
                <h3 class="title">Imagenes</h3>
                <div class="row">
                  <div class="col-md-4">
                    @if($post->file)
                    <img class="img-raised rounded img-fluid" alt="Raised Image" src="{{ $post->file }}">
                    @endif
                </div>
                </div>
              </div>
          <div class="section section-blog-info">
              
            <div class="row">
              <div class="col-md-8 ml-auto mr-auto">
                <div class="row">
                  <div class="col-md-6">
                    <div class="blog-tags">
                      Etiquetas:
                      @foreach($post->tags as $tag)
                      <span class="badge badge-primary badge-pill">{{ $tag->name }}</span>
                      @endforeach
                    </div>
                  </div>
                </div>
                <hr>
              </div>
            </div>
          </div>
        </div>
      </div>
      
@endsection