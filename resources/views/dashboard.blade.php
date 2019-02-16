@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(count($posts)>0)
                        <table class="table table-default">
                            <tr>
                                <th></th>
                                <th class="text-center">Posted on</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td><img src="/storage/cover_img/{{$post->cover_img}}" class="img-responsive" alt="Responsive image"  height="100" width="150"></td>
                                    <td class="font-weight-bold text-center">{{$post->created_at->toDateString()}}</td>
                                    <td><a href="/posts/{{$post->id}}" class="btn btn-info">View</a></td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a></td>
                                    <td>
                                        <form action="{{action('PostsController@destroy',$post->id)}}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="submit" class="btn btn-danger" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
    @if(count($posts)<=2)
        @section('scripts')
            <script>
                $('#footer1').addClass('fixed-bottom')
            </script>
        @endsection
    @endif
@endsection