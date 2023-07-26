
<div class=" container">

    <section class="sidenav">
        <div class=" sidenav border-end ms-1">

            <img src="/images/catchlogo2.png" width="200" height="90" class="insta-txt ms-1" alt="">

            <a href="{{ route('home') }}" class="d-flex">
                <iconify-icon icon="ic:outline-home" class="iconify" style="font-size: 30px;">
                </iconify-icon>
                <div class="side-text mt-1"> Home</div>
            </a>
            <a href="#about" class="d-flex">
                <iconify-icon icon="material-symbols:search" class="iconify"
                    style="color: white;font-size: 30px;">
                </iconify-icon>
                <div class="side-text mt-1">Search</div>
            </a>
            <a href="#about" class="d-flex">
                <iconify-icon icon="material-symbols:explore-outline" style="color: white;font-size:30px;"
                    class="iconify">
                </iconify-icon>
                <div class="side-text mt-1 pb-1"> Explore</div>
            </a>
            <a href="#about" class="d-flex">
                <img src="/images/reel.png" width="21px;" height="21px;" alt="" class="ms-1">
                <div class="side-text pb-1" style="margin-left: 17px !important;"> Reels</div>
            </a>
            <a href="#about" class="d-flex">
                <iconify-icon icon="tabler:send" class="iconify " style="font-size: 30px;">
                </iconify-icon>
                <div class="side-text pb-1"> Messages</div>
            </a>
            <a href="#about" class="d-flex">
                <iconify-icon
                    icon="streamline:interface-favorite-heart-reward-social-rating-media-heart-it-like-favorite-love"
                    class="iconify" style="font-size: 30px;">
                </iconify-icon>
                <div class="side-text">Notifications</div>
            </a>
            <a href="{{ route('create') }}" class="d-flex">
                <iconify-icon icon="mdi:plus-box-outline" class="iconify " style="font-size: 30px;">
                </iconify-icon>
                <div class="side-text mt-1">Create</div>
            </a>
            <a href="{{ route('profile') }}" class="d-flex ">
                <img src="/images/ins-profile.jpg" alt="" width="35px" height="35px"
                    class=" mb-2 border border-2" style="border-radius: 40px;">
                <div class=" side-text fw-bold ms-2 mt-1">
                    Profile
                </div>
            </a>
            <a class="d-flex">
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
            </a>

        </div>
    </section>

</div>
