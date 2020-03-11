@extends('Admin.layouts.app')

@section('page_title', 'Dashboard')
@section('page_tagline', 'Admin Dashboard')

@push('css')
  <style>
    .panel-heading{
      cursor: pointer;
    }
    .tiles .tile {
      width: 130px !important;
      margin: 10px;
    }
  </style>
@endpush

@section('content')

@endsection

@push('scripts')
  <script>
    $('#dashboard-mm').addClass('active');
  </script>
@endpush
