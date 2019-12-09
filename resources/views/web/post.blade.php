@extends('layouts.app') @section('content')
<div class="ui vertical stripe segment" style="padding: 6%;">
    <div class="ui container">
      <div class="ui">
          <h2 class="ui dividing header">
              {{ $post->name }}
          </h2>
          <div class="panel-heading">
              Categoría: 
              <a href="{{ route('category', $post->category->slug) }}">
                  {{ $post->category->name }}
              </a>
          </div>
          <br>
          <div class="introduction">
              <p>{{ $post->excerpt }}</p>
          </div>
            <p>{!! $post->body !!}</p>
            @if($post->file)
            <div class="image">
                <img src="{{ $post->file }}">
            </div>
            @endif
        </div>
        <br>
        <div class="item">
            Etiquetas:
            @foreach($post->tags as $tag)
            <a href="{{ route('tag', $tag->slug) }}">
                {{ $tag->name }}
            </a>
            @endforeach
        </div>
        <div class="ui small comments">
                <h3 class="ui dividing header">Comments</h3>
                <form class="ui reply form">
                  <div class="field">
                    <textarea></textarea>
                  </div>
                  <div class="ui blue labeled submit icon button">
                    <i class="icon edit"></i> Agregar comentario
                  </div>
                </form>
              </div>
      </div>
    </div>
@endsection
