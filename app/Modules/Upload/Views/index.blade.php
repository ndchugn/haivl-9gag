@extends('layouts.app')
<head>
    <title>Upload</title>
    <meta charset="utf-8">
</head>
@section('content')
<div class="container">
    <p>Upload your file here:</p>
    <form method="POST" action="/upload" enctype="multipart/form-data">
		<label>Title: </label><input type="text" name="title">
    	<input type="file" name="image_upload" accept="image/*">
    	<input type="submit" name="submit_image" value="OK">
    	{{ csrf_field() }}
    </form>
</div>
@endsection