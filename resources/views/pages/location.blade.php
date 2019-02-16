@extends('layouts.app')
@section('content')
    <div class="mapouter container mx-auto mt-5 mb-5">
        <div class="gmap_canvas">
            <iframe width="1100" height="546" id="gmap_canvas" src="https://maps.google.com/maps?q=27.673702%2C%2085.326753&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
        <style>
        .mapouter{
            text-align:right;
            height:546px;
            width:1100px;
        }
        .gmap_canvas{
            overflow:hidden;
            background:none!important;
            height:546px;
            width:1100px;
        }
        </style>
    </div>
@endSection