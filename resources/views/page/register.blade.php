@extends('layouts.master')

@section('content')
@include('inc.nav')


<section id="register-wrapper" class="pt-4">

		<div class="container">
			<div class="row">
					<div class="card col-md-6 mx-auto text-center">
				
				   
					 <div class="card-body">
						
							<form method="post" action="postregister">
								@csrf
							   <div class="col">
								<h4>register with us today</h4>

								@if ($errors->any())
   							 <div class="alert alert-danger">
        						<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
													
									<div class="form-group">
										<input type="text" class="form-control reg-input mr-1" placeholder="first name" required="" name="firstName">
									</div>

									<div class="form-group">
										<input type="text" class="form-control  reg-input" placeholder="last name" required="" name="lastName">
									</div>
							   
								<div class="form-group">
									<input type="email" class="form-control" placeholder="enter your email" required="" name="email">
								</div>
								<div class="form-group ">
										 <input type="password" class="form-control" placeholder="enter new password" name="password"> 
										  </div>
										  <div class="form-group">
											<input type="password" class="form-control" placeholder="confirm your password" name="cpassword">
											  </div>
						
						</div> 
						  <div class="input-group button_cover">
														 
									<button class="a btn-block" type="submit">register</button>
								</div>
								 </div>
							   
							</form>
					   
						</div>

						
					</div> 


			
				</div>
	</section>

	@endsection

