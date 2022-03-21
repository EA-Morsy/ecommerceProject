@extends('layouts.master')

@section('content')

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>ADD CATEGORY</h3>
			
			</div>
			<div class="card-body">
				<form method="POST" enctype="multipart/form-data" >
					@csrf
					
					<div class="input-group form-group">
				   <!-- <div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div> -->
						<input type="text" class="form-control" placeholder="name" name="name">

					</div>
					
					<div class="form-group">
						<input type="submit" value="INSERT" class="btn float-right login_btn">
					</div>
				</form>
			</div>

		</div>
	</div>
</div>


@endsection