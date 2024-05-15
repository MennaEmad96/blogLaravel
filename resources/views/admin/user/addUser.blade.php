@extends('admin.layouts.adminFormPages')

@section('title')
Rent Car Admin | Add User
@endsection

@section('button')
btn btn-default
@endsection

@section('topTitle')
	Manage Users
@endsection

@section('sideTitle')
    Add User
@endsection

@section('content')
	@include('admin.includes.userForm')
@endsection