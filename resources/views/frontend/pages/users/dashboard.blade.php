@extends('frontend.pages.users.master')

@section('sub-content')
  <div class='container'>
    <h2>Welcome {{ $user->first_name . ' '. $user->last_name }}</h2>
    <p>You can change your profile and every informations here..</p>
    <hr>

    <div class="row">
      <div class="col-md-4">
        <div class="card card-body mt-2 pointer" onclick="location.href='{{ route('user.profile') }}'">
          <h3>Update Profile</h3>
        </div>
      </div>
    </div>
  </div>
@endsection
