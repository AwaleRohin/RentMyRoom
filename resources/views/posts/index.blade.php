@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4 mb-4">
        <div class="row d-flex flex-wrap ml-5">
            @if(count($posts)>0)
                @foreach($posts as $post)
                    <div class="card m-4 p-3" style="width:340px;">
                        <img src="/storage/cover_img/{{$post->cover_img}}" class="img-responsive" alt="Responsive image" width="300" height="275">
                        <div class="card-body">
                            <h5>Posted on : {{$post->created_at->toDateString()}}</h5>
                            <h6>Rent : {{$post->price}}<span class="float-right" >No. of Rooms : {{$post->no_of_rooms}}</span></h6>
                            <h6>Location : {{$post->location}}</h6>
                            <br/>
                            <a href="/posts/{{$post->id}}" class="btn btn-primary">Go To Post</a>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No Post Found</p>
                @section('scripts')
                    <script>
                        $('#footer1').addClass('fixed-bottom')
                    </script>
                @endsection
            @endif
        </div>
    </div>
    <div class="container w-50">
        <ul class="pagination justify-content-center" role="navigation">
            {{$posts->links()}}
        </ul>  
    </div>
@endsection