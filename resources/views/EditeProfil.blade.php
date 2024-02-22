@extends('app2')

@section('EditeProfil')
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="{{ $user->profile_image ? asset($user->profile_image) : 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg' }}">
                <span class="font-weight-bold">{{ $user->firstName }}.{{ $user->lastName }}</span>
                <span class="text-black-50">{{ $user->email }}</span>
                <span> </span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">First name</label>
                            <input type="text" class="form-control" name="firstName" placeholder="first name" value="{{ $user->firstName }}">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Last name</label>
                            <input type="text" class="form-control" name="lastName" value="{{ $user->lastName }}" placeholder="Last name">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="enter email" value="{{ $user->email }}">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">New Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter new password">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Confirm New Password</label>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm new password">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Profile Image</label>
                            <input type="file" class="form-control" name="image">
                            @if($user->image)
                            <div>
                                <img src="{{ asset($user->image) }}" alt="Image" >
                            </div>
                        @endif
                        </div>
                        <div class="mt-5 text-center">
                            <button type="submit" class="btn btn-primary profile-button">Save Profile</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
