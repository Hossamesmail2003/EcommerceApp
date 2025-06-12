@extends('master')

@section('content')
	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Add</span> Products</h3>
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
                                    <form method="POST" action="/StoreProduct" enctype="multipart/form-data" id="fruitkha-contact">
                                        @csrf
                                        <p>
                                            <input type="text" style='width: 100%;' placeholder="Name" name="name" id="name" value="{{ old('name') }}">
                                            <span>
                                                @error('name')
                                                    <strong>{{ $message }}</strong>
                                                @enderror
                                            </span>

                                        </p>
                                        <p style="display: flex;">
                                            <input type="number" style='width: 50%;' placeholder="Price" name="price" id="price" value="{{ old('price') }}">
                                            <span>
                                                @error('price')
                                                    <strong>{{ $message }}</strong>
                                                @enderror
                                            </span>
                                            <input type="number" style='width: 50%;' placeholder="Quantity" name="quantity" id="quantity" value="{{ old('quantity') }}">
                                            <span>
                                                @error('quantity')
                                                    <strong>{{ $message }}</strong>
                                                @enderror
                                            </span>
                                        </p>
                                        <p><textarea name="description" id="description" cols="30" rows="10" placeholder="Description" value={{ old('description') }}></textarea></p>
                                        <p>
                                            <select class='form-control' name="category_id" id="category_id">
                                                <option value="">Select Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            <span>
                                                @error('category')
                                                    <strong>{{ $message }}</strong>
                                                @enderror
                                            </span>
                                        </p>
                                        <p>
                                            <input class="form-control" type="file" name="image" id="image" >
                                            <span>
                                                @error('image')
                                                    <strong>{{ $message }}</strong>
                                                @enderror
                                            </span>
                                        </p>
                                        <p><input type="submit" value="Submit"></p>
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