@extends('templates.main')
@section('content')
    <div class="container p-5 m-5 w-50 mx-auto edit-wrapper" style="margin-left: 300px !important;">

        <h3 class="edit mb-5">
            Edit Profile
            {{-- @dd($profile) --}}
        </h3>
        <form method="POST" action="{{ route('profile.update', $profile->id) }}">
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
                    <input type="text" class="form-control" name="website" placeholder="Website"
                        value="{{ $profile->website }}">
                </div>
            </div>

            <div class="row my-2">
                <div class="col-md-3">
                    <div class="d-flex justify-content-start align-items-center">Bio</div>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="bio" placeholder="Write Bio"
                        value="{{ $profile->bio }}">
                </div>
            </div>

            <div class="row my-2">
                <div class="col-md-3">
                    <div class="d-flex justify-content-start align-items-center">Gender</div>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="gender" placeholder="Gender"
                        value="{{ $profile->gender }}">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-3">
                    <div class="d-flex justify-content-start align-items-center">Country</div>
                </div>
                <div class="col-md-9">
                    <select name="country_id" id="country_id" class="form-control text-black">
                        <option class="text-dark" value="">Select Country</option>
                        @foreach ($countries as $country)
                            <option class="text-dark" value="{{ $country['id'] }}"
                                {{ $profile->country_id == $country['id'] ? 'selected' : '' }}>{{ $country['name'] }}
                            </option>
                        @endforeach

                    </select>
                </div>
            </div>

            <div class="row my-2 ">
                <div class="col-md-3">
                    <div class="d-flex justify-content-start align-items-center">State</div>
                </div>
                <div class="col-md-9 text-dark">
                    <select name="state_id" id="state_id" class="form-control text-dark">
                        <option class="text-dark" value="">Select State</option>

                    </select>
                </div>
            </div>
            <button class="btn btn-info" type="submit">Save</button>

        </form>
        {{-- <script>
            var countries=@json($countries);
            $(document).ready(()=>{
                $('#country_id').on('click',(e)=>{
                    console.log(e);

                })
            });
        </script> --}}
        <script>
            var countries = @json($countries);


            var country_id = "{{ $profile->country_id }}";
            if (country_id != '') {
                var state_id = "{{ $profile->state_id }}";
                // console.log(state_id);
                var selectedCountry = countries.filter(function(country) {
                     return country.id == country_id;
                })
                var states = selectedCountry[0]['states'];
                //console.log(states);
                var htmlStr = `<option class="text-dark" value=''>Select State</option>`;
                states.forEach(function(state) {
                    htmlStr += `<option class="text-dark" value="${state.id}">${state.id} : ${state.name}</option>`
                })
                // console.log(htmlStr);
                document.getElementById('state_id').innerHTML = htmlStr;
                document.getElementById('state_id').value = state_id;
            }
            // console.log(state_id);
            document.getElementById('country_id').addEventListener('change', function(e) {
                //console.log(e.target.selectedvalue);
                var value = e.target.value;
                var selectedCountry = countries.filter(function(country) {
                    return country.id == value;
                })
                var states = selectedCountry[0]['states'];
                //console.log(states);
                var htmlStr = `<option class="text-dark" value=''>Select State</option>`;
                states.forEach(function(state) {
                    htmlStr +=
                        `<option class="text-dark" value="${state.id}">${state.id} : ${state.name}</option>`
                })
                // console.log(htmlStr);
                document.getElementById('state_id').innerHTML = htmlStr;
            })
        </script>

    </div>
@endsection
