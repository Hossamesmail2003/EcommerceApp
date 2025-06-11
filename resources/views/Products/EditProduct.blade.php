@extends('master')

@section('content')
	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Edit</span> Products</h3>
					</div>
				</div>
			</div>

			<div class="row">
                <div class="contact-from-section mt-150 mb-150">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 mb-5 mb-lg-0">
                                <div class="form-title">
                                </div>
                                <div id="form_status"></div>
                                <div class="contact-form">
                                    <form type="POST" method="POST" action="/UpdateProduct/{{$product->id}}" id="fruitkha-contact">
                                        @csrf
                                        @method('PUT')
                                        <p>
                                            <input type="text" style='width: 100%;' placeholder="Name" name="name" id="name" value="{{$product->name}}">
                                            <span>
                                                @error('name')
                                                    <strong>{{ $message }}</strong>
                                                @enderror
                                            </span>

                                        </p>
                                        <p style="display: flex;">
                                            <input type="number" style='width: 50%;' placeholder="Price" name="price" id="price" value="{{$product->price}}">
                                            <span>
                                                @error('price')
                                                    <strong>{{ $message }}</strong>
                                                @enderror
                                            </span>
                                            <input type="number" style='width: 50%;' placeholder="Quantity" name="quantity" id="quantity" value="{{$product->quantity}}">
                                            <span>
                                                @error('quantity')
                                                    <strong>{{ $message }}</strong>
                                                @enderror
                                            </span>
                                        </p>
                                        <p><textarea name="description" id="description" cols="30" rows="10" placeholder="Description">{{$product->description}}</textarea></p>
                                        <p>
                                            <select class='form-control' name="category_id" id="category_id">
                                                <option value="">Select Category</option>
                                                @foreach($categories as $category)
                                                @if ($category->id == $product->category_id)
                                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                                @else
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endif
                                                @endforeach
                                                <p>
                                                    <img src="{{asset($product->imagepath)}}" alt="" style="width: 200px; height: 200px;">
                                                </p>
                                            </select>
                                            <span>
                                                @error('category')
                                                    <strong>{{ $message }}</strong>
                                                @enderror
                                            </span>
                                        </p>
                                        <p><input type="submit" value="Edit"></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>


@endsection