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
					<h2>Add New Category </h2>
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
						<form action="demo-contacts.php" method="post" id="contact-form" class="smart-form">
							<header>Contacts form</header>							
							<fieldset>					
								<section>
									<label class="label">Category Name</label>
									<label class="input">
										<i class="icon-append fa fa-tag"></i>
										<input type="text" name="name" id="name">
									</label>
								</section>								
								<section>
									<label class="checkbox"><input type="checkbox" name="is_active" id="is_active"><i></i>Status</label>
								</section>
							</fieldset>							
							<footer>
								<button type="submit" class="btn btn-primary">Save</button>
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
	{{-- expr --}}
@endpush