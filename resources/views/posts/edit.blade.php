@extends('layouts.app')
	@section('content')
	
		<div class="container">
			<!--tab for search room and offer room-->
			<div class="row w-50 mx-auto">
				<div class="col-lg-12">
					<ul class="nav nav-tabs nav-justified">
						<li class="nav-item">
							<a class="nav-link active" href="/posts/create">Edit Your Advertisement</a>
						</li>
					</ul>
				</div>
			<!--form start-->
            <form action="{{action('PostsController@update',$post->id)}}" method="POST" class="ml-5" enctype="multipart/form-data">
					<label class="mb-0 mt-4">Update your ad</label><hr>
				
					<div class="row form-group">
						<div class="col-lg-5">
							<label class="ml-4 mr-5" for="roomno">I have </label>
						</div>
						<div class="col-lg-7">
							<label class="mr-4">
								<select id="roonno" name="no_of_rooms">
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
								<input type="text" id="location" name="location" value={{$post->location}}>
							</label>
						</div>
					</div>
					
					
					<div class="row form-group">
						<div class="col-lg-5">
							<label class="ml-4 mr-5" for="price">Facilities </label>
						</div>
						<div class="col-lg-7">
							<label class="mr-4">
								<input type="checkbox" name="facilities" value="Parking">Parking
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
								<input type="number" id="cost" name="cost" value={{$post->price}}> &nbsp;/ month
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
                    <input type="hidden" name="_method" value="PUT">
                    {{csrf_field()}}

				</form>

			</div>

		</div>

    @endsection