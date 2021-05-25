@extends('layouts.layout')
@section('content')

    <!-- Categories Section Begin -->
    @include('layouts.dmsanpham');
    <!-- End Categories Section Begin -->

    <!-- Featured Section Begin -->
    @include('sanpham');
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    @include('layouts.banner');
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    @include('sptodm');
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    @include('tintuc');
    <!-- Blog Section End -->
    
@endsection