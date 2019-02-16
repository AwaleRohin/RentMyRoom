@extends('layouts.app')
@section('content')

	<div class="container">
		<div class="row w-50 mx-auto">
			<div class="col-lg-12">
				<ul class="nav nav-tabs nav-justified">
					<li class="nav-item">
						<a class="nav-link active" href="/">SEARCH FOR ROOM</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/posts/create">OFFER A ROOM</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="row w-50 mx-auto" style="width:100%;">
			<form action="{{action('SearchController@action')}}" method="get" class="ml-5">
				@csrf
				<label class="mb-0 mt-4">Search and location details</label><hr>
				
				<div class="row form-group">
					<div class="col-lg-5">
						<label class="ml-4 mr-5" for="roomtype">No of Rooms Required</label>
					</div>
					<div class="col-lg-7">
						<label class="mr-4">
							<input type="number" class="form-control" name="no_of_rooms" autofocus>
						</label>
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-lg-5">
						<label class="ml-4 mr-5" for="location">Location </label>
					</div>
					<div class="col-lg-7">
						<label class="mr-4">
							<input type="text" class="form-control" name="location" autofocusautofocus>
						</label>
					</div>
				</div>
				
				<label class="mb-0 mt-5">Rent Preference</label><hr>

				<div class="row form-group">
					<div class="col-lg-5">
						<label class="ml-4 mr-5" for="cost">For max RS </label>
					</div>
					<div class="col-lg-7">
						<label>
							<label><input type="int" class="form-control" name="cost" autofocus> &nbsp;/ month</label>
						</label>
					</div>
				</div>	
				
				<div class="form-group mx-auto">
					<button class="btn btn-info d-flex mx-auto mt-5 mb-5" id="search">SEARCH</button>
				</div>

			</form>

		</div>

	</div>

@endsection	