@extends('admin.layouts.layout')
@section('Controle Admin')
Edit Sub Category - Admin
@endsection
@section('admin_layout')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-tittle mb-0">Edit Sub Category</h5>
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
                    <form action="{{route('update.subcat', $subcategory_info->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="subcategory_name">Give Name of Your Sub Category</label>
                    <input type="text" class="form-control" name="subcategory_name" value="{{$subcategory_info->subcategory_name}}">

                    <button type="submit" class="btn btn-primary w-100 mt-2">Update Sub Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection