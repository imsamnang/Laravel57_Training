@extends('layouts.backend.master')

@section('pagetitle','Add New Post')

@push('css')
	{{-- expr --}}
@endpush

@section('main-content')
	<!-- NEW WIDGET START -->
	<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">							
		<!-- Widget ID (each widget will need unique ID)-->
		<div class="jarviswidget" id="wid-id-0">
			<header>
				<span class="widget-icon"> <i class="fa fa-comments"></i> </span>
				<h2>Widget Title </h2>									
			</header>				
			<!-- widget div-->
			<div>									
				<!-- widget edit box -->
				<div class="jarviswidget-editbox">
					<!-- This area used as dropdown edit box -->
					<input class="form-control" type="text">	
				</div>
				<!-- end widget edit box -->									
				<!-- widget content -->
				<div class="widget-body">										
					<form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
							<div class="row">
								<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
									<div class="form-group">									
										<label>Post Title</label>	
										<input type="text" name="title" id="title" class="form-control" title="title">
									</div>
									<div class="form-group">									
										<label>Feature Image</label>	
										<input type="file" name="image" id="image">
									</div>
									<div class="form-group">
										<input type="checkbox" name="is_active" id="is_active" value="1" checked><i></i>Status
									</div>									
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="form-group">
										<label>Category</label>
										<select multiple style="width:100%" class="select2" name="categories[]">
											<optgroup label="Select Category">
												@foreach ($categories as $row)
													<option value="{{ $row->id }}">{{$row->name}}</option>
												@endforeach
											</optgroup>
										</select>
									</div>
									<div class="form-group">
										<label>Tag</label>
										<select multiple style="width:100%" class="select2" name="tags[]">
											<optgroup label="Select Tag">
												@foreach ($tags as $row)
													<option value="{{ $row->id }}">{{$row->name}}</option>
												@endforeach
											</optgroup>
										</select>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<textarea name="body" class="form-control my-editor" rows="15"></textarea>
								</div>
							</div>
							<div class="clear-fix"></div>
							<br>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<a href="{{route('post.index')}}" class="btn btn-warning">Back</a>&nbsp;
									<button type="submit" class="btn btn-primary pull-right">Save</button>
								</div>
							</div>								
					</form>
				</div>
				<!-- end widget content -->									
			</div>
			<!-- end widget div -->								
		</div>
		<!-- end widget -->				
	</article>
	<!-- WIDGET END -->
@endsection

@push('js')
<script src="{{ asset('assets/backend/tinymce/js/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('vendor/laravel-filemanager/js/lfm.js') }}"></script>
	<script>
		// $('#lfm').filemanager('image');
		// $('#lfm').filemanager('file');
	  var editor_config = {
	    path_absolute : "/",
	    selector: "textarea.my-editor",
	    plugins: [
	      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
	      "searchreplace wordcount visualblocks visualchars code fullscreen",
	      "insertdatetime media nonbreaking save table contextmenu directionality",
	      "emoticons template paste textcolor colorpicker textpattern"
	    ],
	    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
	    relative_urls: false,
	    file_browser_callback : function(field_name, url, type, win) {
	      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
	      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

	      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
	      if (type == 'image') {
	        cmsURL = cmsURL + "&type=Images";
	      } else {
	        cmsURL = cmsURL + "&type=Files";
	      }

	      tinyMCE.activeEditor.windowManager.open({
	        file : cmsURL,
	        title : 'Filemanager',
	        width : x * 0.8,
	        height : y * 0.8,
	        resizable : "yes",
	        close_previous : "no"
	      });
	    }
	  };

	  tinymce.init(editor_config);
	</script>
@endpush