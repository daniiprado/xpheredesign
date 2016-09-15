@extends('index.app')

@section('htmlheader_title')
	XphereDesign - {{$id}}
@endsection

@section('slider')
	@include('index.partials.'.$slid)
@endsection


@section('content')
	@include('index.contents.'.$id)
@endsection
