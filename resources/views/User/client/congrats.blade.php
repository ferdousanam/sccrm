@extends('User.layouts.app')

@section('title','Home')


@push('css')

@endpush


@section('content')
  <div class="card">
    <div class="card-header bg-success">Success Message</div>
    <div class="card-body">
      <div>
        <h1>Congratulations! Your information has been submitted.</h1>
        <h2>Your Student Code is: {{ $code }}</h2>
      </div>
    </div>
    <div class="card-footer">SCCRM</div>
  </div>

@stop


@push('scripts')

@endpush
