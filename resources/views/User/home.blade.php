@extends('User.layouts.app')

@section('title','Home')


@push('css')

@endpush


@section('content')
  <div class="card">
    <div class="card-header">Client Form</div>
    <div class="card-body">
      <form action="{{ url('/') }}/" method="post">
        @csrf
        <div class="form-group">
          <label for="full_name">Full Name</label>
          <input type="text" class="form-control" id="full_name" name="full_name" value="{{ old('full_name') }}" placeholder="Enter First Name">
        </div>
        <div class="form-group">
          <label for="mobile_no">Mobile Number</label>
          <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="{{ old('mobile_no') }}" placeholder="Enter First Name">
          <small id="mobileHelp" class="form-text text-muted">We'll never share your mobile no with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="last_education">Last Education</label>
          <input type="text" class="form-control" id="last_education" name="last_education" value="{{ old('last_education') }}" placeholder="Enter Last Education">
        </div>
        <div class="form-group">
          <label for="last_education_result">Last Education Result</label>
          <input type="text" class="form-control" id="last_education_result" name="last_education_result" value="{{ old('last_education_result') }}" placeholder="Enter Last Education Result">
        </div>
        <div class="form-group">
          <label for="passing_year">Passing Year</label>
          <input type="number" class="form-control" id="passing_year" name="passing_year" value="{{ old('passing_year') }}" placeholder="Enter Passing Year">
        </div>
        <div class="form-group">
          <label for="ielts_score">IELTS Score</label>
          <input type="text" class="form-control" id="ielts_score" name="ielts_score" value="{{ old('ielts_score') }}" placeholder="Enter IELTS Score">
        </div>
        <div class="form-group">
          <label for="interested_in">Interested In</label>
          <input type="text" class="form-control" id="interested_in" name="interested_in" value="{{ old('interested_in') }}" placeholder="Program, Country">
        </div>
        <div class="form-group">
          <label for="remarks">Remarks</label>
          <textarea class="form-control" name="remarks" id="remarks">{{ old('last_education') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <div class="card-footer">SCCRM</div>
  </div>

@stop


@push('scripts')

@endpush
