@extends('admin.app')

@section('htmlheader_title')
	XphereDesign | Admin Dashboard
@endsection

@section('content')
	@include('admin.content.'.$id)
@endsection
