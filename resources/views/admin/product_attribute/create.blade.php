@extends('admin.layouts.layout')
@section('Controle Admin')
Create Default Attribute - Admin
@endsection
@section('admin_layout')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-tittle mb-0">Create Default Attribute</h5>
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
                    <form action="{{route('attribute.create')}}" method="POST">
                    @csrf
                    <label for="attribute_value">Give Name of Your Attribute</label>
                    <input type="text" class="form-control" name="attribute_value" placeholder="Input">

                    <button type="submit" class="btn btn-primary w-100 mt-2">Add Attribute</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection