@extends('default')
@section('title', '')
@section('content')

	<div class="form-parent">
		<br><br><br><br>
		<div class="bg-white p-4 card align-self-center" style="max-width: 400px; margin: 0px auto;">	
			<h1 class="text-center">Add Student</h1>
            
            <form method="POST" action="" autocomplete="off" >
            	<input type="hidden" name="_token" value="{{csrf_token() }}">
			
			
			<div class="form-group  {{ $errors->has('name') ? 'has-error' : '' }}">
				<label>Student Name</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Enter Case Name" >
				<span class="text-danger">{{ $errors->first('name') }}</span>
			</div>
			
			<div class="form-group  {{ $errors->has('roll') ? 'has-error' : '' }}">
				<label>Roll number</label>
				<input type="text" class="form-control" id="roll" name="roll" placeholder="Enter Roll number">
				<span class="text-danger">{{ $errors->first('roll') }}</span>
			</div>
			

			@if(count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach 
				</ul>
			</div>
			@endif

			@if(\Session::has('success'))
				<div class="alert alert-success">
					<p>{{\Session::get('success')}}</p>
				</div>
			@endif
			{{csrf_field()}}
			
			
			<div class="form-group">
				<input type="submit" class="btn btn-primary  btn-block" name="submit" value="Submit">
			</div>
		</form>
	</div>
	</div>


@endsection
