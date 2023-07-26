@extends('templates.main')

@section('content')
    <style scoped>
        .story-border {
            background-color: brown;
            border: 4px solid rgb(0, 0, 0);
            outline: 1px solid #000000;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .outer-box {
            width: 85px;
            height: 82px;

            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to right, rgb(255, 255, 62), red, purple);

            padding: 3px;
        }

        .stories-ins {
            overflow: scroll;
            gap: 15px;


        }

        .new-post {
            border-radius: 5px;
            border: 1px solid gray;
        }

        .image_post {
            width: 100%;
            height: 470px;
            ;
        }

        .textdesbox {}

        .icon {
            color: #ffffff;
        }

        .icon_react {
            background: url('https://api.iconify.design/ph/heart-fill.svg?color=red&width=30&height=30&flip=horizontal') no-repeat center center / contain;
            content: url('https://api.iconify.design/ph/heart-fill.svg?color=red&width=30&height=30&flip=horizontal');
        }

        .post_title {
            font-size: 15px;
            color: #d4d4d492;
            margin-top: -18px;
            margin-left: 62px !important;

        }

        hr {
            display: block;
            height: 1px;
            border: 0;
            border-top: 1px solid #ccc;
            margin: 10px;
            padding-right: 10px;
        }

        .cn-user {
            font-size: 14px;
            font-weight: 600;

        }

        .cn-label {
            font-size: 13px;
        }
    </style>
    <div class="d-flex">
        <div class=" col-md-6 p-5 container mx-auto" style="margin-left: 300px !important; margin-right:0 !important;">
            <section class="stories">
                <div class="stories-ins  d-flex ">
                    <div class="outer-box rounded-circle  ">
                        <img src="/images/high-6.jpg" alt="" height="75" width="75"
                            class="rounded-circle story-border " class="" style="">
                    </div>
                    <div class="outer-box rounded-circle">
                        <img src="/images/high-6.jpg" alt="" height="75" width="75"
                            class="rounded-circle story-border " class="" style="">
                    </div>
                    <div class="outer-box rounded-circle">
                        <img src="/images/high-6.jpg" alt="" height="75" width="75"
                            class="rounded-circle story-border " class="" style="">
                    </div>
                    <div class="outer-box rounded-circle">
                        <img src="/images/high-6.jpg" alt="" height="75" width="75"
                            class="rounded-circle story-border " class="" style="">
                    </div>
                    <div class="outer-box rounded-circle">
                        <img src="/images/high-6.jpg" alt="" height="75" width="75"
                            class="rounded-circle story-border " class="" style="">
                    </div>
                    <div class="outer-box rounded-circle">
                        <img src="/images/high-6.jpg" alt="" height="75" width="75"
                            class="rounded-circle story-border " class="" style="">
                    </div>
                    <div class="outer-box rounded-circle">
                        <img src="/images/high-6.jpg" alt="" height="75" width="75"
                            class="rounded-circle story-border " class="" style="">
                    </div>
                    <div class="outer-box rounded-circle">
                        <img src="/images/high-6.jpg" alt="" height="75" width="75"
                            class="rounded-circle story-border " class="" style="">
                    </div>
                    <div class="outer-box rounded-circle">
                        <img src="/images/high-6.jpg" alt="" height="75" width="75"
                            class="rounded-circle story-border " class="" style="">
                    </div>
                    <div class="outer-box rounded-circle">
                        <img src="/images/high-6.jpg" alt="" height="75" width="75"
                            class="rounded-circle story-border " class="" style="">
                    </div>
                    <div class="outer-box rounded-circle">
                        <img src="/images/high-6.jpg" alt="" height="75" width="75"
                            class="rounded-circle story-border " class="" style="">
                    </div>
                    <div class="outer-box rounded-circle">
                        <img src="/images/high-6.jpg" alt="" height="75" width="75"
                            class="rounded-circle story-border " class="" style="">
                    </div>
                </div>
            </section>
            <section class="post">
                @foreach ($posts as $key => $post)
                    <div class="new-post m-5 ">
                        <div class="header">
                            <div class="d-flex">
                                <div class="d-flex w-75">
                                    <img src="/images/high-6.jpg" alt="" height="45" width="45"
                                        class="rounded-circle story-border mt-2 ms-2 me-2" class="">
                                    <div class="text-white d-flex justify-content-center align-items-center">
                                        {{ $post->user->name }}
                                    </div><br>
                                </div>
                                <div class="d-flex justify-content-end align-item-center w-100 pe-4 pt-3">
                                    <iconify-icon icon="bi:three-dots" style="color: white;" width="30"
                                        height="30"></iconify-icon>
                                </div>
                            </div>



                            <div class=" post_title ms-5 mb-3">{{ $post->post_title }}</div>

                        </div>

                        <div class="post_image">
                            <img src="{{ asset('upload/post_image/' . $post->post_image) }}"class="image_post"
                                alt="">
                        </div>
                        <div class="textdesbox border p-3 border-1 border-gray bg-light ">
                            <div class="text-dark text-center ">
                                {{ $post->post_description }}
                            </div>
                        </div>
                        <div class="footer">
                            <div class="d-flex">
                                <div class="  p-3 d-flex">
                                    <iconify-icon icon="ph:heart-bold" class="react icon me-3" width="30"
                                        height="30" id="loveIcon"></iconify-icon>
                                    <iconify-icon icon="tabler:message-circle-2" style="color: white;" class="me-4"
                                        width="30" height="30" flip="horizontal"></iconify-icon>

                                    <iconify-icon icon="tabler:send" style="color: white;" width="30"
                                        height="30"></iconify-icon>
                                </div>
                                <div class="d-flex justify-content-end align-items-center w-100 pe-4">
                                    <iconify-icon icon="akar-icons:ribbon" style="color: white;" width="30"
                                        height="30"></iconify-icon>

                                </div>
                            </div>
                            <hr>

                            <div class=" text-white ps-3 pb-5">{{ $post->user->name }}</div>
                        </div>
                    </div>
                @endforeach
            </section>


        </div>
        <section class="contact text-white pt-5 mt-1 ms-5">
            <div>
                <div class="d-flex mb-3">
                    <img src="/images/ins-profile.jpg" alt="" width="50" height="50"
                        class="rounded-circle me-3">
                    <div class="me-5">
                        <div class="cn-user">Snehaghoshal_art</div>
                        <div class="cn-label">Sneha Ghoshal</div>
                    </div>
                    <div class="text-primary">
                        Switch
                    </div>
                </div>
                <div class="row">
                    <div class="cn-label col-md-8">Suggested For You</div>
                    <div class="col-md-4 d-flex justify-content-end   cn-user">See All</div>
                </div>
                <div class="row mt-3">
                    <div class=" col-md-2 d-flex justify-content-center align-items-center"> <img src="/images/ins-profile.jpg" alt="" width="40"
                            height="40" class="rounded-circle me-3">
                    </div>
                    <div class="col-md-6  align-items-center">
                        <div class="cn-user">Snehaghoshal_art</div>
                        <div class="cn-label">followed by you</div>

                    </div>

                    <div class="col-md-4 d-flex justify-content-end align-items-center   cn-user">See All</div>
                </div>

            </div>
        </section>

    </div>
    <script src="{{ asset('js/react.js') }}"></script>


    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
@endsection
