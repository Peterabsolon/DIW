@if(isOnPages())
	@if(isset($model))
	{!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.pages.update', $model->id]]) !!}
	@else
	{!! Form::open(['files' => true, 'route' => 'admin.pages.store']) !!}
	@endif
@else
	@if(isset($model))
	{!! Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.articles.update', $model->id]]) !!}
	@else
	{!! Form::open(['files' => true, 'route' => 'admin.articles.store']) !!}
	@endif
@endif
	<div class="form-group">
		{!! Form::label('title', 'Title:') !!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}
		{!! $errors->first('title', '<div class="text-danger">:message</div>') !!}
	</div>
	<div class="form-group">
		{!! Form::label('slug', 'Slug:') !!}
		{!! Form::text('slug', null, ['class' => 'form-control']) !!}
		{!! $errors->first('slug', '<div class="text-danger">:message</div>') !!}
	</div>
	@if( isOnPages())
	<div class="form-group">
		{!! Form::label('services', 'Services (separate by comma):') !!}
		{!! Form::text('services', null, ['class' => 'form-control']) !!}
		{!! $errors->first('services', '<div class="text-danger">:message</div>') !!}		
	</div>
	@endif
	@if(! isOnPages())
	<div class="form-group">
		{!! Form::label('category_id', 'Category:') !!}
		{!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
		{!! $errors->first('category_id', '<div class="text-danger">:message</div>') !!}
	</div>
	@else
	{!! Form::hidden('type', 'page') !!}
	@endif
	<div class="form-group">
		{!! Form::label('body', 'Text:') !!}
		{!! Form::textarea('body', null, ['class' => 'form-control', 'id' => 'ckeditor']) !!}
		{!! $errors->first('body', '<div class="text-danger">:message</div>') !!}
	</div>
	@if( isOnPages())
	<div class="form-group">
		{!! Form::label('sort_order', 'Sort order:') !!}
		{!! Form::text('sort_order', null, ['class' => 'form-control']) !!}
		{!! $errors->first('sort_order', '<div class="text-danger">:message</div>') !!}
	</div>		
	<div class="form-group">
		{!! Form::label('color', 'Background color (HEX):') !!}
		{!! Form::text('color', null, ['class' => 'form-control']) !!}
		{!! $errors->first('color', '<div class="text-danger">:message</div>') !!}
	</div>
	<div class="form-group">
		{!! Form::label('', 'Background image:') !!}
		{!! Form::file('image', ['class' => 'input-file', 'id' => 'image']) !!}
		<label for="image" class="btn btn-primary btn-upload btn-maxwidth"><i class="fa fa-upload"></i> <span>Choose a file</span></label>
		{!! $errors->first('image', '<div class="text-danger">:message</div>') !!}
	</div>
	{!! Form::hidden('position', '0') !!}
	@if(isset($model))
	<div class="form-group">
		@if($model->image)
			<div class="img-thumbnail">
				<img class="img-responsive" style="max-width: 290px !important;" src="{!! asset('images/articles/' . $model->image) !!}">
			</div>
		@endif
	</div>
	@endif	
	<div class="form-group">
		{!! Form::label('', 'Header image left:') !!}
		{!! Form::file('image_left', ['class' => 'input-file', 'id' => 'image_left']) !!}
		<label for="image_left" class="btn btn-primary btn-upload btn-maxwidth"><i class="fa fa-upload"></i> <span>Choose a file</span></label>		
		{!! $errors->first('image_left', '<div class="text-danger">:message</div>') !!}
	</div>
	@if(isset($model))
	<div class="form-group">
		@if($model->image_left)
			<div class="img-thumbnail">
				<img class="img-responsive" style="max-width: 290px !important;" src="{!! asset('images/articles/' . $model->image_left) !!}">
			</div>
		@endif
	</div>
	@endif		
	<div class="form-group">
		{!! Form::label('', 'Header image right:') !!}
		{!! Form::file('image_right', ['class' => 'input-file', 'id' => 'image_right']) !!}
		<label for="image_right" class="btn btn-primary btn-upload btn-maxwidth"><i class="fa fa-upload"></i> <span>Choose a file</span></label>		
		{!! $errors->first('image_right', '<div class="text-danger">:message</div>') !!}
	</div>
	@if(isset($model))
	<div class="form-group">
		@if($model->image_right)
			<div class="img-thumbnail">
				<img class="img-responsive" style="max-width: 290px !important;" src="{!! asset('images/articles/' . $model->image_right) !!}">
			</div>
		@endif
	</div>
	@endif
	{!! Form::hidden('logo_count', 'logo_count') !!}
	@endif
	@if(isOnPages())
	<div class="form-group">
		{!! Form::label('logos', 'Project logos:') !!}
		<div class="well well-logos">
			<div id="project-logos">
				<?php $logo_count = 0; ?>
				@if(isset($model))
					@if($model->logos)
						@foreach($model->logos as $key => $logo)
							<div class="panel panel-default" id="panel-logo-{{ $key }}">
								<div class="panel-body clearfix">
									<div class="img-thumbnail">
										<img class="img-responsive" style="max-width: 100%;" src="{!! asset('images/articles/' . $logo->image) !!}">	
									</div>
									<input type="hidden" name="logos[]" value="{{ $logo->image }}">
									{!! Form::file('input_logos', ['class' => 'input-file', 'id' => 'file-logo-' . $key]) !!}
									<label for="logo-{{ $key }}" class="btn btn-primary btn-upload"><i class="fa fa-upload"></i> <span>Choose a file</span></label>
									<button type="button" class="btn btn-danger btn-remove" onclick="removeItem('panel-logo-{{ $key }}', 'logo')"><i class="fa fa-times"></i></button>
									<?php $logo_count++; ?>
								</div>
							</div>
						@endforeach
					@endif						
				@endif				
			</div>
			<button id="btn-add-logo" class="btn btn-success" type="button"><i class="fa fa-plus"></i> Add logo</button>
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('images', 'Project images:') !!}
		<div class="well well-images">
			<div id="project-images">
				<?php $image_count = 0; ?>
				@if(isset($model))
					@if($model->images)
						@foreach($model->images as $key => $image)
							<div class="panel panel-default" id="panel-image-{{ $key }}">
								<div class="panel-body clearfix">
									<div class="img-thumbnail">
										<img class="img-responsive" style="max-width: 100%;" src="{!! asset('images/articles/' . $image->image) !!}">	
									</div>
									<input type="hidden" name="images[]" value="{{ $image->image }}">
									{!! Form::file('input_images', ['class' => 'input-file', 'id' => 'file-image-' . $key]) !!}
									<label for="image-{{ $key }}" class="btn btn-primary btn-upload"><i class="fa fa-upload"></i> <span>Choose a file</span></label>
									<button type="button" class="btn btn-danger btn-remove" onclick="removeItem('panel-image-{{ $key }}', 'image')"><i class="fa fa-times"></i></button>
									<?php $image_count++; ?>
								</div>
							</div>
						@endforeach
					@endif
				@endif
			</div>
			<button id="btn-add-image" class="btn btn-success" type="button"><i class="fa fa-plus"></i> Add image</button>
		</div>
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
		CKFinder.setupCKEditor( editor, prefix + '/vendor/ckfinder/');
	</script>

	@if(isOnPages())
	<script type="text/javascript">
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

		var logo_count = <?php echo $logo_count; ?>;

		var image_count = <?php echo $image_count; ?>;

		function addInputLogo() {
			var container = document.getElementById('project-logos');

			var panel = document.createElement('div');
					panel.className = 'panel panel-default';
					panel.id = 'panel-logo-' + logo_count;

			panel_body  = '<div class="panel-body clearfix">';
			panel_body += 	'<input type="hidden" name="logos[]" value="empty">';
			panel_body += 	'<input type="file" id="logo-' + logo_count + '" class="input-file" name="file_logo_' + logo_count + '">';
			panel_body += 	'<label for="logo-' + logo_count + '" class="btn btn-primary btn-upload"><i class="fa fa-upload"></i> <span>Choose a file</span></label>';
			panel_body += 	'<button type="button" class="btn btn-danger btn-remove" onclick="removeItem(\'panel-logo-' + logo_count + '\', \'logo\')"><i class="fa fa-times"></i></button>';
			panel_body += '</div>';

			panel.innerHTML = panel_body;

			container.appendChild(panel);

			logo_count++;

			enableFileButtons();
		}

		function addInputImage() {
			var container = document.getElementById('project-images');

			var panel = document.createElement('div');
					panel.className = 'panel panel-default';
					panel.id = 'panel-image-' + image_count;

			panel_body  = '<div class="panel-body clearfix">';
			panel_body += 	'<input type="hidden" name="images[]" value="empty">';
			panel_body += 	'<input type="file" id="image-' + image_count + '" class="input-file" name="file_image_' + image_count + '">';
			panel_body += 	'<label for="image-' + image_count + '" class="btn btn-primary btn-upload"><i class="fa fa-upload"></i> <span>Choose a file</span></label>';
			panel_body += 	'<button type="button" class="btn btn-danger btn-remove" onclick="removeItem(\'panel-image-' + image_count + '\', \'image\')"><i class="fa fa-times"></i></button>';
			panel_body += '</div>';

			panel.innerHTML = panel_body;

			container.appendChild(panel);

			image_count++;

			enableFileButtons();
		}

		function removeItem(target_id, type) {
			var target = document.getElementById(target_id);

			if (type === 'logo') {
				logo_count--;
			} else if (type === 'image') {
				image_count--;
			}

			target.remove();
		}

		document.getElementById("btn-add-logo").onclick = addInputLogo;
		document.getElementById("btn-add-image").onclick = addInputImage;
	</script>
	@endif
@stop
