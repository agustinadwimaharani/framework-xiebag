@extends('layouts.global')
@section('title')
Dashboard - Admin
@endsection

@section('content')
@include('components.navbar_admin')
@include('components.about')
@include('components.produk')
@include('components.produk2')
@include('components.produk3')
{{-- @include('admin.data_product') --}}
@include('components.voucher')
@include('components.footer')

