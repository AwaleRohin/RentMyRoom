@extends('layouts.app')
	@section('content')
	
		<div class="container">
			<!--tab for search room and offer room-->
			<div class="row w-50 mx-auto">
				<div class="col-lg-12">
					<ul class="nav nav-tabs nav-justified">
						<li class="nav-item">
							<a class="nav-link" href="/">SEARCH FOR ROOM</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="/posts/create">OFFER A ROOM</a>
						</li>
					</ul>
				</div>
			</div>

			<!--form start-->
			<div class="row w-50 mx-auto">
				<form action="{{action('PostsController@store')}}" method="POST" class="ml-5" enctype="multipart/form-data">
					@csrf
					<label class="mb-0 mt-4">Place an ad</label><hr>
					
					<div class="row form-group">
						<div class="col-lg-5">
							<label class="ml-4 mr-5" for="roomno">I have </label>
						</div>
						<div class="col-lg-7">
							<label class="mr-4">
								<select id="roonno"  class="form-control" name="no_of_rooms" autofocus required>
									<option value="1">1 room for rent</option>
									<option value="2">2 room for rent</option>
									<option value="3">3 room for rent</option>
									<option value="4">4 room for rent</option>
									<option value="5">5 room for rent</option>
								</select>
							</label>
						</div>
					</div>
					
					<div class="row form-group">
						<div class="col-lg-5">
							<label class="ml-4 mr-5" for="location">Location </label>
						</div>
						<div class="col-lg-7">
							<label class="mr-4">
								<input type="text" id="location" class="form-control"  name="location" autofocus required>
							</label>
						</div>
					</div>
					
					<div class="row form-group">
						<div class="col-lg-5">
							<label class="ml-4 mr-5" for="price">Facilities </label>
						</div>
						<div class="col-lg-7" >
							<label class="mr-4">
								<input type="checkbox" name="facilities" value="Parking" >Parking
							</label>
							<label class="mr-4">
								<input type="checkbox" name="facilities" value="Internet/Wifi">Internet/Wifi
							</label>
							<label class="mr-4">
								<input type="checkbox" name="facilities" value="Balcony">Balcony
							</label>
						</div>
					</div>
					
					<div class="row form-group">
						<div class="col-lg-5">
							<label class="ml-4 mr-5" for="cost">Cost of Room </label>
						</div>
						<div class="col-lg-7">
							<label class="mr-4">
								<input type="number" id="cost" class="form-control" name="cost" autofocus required> &nbsp;/ month
							</label>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-lg-5">
							<label class="ml-4 mr-5" for="cover_img">Upload Photo</label>
						</div>
						<div class="col-lg-7">
							<label class="mr-4">
								<input type="file" id="cover_img" name="cover_img" accept="image/*">
							</label>
						</div>
					</div>
					
					<div class="form-group mx-auto">
						<button class="btn btn-info d-flex mx-auto mt-5 mb-5" id="searchbutton">POST AN AD</button>
					</div>

				</form>

			</div>

		</div>

    @endsection