@extends('master')
@section('content')


<form action="/storeproductimages/{{ $product->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image" >
    <button type="submit">Upload</button>
</form>

@foreach ($productimages as $item)
    <img src="{{ asset($item->imagepath) }}" alt="Product Image">
@endforeach




@endsection