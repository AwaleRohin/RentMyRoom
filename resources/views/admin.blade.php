@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card  mx-auto">
                <div class="card-header text-center">Admin Dashboard</div>

                        <table class="table table-default">
                                <tr>
                                    <td><a href="/posts"><span class="fa fa-list-alt"></span>&nbsp;&nbsp;Posts</a></td>
                                    <td>{{count($posts)}}</td>
                                </tr>
                                <tr>
                                    <td><a href="/users"><span class="fa fa-users"></span>&nbsp;&nbsp;Users</a></td>
                                    <td>{{count($users)}}</td>
                                </tr>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        $('#footer1').addClass('fixed-bottom')
    </script>
@endsection