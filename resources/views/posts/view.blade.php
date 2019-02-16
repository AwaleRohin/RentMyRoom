@extends('layouts.app')

  @section('content')
		<div class="container mt-5 mb-5 text-center">
			<div class="row">
				<div class="col-md-6">
					<img src="/storage/cover_img/{{$post->cover_img}}" class="img-responsive" alt="Responsive image"  height="400" width="400">
				</div>	
				<div class="col-md-6 text-left">
					<h3>ROOM FOR RENT</h3>
					<br/>
					<p>Address : {{$post->location}}</p>
					<p>No. of Rooms available : {{$post->no_of_rooms}}</p>
					<p>Rent Price : {{$post->price}}</p>
						@if($post->facilities)
							<p>Available Facilities : {{$post->facilities}}</p>
						@endif
					<p>Email : {{$post->email}} </p>
					<br/><br/><br/><br/>
					<h5>Posted by : {{$post->name}} </h5>
				</div>
			</div>
			<br/>
			@if(!Auth::guest())
        		@if(Auth::user()->id == $post->user_id)
					<div class="row">
						<div class="col-md-3">
							<a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
						</div>
						<div class="col-md-3">
							<form action="{{action('PostsController@destroy', $post->id)}}" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE" />
								<input type="submit" class="btn btn-danger" value="Delete">
							</form>
						</div>
					</div>
				@endif
			@endif
		</div>
  @endsection