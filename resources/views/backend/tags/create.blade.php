@extends('layouts.backend.master')

@section('pagetitle','Add New Tag')

@push('css')
	{{-- expr --}}
@endpush

@section('main-content')	
			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget" id="wid-id-8" data-widget-editbutton="false" data-widget-custombutton="false">
				<header>
					<span class="widget-icon"> <i class="fa fa-edit"></i> </span>
					<h2>Add New Tag </h2>
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
						<form action="{{ route('tag.store') }}" method="post" id="contact-form" class="smart-form" enctype="multipart/form-data">
							{{ csrf_field() }}
							<fieldset>					
								<section>
									<label class="label">Tag Name</label>
									<label class="input">
										<i class="icon-append fa fa-tag"></i>
										<input type="text" name="name" id="name">
									</label>
								</section>											
								<section>
									<label class="checkbox">
										<input type="checkbox" name="is_active" id="is_active" value="1" checked><i></i>Status
									</label>
								</section>
							</fieldset>							
							<footer>
								<button type="submit" class="btn btn-primary">Save</button>
								<a href="{{ route('tag.index') }}" class="btn btn-warning">Back</a>
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