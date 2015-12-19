@if(isset($model))
{!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.services.update', $model->id]]) !!}
@else
{!! Form::open(['files' => true, 'route' => 'admin.services.store']) !!}
@endif
	<div class="form-group">
		{!! Form::label('title', 'Title:') !!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}
		{!! $errors->first('title', '<div class="text-danger">:message</div>') !!}
	</div>
	<div class="form-group">
		{!! Form::label('', 'Image:') !!}
		{!! Form::file('image', ['class' => 'input-file', 'id' => 'image']) !!}
		<label for="image" class="btn btn-primary btn-upload btn-maxwidth"><i class="fa fa-upload"></i> <span>Choose a file</span></label>
		{!! $errors->first('image', '<div class="text-danger">:message</div>') !!}
	</div>
	<div class="form-group">
		{!! Form::label('body', 'Body:') !!}
		{!! Form::textarea('body', null, ['class' => 'form-control', 'id' => 'ckeditor']) !!}
		{!! $errors->first('body', '<div class="text-danger">:message</div>') !!}
	</div>	
	<div class="form-group">
		{!! Form::label('sort_order', 'Sort order:') !!}
		{!! Form::text('sort_order', null, ['class' => 'form-control']) !!}
		{!! $errors->first('sort_order', '<div class="text-danger">:message</div>') !!}
	</div>	
	@if(isset($model))
	<div class="form-group">
		@if($model->image)
		<div class="img-thumbnail">
			<img class="img-responsive" style="max-width: 290px !important;" src="{!! asset('images/services/' . $model->image) !!}">
		</div>
		@endif
	</div>
	@endif
	<div class="form-group">
		{!! Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}

@section('script')
	
	{!! script('vendor/ckeditor/ckeditor.js') !!}
	{!! script('vendor/ckfinder/ckfinder.js') !!}
	
	<script type="text/javascript">
		var prefix = '{!! asset(option("ckfinder.prefix")) !!}';
		CKEDITOR.editorConfig = function( config ) {
		   config.filebrowserBrowseUrl = prefix + '/vendor/ckfinder/ckfinder.html';
		   config.filebrowserImageBrowseUrl = prefix + '/vendor/ckfinder/ckfinder.html?type=Images';
		   config.filebrowserFlashBrowseUrl = prefix + '/vendor/ckfinder/ckfinder.html?type=Flash';
		   config.filebrowserUploadUrl = prefix + '/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
		   config.filebrowserImageUploadUrl = prefix + '/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
		   config.filebrowserFlashUploadUrl = prefix + '/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
		};

		var editor = CKEDITOR.replace( 'ckeditor' );
		CKFinder.setupCKEditor( editor, prefix + '/vendor/ckfinder/') ;

		function enableFileButtons() {
			var inputs = document.querySelectorAll( '.input-file' );
			Array.prototype.forEach.call( inputs, function( input )
			{
				var label	 = input.nextElementSibling,
					labelVal = label.innerHTML;

				input.addEventListener('change', function( e )
				{
					var fileName = '';
					
					fileName = e.target.value.split( '\\' ).pop();

					if( fileName )
						label.querySelector( 'span' ).innerHTML = fileName;
					else
						label.innerHTML = labelVal;
				});
			});		
		}

		enableFileButtons();		
	</script>
@stop
