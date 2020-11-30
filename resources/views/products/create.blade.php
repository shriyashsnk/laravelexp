@extends('products.layout')

@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Add New Product</h2>
</div>
<div class="pull-right">
<a class="btn btn-info" href="{{ route('products.index') }}"> Back</a>
</div>
</div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<form action="{{ route('products.store') }}" method="POST">
@csrf

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name:</strong>
<input type="text" name="name" class="form-control" placeholder="Name">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Detail:</strong>
<textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Price:</strong>
<input type="number" name="price" class="form-control" placeholder="Price">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Category:</strong>
<select name="category" id="category" class="form-control">
<option value="Grocery & Staples">Grocery & Staples</option>
<option value="Personal Care">Personal Care</option>
<option value="Household Care">Household Care</option>
<option value="Beverages">Beverages</option>
<option value="Breakfast & Dairy">Breakfast & Dairy</option>
<option value="Baby Care">Baby Care</option>
<option value="Snacks">Snacks</option>
<option value="Packaged Foods">Packaged Foods</option>
<option value="Fruit & Vegetables">Fruit & Vegetables</option>
</select>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>

</form>
@endsection