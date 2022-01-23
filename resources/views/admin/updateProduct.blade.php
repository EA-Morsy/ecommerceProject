
@extends('layouts/master')

@section('content')


<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Edit PRODUCT</h3>
                <!-- <div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div> -->
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <label>category</label><br>
                    <div class="input-group form-group">
                        <select name="categoryID" id="category" class="form-control">
                            <option value="{{$product->categoryID}}" selected disabled hidden>{{$curr->name}}</option>

                            @foreach($category as $category)
                            <option value="{{$category['id']}}" name='categoryID'>{{$category['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <label>Name</label><br>
                    <div class="input-group form-group">


                        <input type="text" class="form-control" placeholder="name" name="name" value="{{$product->name}}">

                    </div>
                    <label>Price</label><br>
                    <div class="input-group form-group">


                        <input type="number" class="form-control" placeholder="price" name="price" value="{{$product->price}}">

                    </div>
                    <label>Descreption</label><br>
                    <div class="input-group form-group">

                        <textarea class="form-control" rows="5" placeholder="product desc..." name="desc">{{$product->desc}}</textarea>

                    </div>
                    <div class="input-group form-group">
                        <!-- <div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div> -->
                        <label style="display: block;">Image </label><br>
                        <div class="input-form-group">
                            <img src="{{asset($product->pic)}}" width="200px" height="200px" >
                        </div>
                        
                    </div>
                    <input type="file" class="form-control" name="pic" value="{{$product->pic}}">
                    <div class="form-group">
                        <input type="submit" value="UPDATE" class="btn float-right login_btn">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>



@endsection