@extends('layouts.backend.master')

@section('pagetitle','Add new category')

@push('css')
	{{-- expr --}}
@endpush

@section('main-content')	
	<!-- Widget ID (each widget will need unique ID)-->
	<div class="jarviswidget" id="wid-id-8" data-widget-editbutton="false" data-widget-custombutton="false">
		<header>
			<span class="widget-icon"> <i class="fa fa-edit"></i> </span>
			<h2>Add New Category</h2>
		</header>
		<!-- widget div-->
		<div>					
			<!-- widget edit box -->
			<div class="jarviswidget-editbox">
				<!-- This area used as dropdown edit box -->	
			</div>
			<!-- end widget edit box -->					
			<!-- widget content -->
			<div class="widget-body no-padding">						
				<form action="{{ route('category.update',$category->id) }}" method="POST" id="category_edit" class="smart-form" enctype="multipart/form-data">
					{{ csrf_field() }}
					{{ method_field('PUT') }}
					<fieldset>
						<section>
							<label class="label">Category Name</label>
							<label class="input">
								<i class="icon-append fa fa-tag"></i>
								<input type="text" name="name" id="name" value="{{ $category->name }}">
							</label>
						</section>											
						<section>
							<label class="label">File input</label>
							<div class="input input-file">
								<span class="button">
									<input type="file" id="image" name="image" onchange="this.parentNode.nextSibling.value = this.value">Browse</span>
									<input type="text" placeholder="Include some files" readonly="" value="{{ $category->image }}">
							</div>
						</section>
						<section>
							<label class="checkbox">
								<input type="checkbox" name="is_active" id="is_active" value="1" checked><i></i>Status
							</label>
						</section>
					</fieldset>
					<footer>
						<button type="submit" class="btn btn-primary">Update</button>
						<a href="{{ route('category.index') }}" class="btn btn-warning">Back</a>
					</footer>
				</form>						
			</div>
			<!-- end widget content -->					
		</div>
		<!-- end widget div -->				
	</div>
	<!-- end widget -->					
@endsection

@push('js')
{{-- 	<script type="text/javascript">
		$(function(){
	    $(".check").click(function(){
	        $("#is_active").prop("checked", true);
	    });
	    $(".uncheck").click(function(){
	        $("#is_active").prop("checked", false);
	    });			
		});
	</script> --}}
@endpush