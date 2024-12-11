@extends('seller.layouts.layout')
@section('Seller Painel')
    Create Product Page
@endsection
@section('seller_layout')
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-tittle mb-0">Add Product</h5>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-warning alert-dismissible fade show">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if (session('message'))
                        <div class="alert alert-success">
                            {{session('message')}}
                        </div>
                    @endif
                    <form action="{{route('vendor.product.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="product_name" class="fw-bold mb-2">Give Name of Your Product</label>
                    <input type="text" class="form-control mb-2" name="product_name" placeholder="Input">

                    <label for="description" class="fw-bold mb-2">Product Description</label>
                    <textarea name="description" class="form-control mb-2" id="description" cols="30" rows="10"></textarea>

                    <label for="images" class="fw-bold mb-2">Upload Your Product Images</label>
                    <input type="file" class="form-control mb-2" name="images[]" multiple>

                    <label for="sku" class="fw-bold mb-2">SKU</label>
                    <input type="text" class="form-control mb-2" name="sku" placeholder="Input">

                    <livewire:category-subcategory/>

                    <label for="store_id" class="fw-bold mb-2">Select your Store For This Product</label>
                    <select name="store_id" id="store_id" class="form-control mb-2">
                    @foreach ($stores as $store)
                    <option value="{{$store->id}}">{{$store->store_name}}</option>
                    @endforeach
                    </select>

                    <label for="regular_price" class="fw-bold mb-2">Product Regular Price</label>
                    <input type="number" class="form-control mb-2" name="regular_price" placeholder="$0.00">

                    <label for="discounted_price" class="fw-bold mb-2">Product Discount Price (if any)</label>
                    <input type="number" class="form-control mb-2" name="discounted_price" placeholder="$0.00">

                    <label for="tax_rate" class="fw-bold mb-2">Tax Rate (if any)</label>
                    <input type="number" class="form-control mb-2" name="tax_rate" placeholder="0.0">

                    <label for="stock_quantity" class="fw-bold mb-2">Product Stock Quantity</label>
                    <input type="number" class="form-control mb-2" name="stock_quantity" placeholder="0">

                    <label for="slug" class="fw-bold mb-2">Slug</label>
                    <input type="text" class="form-control mb-2" name="slug">

                    <label for="meta_tittle" class="fw-bold mb-2">Meta Title</label>
                    <input type="text" class="form-control mb-2" name="meta_tittle">

                    <label for="meta_description" class="fw-bold mb-2">Meta Description</label>
                    <input type="text" class="form-control mb-2" name="meta_description">

                    <button type="submit" class="btn btn-primary w-100 mt-2">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection