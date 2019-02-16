@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card  mx-auto">
                <div class="card-header text-center "><h5>Total Users</h5></div>
                        <table class="table table-default">
                            <tr class="text-center">
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                            @foreach($users as $user)    
                                <tr class="text-center">
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                </tr>
                            @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
    @if(count($users)<=7)
    @section('scripts')
        <script>
            $('#footer1').addClass('fixed-bottom')
        </script>
    @endsection
    @endif
@endsection