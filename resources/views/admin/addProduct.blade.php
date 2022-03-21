
@extends("layouts.master")

@section('content')


<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>ADD PRODUCT</h3>
				<!-- <div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div> -->
			</div>
			<div class="card-body">
				<form method="POST" enctype="multipart/form-data" >
					@csrf
					
					<label for="category_id" class="form">Select category:</label>

					<div class="input-group form-group">
						
						
						<select name="category_id" id="category" class="form-control">
						@foreach($category as $category)
							<option value="{{$category->id}}" name='category_id'>{{$category['name']}}</option>
						@endforeach
						</select>

					</div>
					<div class="input-group form-group">
				   <!-- <div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div> -->
						<input type="text" class="form-control" placeholder="name" name="name">

					</div>
					<div class="input-group form-group">
						<!-- <div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div> -->
						<input type="number" class="form-control" placeholder="price" name="price">

					</div>
				
						<!-- <div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div> -->
						<input type="file" class="form-control" name="pic">
					
					<div class="input-group form-group">
						<!-- <div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div> -->
						<textarea class="form-control" rows="5" placeholder="product desc..." name="desc"></textarea>

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