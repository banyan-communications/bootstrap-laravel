@extends ('layout.master')

@section('content')

<h1>Publish a post</h1>

	<hr>

	<form method="POST" action="/templates">

	{{csrf_field()}}

  		<div class="form-group">
    		<label for="exampleInputEmail1">Title:</label>
    		<input type="text" class="form-control" id="title" name="title" required>
  		</div>
  
  		<div class="form-group">
    		<label for="exampleInputPassword1">Body:</label>
    		<textarea id="body" name="body" class="form-control" required></textarea>
  		</div>

      <div class="form-group">
  			<button type="submit" class="btn btn-lg btn-secondary">Publish</button>
  		</div>

  		@include('templates.error')

  </form>

@endsection
