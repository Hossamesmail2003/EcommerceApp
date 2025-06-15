@extends('master')

@section('content')

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Our</span> Products</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
					</div>
				</div>
			</div>

			<div class="row">
                @foreach ($products as $item)
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single-product.html"><img src="{{asset($item->imagepath)}}" style="max-height: 250px; min-height: 250px" alt=""></a>
                            </div>
                            <h3>{{$item->name}}</h3>
                            <p class="product-price"><span>{{$item->quantity}}</span> {{$item->price}}$ </p>
                            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
							<form action="/DeleteProduct/{{$item->id}}" method="POST" style="display:inline;">
								@csrf
								@method('DELETE')
								<button type="submit" class="cart-btn" style="border:none; background:none; padding:0;">
									<i class="fas fa-trash"></i> Delete
								</button>
							</form>
							<a href="/EditProduct/{{$item->id}}" class="cart-btn"><i class="fas fa-edit"></i> Edit</a>
                        </div>
                    </div>
                @endforeach
				<div class="col-lg-12">
					<div class="pagination">
						{{ $products->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product section -->




@endsection