<div class="tns z-index-1 w-100 position-relative pt-9 pb-9" style="direction: ltr">
    <div
        data-tns="true"
        data-tns-loop="true"
        data-tns-swipe-angle="false"
        data-tns-speed="2000"
        data-tns-autoplay="true"
        data-tns-autoplay-timeout="5000"
        data-tns-items="1"
        data-tns-center="true"
        data-tns-slide-by="true"
        data-tns-nav-container="#slider_nav"
        data-tns-nav-as-thumbnails="true"
        data-tns-prev-button="#slider_prev"
        data-tns-next-button="#slider_next"
    >
        @foreach($blogs as $blog)
            <div class="bgi-no-repeat bgi-position-center bgi-size-cover h-550px rounded-2" style="background-image: url('{{ $blog->image_full }}')">
                <div class="d-flex flex-column justify-content-center text-white w-25 h-100 mx-20">
                    <div class="symbol symbol-70px">
                        <img src="{{ $blog->cercles[0]->image }}" alt="">
                    </div>
                    <span class="fs-3x text-bold">{{ $blog->cercles[0]->name }}</span>
                    <span class="fs-5x text-bolder">{{ $blog->title }}</span>
                    <a href="{{ $blog->url_to_blog_article }}" class="btn btn-circle btn-lg btn-outline btn-outline-secondary">
                        Plus...
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <button class="btn btn-icon btn-active-color-primary position-absolute top-50 start-0 mx-5" id="slider_prev">
        <i class="fa-solid fa-angle-left fs-3x"></i>
    </button>

    <button class="btn btn-icon btn-active-color-primary position-absolute top-50 end-0 mx-5" id="slider_next">
        <i class="fa-solid fa-angle-right fs-3x"></i>
    </button>

    <div class="d-flex flex-center position-absolute bottom-0 end-0 m-5">
        <ul class="d-flex align-items-center list-unstyled gap-5 cursor-pointer">
            <li class="d-flex gap-3" id="slider_nav">
                @foreach($blogs as $blog)
                    <img src="{{ $blog->image_full }}" class="w-125px rounded" alt=""/>
                @endforeach
            </li>
        </ul>
    </div>
</div>
