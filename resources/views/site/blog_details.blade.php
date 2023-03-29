@include ('layouts.header')



    {{-- side banner --}}



    <!-- Add Start -->
   
  

    <!-- Blog Details Start -->
    <section class='hero_sec_fp'>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class='hero_ban_main'>
                <img src="{{asset('assets')}}/images/ad_big.png" alt="img" class='fp_img'>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="sec_b_det">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class='bl_det_main'>
                        <div class='bl_card_meta'>
                          <div class='bl_card_cate'>
                            <p class='m-0'>{{ $blog->author }}</p>
                          </div>
                          <div class='bl_card_meta bl_de_sh_ma'>
                            <div class='bl_card_cate'>
                              <p class='m-0'>{{ Carbon\Carbon::create($blog->publish_date)->format('j M, Y') }}</p>
                            </div>
                            <div class='bl_share'>
                                <div class='bl_s_op'>
                                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href=""><i class="fa-brands fa-pinterest"></i></a>
                                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                                </div>
                                <i class="fa-regular fa-share-from-square sh_ic"></i>
                            </div>
                          </div>
                        </div>          
                        <h1 class='bl_det_ti sec_head'>{{$blog->title}}</h1>
                        <p>{!! $blog->short_description !!}</p>
                        <div>
                          <img src='{{ asset('images/' . json_decode($blog->image)[0]) }}' alt="img" class='bl_de_main_img'>
                        </div>
                        <div class='bl_de_con_ma'>                          
                          <div class='bl_de_con'>
                            {!! $blog->description !!}
                            {{-- ⏭⏭ next and prev area  ⏮⏮--}}
                            <div class="bl_ne_pre">
                              <div class='de_br_ca_bo'>
                                @if(!empty($previous))
                                  <a class="bl_pre de_br_bo_btn" href="{{ URL::to ('blog/'.$previous)}}" role="button">Prevt <span class='c_lp'><i class="fa-regular fa-circle-left"></i></span></a>
                                @endif
                                @if(!empty($next))
                                  <a class="bl_ne de_br_bo_btn" href="{{ URL::to ('blog/'.$next)}}" role="button">Next <span class='c_lp'><i class="fa-regular fa-circle-right"></i></span></a>
                               @endif
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class='bl_det_side'>
                        <div class='bl_det_si_sc'>
                          <h3>Get news on social media!</h3>
                          <p>Read our latest news on any of these social networks!</p>
                          <div class='top_bar_ics'>
                              <div class="fb">
                                <a href="" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                              </div>
                              <div class="ig">
                                <a href="" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                              </div>
                              <div class="li">
                                <a href="" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                              </div>
                              <div class="pt">
                                <a href="" target="_blank"><i class="fa-brands fa-pinterest"></i></a>
                              </div> 
                              <div class="tw">
                                <a href="" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                              </div>                                           
                          </div>
                        </div>
                        <div>
                          <img src="{{ asset('images/' . json_decode($left_banner->image)[0]) }}" alt="img" width="100%" >
                        </div>
                        <div>
                          <img src="{{ asset('images/' . json_decode($right_banner->image)[0]) }}" alt="img" width="100%" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include ('layouts.footer')