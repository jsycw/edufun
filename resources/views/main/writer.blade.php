@extends('layouts.master')
@section('content')
    <div class="container-fluid p-5 d-flex flex-column align-items-center" style="background-color: #dde6d5a5">
        <h3>Our Writer</h3>
        @include('components.writerCard')
    </div>
@endsection