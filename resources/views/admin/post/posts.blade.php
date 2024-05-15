@extends('admin.layouts.adminTablePages')

@section('title')
    Rent Car Admin | Posts
@endsection

@section('button')
  btn btn-secondary
@endsection

@section('topTitle')
    Manage Posts
@endsection

@section('sideTitle')
    List of Posts
@endsection

@section('content')
    <div class="x_title">
        @include('admin.includes.secondaryTitle')
    </div>
    <div class="x_content">
        @include('admin.includes.postTable')
    </div>
@endsection