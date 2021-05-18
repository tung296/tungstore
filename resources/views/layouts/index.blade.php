@extends('layouts.sources')
@section('body')
<div id="loading">
    <div id="loading-center">
    </div>
 </div>
 <div class="wrapper">
    <!-- Sidebar  -->
    @include('layouts.sidebar')
    <!-- TOP Nav Bar -->
    @include('layouts.header')
    <!-- TOP Nav Bar END -->
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
       <div class="container-fluid">
           @yield('content')
       </div>
    </div>
 </div>
 <!-- Wrapper END -->
 <!-- Footer -->
 @include('layouts.footer')
 @endsection