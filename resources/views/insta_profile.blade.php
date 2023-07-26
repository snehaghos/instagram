@extends('templates.main')
@section('content')

            <div class="col-sm-8 col-md-10 p-5 container mx-auto" style="margin-left: 300px !important;">
                <section>
                    <div class="container-fluid p-5 w-100 ">
                        <div class="row ">
                            <div class="col-md-4 ">
                                <img src="/images/ins-profile.jpg" width="170px" height="170px"
                                    class="rounded-circle mt-5 ms-5" alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="d-flex text-white">
                                    <div class=" me-5 fs-4">
                                        snehaghoshal_art
                                    </div>
                                    <div class=" me-3">
                                        <a href="{{ route('profile.edit',auth()->user()->id) }}">
                                            <button class="btn btn-light ">Edit Profile</button>
                                        </a>
                                    </div>
                                    <div class="me-3 " style="margin: 0 !important;">
                                        <button class="btn btn-light">Ad tools</button>
                                    </div>
                                    <div class="ms-2">
                                        <iconify-icon icon="ep:setting" style="color: white;font-size:36px; ">
                                        </iconify-icon>
                                    </div>

                                </div>
                                <div class="d-flex text-white mt-3">
                                    <div class=" me-5">
                                        29 posts
                                    </div>
                                    <div class=" me-5 ">
                                        614 followers
                                    </div>
                                    <div class=" me-5 ">
                                        115 following
                                    </div>
                                </div>
                                <div class="text-white mt-2 ">
                                    Sneha Ghoshal
                                </div>
                                <div style="color: #ffffff6c;">
                                    Artist
                                </div>

                                <div class="text-white">
                                    Simplicity is the key to happiness✨<br>
                                    🎨👩‍🎨<br>
                                    🖤🌼.... <br>
                                    25th Dec _ my day🌚❤️🎂

                                </div>
                            </div>
                        </div>

                    </div>
                    <section class="highlights">
                        <div class="highlight d-flex mt-3 text-white"
                            style="gap: 40px;overflow:scroll;overflow-y:hidden;font-size:14px;">
                            <div>
                                <img src="/images/high-1.jpg" width="85px" height="85px"
                                    class="rounded-circle border border-2">
                                <div class="text-center mt-3">
                                    🌸
                                </div>
                            </div>
                            <div>
                                <img src="/images/high-2.jpg" width="85px" height="85px"
                                    class="rounded-circle  border border-2" alt="">
                                <div class="text-center mt-3">
                                    🌻
                                </div>
                            </div>
                            <div>
                                <img src="/images/high-3.jpg" width="85px" height="85px"
                                    class="rounded-circle border border-2" alt="">
                                <div class="text-center mt-3">
                                    💙💚💛❤️
                                </div>
                            </div>
                            <div>
                                <img src="/images/high-4.jpg" width="85px" height="85px"
                                    class="rounded-circle  border border-2" alt="">
                                <div class="text-center mt-3">
                                    sketches🖤
                                </div>
                            </div>
                            <div>
                                <img src="/images/high-5.jpg" width="85px" height="85px"
                                    class="rounded-circle  border border-2" alt="">
                                <div class="text-center mt-3">
                                    🤯🤩🤩
                                </div>
                            </div>
                            <div>
                                <img src="/images/high-6.jpg" width="85px" height="85px"
                                    class="rounded-circle border border-2" alt="">
                                <div class="text-center mt-3">
                                    মা 🌼
                                </div>
                            </div>
                            <div>
                                <img src="/images/hogh-7.jpg" width="85px" height="85px"
                                    class="rounded-circle  border border-2" alt="">
                                <div class="text-center mt-3">
                                    🌟
                                </div>
                            </div>
                            <div>
                                <img src="/images/high-8.jpg" width="85px" height="85px"
                                    class="rounded-circle  border border-2" alt="">
                                <div class="text-center mt-3">
                                    Sis👭💖
                                </div>
                            </div>
                            <div>
                                <img src="/images/high-9.jpg" width="85px" height="85px"
                                    class="rounded-circle  border border-2" alt="">
                                <div class="text-center mt-3">
                                    Weather🌧️
                                </div>
                            </div>
                            <div>
                                <img src="/images/high-10.jpg" width="85px" height="85px"
                                    class="rounded-circle border border-2" alt="">
                                <div class="text-center mt-3">
                                    My paintings
                                </div>
                            </div>
                        </div>
                    </section>
                    <hr class="mt-5 text-white">
                    <div class="container ">
                        <div class="d-flex justify-content-center mx-auto flex-row mb-3 mt-3" style="cursor: pointer;">
                            <div>
                                <div class="d-flex ms-2">
                                    <iconify-icon icon="bx:grid" style="color:rgba(171, 166, 166, 0.695) ; "
                                        class="d-flex justify-content-center align-center me-2"></iconify-icon>
                                    <div class="icon-txt me-5">POSTS</div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex ms-2 me-2">
                                    <img src="/images/reel2.png" width="15" height="15" alt=""
                                        class=" me-2" style="color:rgba(171, 166, 166, 0.695);  ">
                                    <div class="icon-txt me-5">REELS</div>
                                </div>

                            </div>
                            <div>
                                <div class="d-flex ms-2 me-2">
                                    <iconify-icon icon="akar-icons:ribbon" style="color:rgba(171, 166, 166, 0.695);  "
                                        class=" me-2"></iconify-icon>
                                    <div class="icon-txt me-5 "> SAVED</div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex ms-2 me-2">
                                    <iconify-icon icon="icon-park-outline:people-bottom-card"
                                        style="color:rgba(171, 166, 166, 0.695) ;" class=" me-2"></iconify-icon>
                                    <div class="icon-txt" class=" me-2">TAGGED</div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <section class="container-fluid content-images">

                        <div class=" text-center">
                            <div class="row">
                                <div class="col">
                                    <img src="/images/ins-pic1.jpeg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <img src="/images/ins-pic2.jpeg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <img src="/images/ins-pic3.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <img src="/images/ins-pic4.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <img src="/images/ins-pic5.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <img src="/images/ins-pic6.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <img src="/images/ins-pic7.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <img src="/images/ins-pic8.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <img src="/images/ins-pic10.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <img src="/images/ins-pic11.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <img src="/images/ins-pic12.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <img src="/images/ins-pic13.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <img src="/images/ins-pic-14.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <img src="/images/ins-pic15.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <img src="/images/ins-pic16.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <img src="/images/ins-pic17.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <img src="/images/ins-pic18.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <img src="/images/ins-pic19.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <img src="/images/ins-pic20.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <img src="/images/ins-pic21.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <img src="/images/ins-pic22.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <img src="/images/ins-pic23.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <img src="/images/ins-pic24.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <img src="/images/ins-pic25.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <img src="/images/ins-pic26.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <img src="/images/ins-pic27.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <img src="/images/ins-pic29.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <img src="/images/ins-pic-30.jpg" width="400" style="height: 350px !important;"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <img src="/images/ins-pic31.jpg" style="height: 350px !important;" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="col">
                                    <div style="height: 350px !important;opacity:0 !important;">hh</div>
                                </div>


                            </div>

                        </div>
                    </section>
                    @include('templates.footer')
                </section>

            </div>



@endsection
