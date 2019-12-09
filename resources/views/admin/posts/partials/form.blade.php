{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="ui form">
	<div class="field">
	{{ Form::label('category_id', 'Categorías', ['class' => 'field' ]) }}
	{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
	</div>
</div> 
<br>
<div class="ui form">
	<div class='field'>
    {{ Form::label('name', 'Titulo de la publicación', ['class' => 'bmd-label-floating']) }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
	</div>
</div>
<br>
<div class="ui form">
	<div class='field'>
    {{ Form::label('slug', 'URL amigable') }}
	{{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
	</div>
</div>
<br>
<div class="ui form">
	<div class='field'>
    {{ Form::label('image', 'Imagen') }}
	{{ Form::file('image') }}
	</div>
</div>
<br>
<div class="ui form">
	<div class='field'>
	{{ Form::label('slug', 'Estado') }}
	<label>
		{{ Form::radio('status', 'PUBLISHED') }} Publicado
	</label>
	<label>
		{{ Form::radio('status', 'DRAFT') }} Borrador
	</label>
	</div>
</div>
<br>
<div class="ui form">
	<div class='field'>
	{{ Form::label('tags', 'Etiquetas') }}
	</div>
	<div class='field'>
	@foreach($tags as $tag)
		<label>
			{{ Form::checkbox('tags[]', $tag->id) }} {{ $tag->name }}
		</label>
	@endforeach
	</div>
</div>
<br>
<div class="ui form">
	<div class="field">
    {{ Form::label('excerpt', 'Resumen') }}
	{{ Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '2']) }}
	</div>
</div>
<br>
<div class="ui form">
	<div class="field">
    {{ Form::label('body', 'Descripción') }}
	{{ Form::textarea('body', null) }}
	</div>
</div>
<br>
<div class="submit text-center">
                <input type="submit" class="ui button blue" value="Publicar">
              </div>

@section('scripts')
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script>
	$(document).ready(function(){
	    $("#name, #slug").stringToSlug({
	        callback: function(text){
	            $('#slug').val(text);
	        }
	    });

	    CKEDITOR.config.height = 400;
		CKEDITOR.config.width  = 'auto';

		CKEDITOR.replace('body');
	});
</script>
@endsection

