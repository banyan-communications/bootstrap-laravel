@extends ('layout.master')


@section('content')
        <h2>This page is a blog page. You can post anything on the form page and it gets updated here</h2>

 @foreach($templates as $template)

	@include('templates.template')

 @endforeach

 @endsection