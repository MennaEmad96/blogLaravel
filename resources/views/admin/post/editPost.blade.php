@extends('admin.layouts.adminFormPages')

@section('title')
    Rent Car Admin | Edit Post
@endsection

@section('button')
  btn btn-default
@endsection

@section('topTitle')
    Manage Posts
@endsection

@section('sideTitle')
    Edit Post
@endsection

@section('content')
    @include('admin.includes.postForm')
@endsection