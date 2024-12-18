@extends('admin.layouts.layout')
@section('Controle Admin')
Create SubCategory - Admin
@endsection
@section('admin_layout')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-tittle mb-0">Create SubCategory</h5>
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
                    <form action="{{route('store.subcat')}}" method="POST">
                    @csrf
                    <label for="subcategory_name" class="fw-bold md-2">Give Name of Your SubCategory</label>
                    <input type="text" class="form-control" name="subcategory_name" placeholder="Input">

                    <label for="category_id" class="fw-bold md-2">Select Category</label>
                    <select name="category_id" class="form-control" id="category_id">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>

                    <button type="submit" class="btn btn-primary w-100 mt-2">Add SubCategory</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection