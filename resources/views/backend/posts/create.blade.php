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
					<form class="">
						<div class="panel panel-primary">
							<div class="panel-heading"></div>
							<div class="panel-body">
								<div class="col-md-8">
									<label>Category</label>	
									<input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
								</div>
								<div class="col-md-4">
										<div class="form-group">
											<label>Category</label>
											<select multiple style="width:100%" class="select2">
												<optgroup label="Select Category">
													<option value="CA">California</option>
													<option value="NV" selected="selected">Nevada</option>
													<option value="OR">Oregon</option>
													<option value="WA">Washington</option>
												</optgroup>
											</select>
										</div>
								</div>
							</div>
						</div>
{{-- 						<fieldset>
							<div class="row">
								<section class="col col-8">														
									<label class="label">Post Title</label>
									<label class="input">
										<i class="icon-append fa fa-tag"></i>
										<input type="text" name="title" id="title">
									</label>
								</section>
								<section class="col col-4">
									<fieldset>		
										<div class="form-group">
											<label>Category</label>
											<select multiple style="width:100%" class="select2">
												<optgroup label="Select Category">
													<option value="CA">California</option>
													<option value="NV" selected="selected">Nevada</option>
													<option value="OR">Oregon</option>
													<option value="WA">Washington</option>
												</optgroup>
											</select>
										</div>				
									</fieldset>
								</section>
							</div>		
							<div class="row">
								<section class="col col-8">														
									<label class="label">Feature Image</label>
									<div class="input input-file">
										<span class="button">
											<input type="file" id="image" name="image" onchange="this.parentNode.nextSibling.value = this.value">Browse</span><input type="text" placeholder="Include some files" readonly="">
									</div>
								</section>
								<section class="col col-4">
									<fieldset>		
										<div class="form-group">
											<label>Category</label>
											<select multiple style="width:100%" class="select2">
												<optgroup label="Select Category">
													<option value="CA">California</option>
													<option value="NV" selected="selected">Nevada</option>
													<option value="OR">Oregon</option>
													<option value="WA">Washington</option>
												</optgroup>
											</select>
										</div>				
									</fieldset>
								</section>
							</div>
							<div class="row">
								<section class="col col-8">														
									<label class="checkbox">
										<input type="checkbox" name="is_active" id="is_active" value="1" checked><i></i>Status
									</label>
								</section>
								<section class="col col-4">

								</section>
							</div>													
						</fieldset>				
						<footer>
							<button type="submit" class="btn btn-primary">
								Submit
							</button>
							<button type="button" class="btn btn-default" onclick="window.history.back();">
								Back
							</button>
						</footer> --}}
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