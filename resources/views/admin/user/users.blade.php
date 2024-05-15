@extends('admin.layouts.adminTablePages')

@section('title')
    Rent Car Admin | Users
@endsection

@section('button')
  btn btn-secondary
@endsection

@section('topTitle')
    Manage <small>Users</small>
@endsection

@section('sideTitle')
    List of Users
@endsection

@section('content')
    <div class="x_title">
        @include('admin.includes.secondaryTitle')
    </div>
    <div class="x_content">
        @include('admin.includes.userTable')
    </div>
@endsection