@include ('layouts.header')

<body id="page-top" data-spy="scroll" data-target=".fixed-top">
   
    @include('layouts.big-banner')


    <section class='top_fi_tra_sec'>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div class='sec_top'>
                    <h2 class='sec_head'><span class='br_sp'>Latest</span> published articles<span class='c_lp'>!</span></h2>
                    <p class='sec_desc'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo labore officiis distinctio tempore magni dolor earum architecto dolorem odio et. Repudiandae vel explicabo laboriosam, nostrum voluptatibus ipsa earum deleniti amet corrupti. Cupiditate eius sequi repellat quae quisquam, est incidunt libero fugit corporis reprehenderit ipsum animi pariatur soluta recusandae minima nulla.</p>
                </div>
            </div>
            @foreach($blogs as $blog)
            <div class="col-md-6 col-lg-4 col-xxl-3">
                <div class='bl_card'>
                    <a href="{{ URL::to ('blog/'.$blog->slug)}}">
                      <img src='{{ asset('images/' . json_decode($blog->image)[0]) }}' alt='' class='bl_card_img'>
                    </a>
                    <div class='bl_card_meta'>
                      <div class='bl_card_cate'>
                        <p class='m-0'>{{$blog->author}}</p>
                      </div>
                      <div class='bl_share'>
                        <div class='bl_s_op'>
                          <a href="/"><i class="fa-brands fa-facebook-f"></i></a>
                          <a href="/"><i class="fa-brands fa-linkedin-in"></i></a>
                          <a href="/"><i class="fa-brands fa-pinterest"></i></a>
                          <a href="/"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                          <i class="fa-regular fa-share-from-square sh_ic"></i>
                      </div>
                    </div>
                    <div>
                      <h5 class='bl_card_title'>
                        <a href="{{ URL::to ('blog/'.$blog->slug)}}">{!! Str::limit(strip_tags($blog->title),
                          40) !!}</a>
                      </h5>
                      <p class='bl_card_desc'>{!! Str::limit(strip_tags($blog->description), 60) !!}</p>
                    </div>
                    <div class='bl_card_bt_me'>
                      <div class='bl_card_date'>
                        <p class='m-0 c_lp'>{{ Carbon\Carbon::create($blog->publish_date)->format('j M, Y') }}</p>
                      </div>
                      <a href="{{ URL::to ('blog/'.$blog->slug)}}" class="bl_card_btn">Read more <span class='c_lp'>
                        <i class="fa-regular fa-circle-right"></i></span>
                      </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


    @include ('layouts.footer')

    