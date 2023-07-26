@extends('templates.main')
@section('content')
    <div class="container p-5 m-5 w-50 mx-auto edit-wrapper" style="margin-left: 300px !important;">

        <h3 class="edit mb-5">
            Edit Profile
            {{-- @dd($profile) --}}
        </h3>
        <form method="POST" action="{{ route('profile.update',$profile->id) }}"  >
            @csrf

            <div class="row my-2">
                <div class="col-md-3">
                    <img src="/images/ins-profile.jpg" width="50px" height="50px"
                        class="rounded-circle d-flex justify-content-end align-items-center" alt="">
                </div>
                <div class="col-md-9">
                    <div class="text-white">snehaghoshal_art</div>
                    <div class="text-info" name="edit_profile_image">Change profile photo</div>
                </div>
            </div>

            <div class="row my-2">
                <div class="col-md-3">
                    <div class="d-flex justify-content-start align-items-center"> Website</div>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="website" placeholder="Website" value="{{ $profile->website }}">
                </div>
            </div>

            <div class="row my-2">
                <div class="col-md-3">
                    <div class="d-flex justify-content-start align-items-center">Bio</div>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="bio" placeholder="Write Bio" value="{{ $profile->bio }}">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-3">
                    <div class="d-flex justify-content-start align-items-center">Gender</div>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="gender" placeholder="Gender" value="{{ $profile->gender }}">
                </div>
            </div>
            <button class="btn btn-info" type="submit">Save</button>

        </form>


    </div>
@endsection
