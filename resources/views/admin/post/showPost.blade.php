@extends('admin.layouts.adminTablePages')

@section('title')
  Rent Car Admin | Show Post
@endsection

@section('button')
  btn btn-secondary
@endsection

@section('topTitle')
  Manage Posts
@endsection

@section('content')
  @include('admin.includes.post')
@endsection