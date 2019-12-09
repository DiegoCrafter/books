@extends('layouts.app') @section('content')
<div class="ui vertical stripe segment" style="padding: 5%;">
  <div class="ui container">
    <div class="main ui container">
      <div class="ui active tab" data-tab="definition">
        <h2 class="ui dividing header">
          Publicaciones
        </h2>
        <div class="ui four cards">
          @foreach($posts as $post)
          <div class="card">
            <div class="blurring dimmable image">
              <div class="ui dimmer">
                <div class="content">
                  <div class="center">
                    <div class="ui inverted button">Add Friend</div>
                  </div>
                </div>
              </div>
              @if($post->file)
              <img src="{{ $post->file }}" />
              @endif
            </div>
            <div class="content">
              <a class="header">{{ $post->name }}</a>
              <div class="meta">
                <span class="date">Created in Sep 2014</span>
              </div>
            </div>
            <div class="extra content">
              <a href="{{ route('post', $post->slug) }}">
                <i class="users icon"></i>
                Ver detalles
              </a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
