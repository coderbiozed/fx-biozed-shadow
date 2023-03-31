@include ('layouts.header')

<section class='hero_sec_fp'>
  {{-- add-big-bannar --}}
   @include('layouts.big-banner')
  </section>
  <section class='sec_he_me_bo'>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class='he_me_bo_inn'>
            <div class="row">
              <div class="col-lg-4">
                <div class="he_me_bo">
                  <h4><span class='hm_sp'>Exciting</span> bonuses</h4>
                  <div class='he_me_bo_con'>
                    @foreach($excitingbonuses as $bonus)
                    <div class='he_me_box'>
                      @php $broker = DB::table('broker_review')->Where('id',  $bonus->broker_id)->first() @endphp
                      <img src="{{ asset('images/' . json_decode($broker->main_image)[0]) }}" alt="img" />
                      <a href='{{ URL::to('deposit_bonuses_details/' .$bonus->id)}}'>{{$bonus->title }}</a>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="he_me_bo">
                  <h4><span class='hm_sp'>Upcoming</span> contests</h4>
                  <div class='he_me_bo_con'>
                    @foreach($upcomingcontests as $contest)
                    <div class='he_me_box'>
                      <img src="{{asset('assets')}}/icons-svg/tickmill.svg" alt="img" />
                      <a href='{{ URL::to('live_contest_details/' .$contest->id)}}'>{{$contest->title}}</a>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="he_me_bo">
                  <h4><span class='hm_sp'>Press</span> release</h4>
                  <div class='he_me_bo_con'>                  
                    @foreach ($side_blogs as $blog)
                    <div class='he_me_box'>
                      <img src="{{ asset('images/' . json_decode($blog->image)[0]) }}" alt="img" />
                      <a href='{{ URL::to ('blog/'.$blog->slug)}}'>{!! Str::limit(strip_tags($blog->title),
                        60) !!}</a>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class='c_b_hc'>
                  <h4 class='c_b_hc_ti'><span class='hm_sp'>Compare</span> brokers</h4>
                  <div class="he_bo_slider owl-theme owl-carousel">
                    <a href="/" class="item">
                      <div class='com_sli_it'>
                        <input type="hidden">
                        <div class='com_si_bro'><img src="{{asset('assets')}}/icons-svg/af_fav.png" alt="img" class='comp_img' />
                          <h4 class='m-0 c_bl'>AssetsFX</h4>
                        </div>
                        <div>
                          <h2 class="m-0 c_lp">vs</h2>
                        </div>
                        <div class='com_si_bro'><img src="{{asset('assets')}}/icons-svg/xm_fav.png" alt="img" class='comp_img' />
                          <h4 class='m-0 c_bl'>XM</h4>
                        </div>
                      </div>
                    </a>
                    <a href="/" class="item">
                      <div class='com_sli_it'>
                        <div class='com_si_bro'><img src="{{asset('assets')}}/icons-svg/fbs_fav.png" alt="img" class='comp_img' />
                          <h4 class='m-0 c_bl'>FBS</h4>
                        </div>
                        <div>
                          <h2 class="m-0 c_lp">vs</h2>
                        </div>
                        <div class='com_si_bro'><img src="{{asset('assets')}}/icons-svg/lf_fav.png" alt="img" class='comp_img' />
                          <h4 class='m-0 c_bl'>LiteFinance</h4>
                        </div>
                      </div>
                    </a>
                    <a href="/" class="item">
                      <div class='com_sli_it'>
                        <div class='com_si_bro'><img src="{{asset('assets')}}/icons-svg/rf_fav.png" alt="img" class='comp_img' />
                          <h4 class='m-0 c_bl'>RoboForex</h4>
                        </div>
                        <div>
                          <h2 class="m-0 c_lp">vs</h2>
                        </div>
                        <div class='com_si_bro'><img src="{{asset('assets')}}/icons-svg/tm_fav.png" alt="img" class='comp_img' />
                          <h4 class='m-0 c_bl'>Tickmill</h4>
                        </div>
                      </div>
                    </a>
                    <a href="/" class="item">
                      <div class='com_sli_it'>
                        <div class='com_si_bro'><img src="{{asset('assets')}}/icons-svg/ic_fav.png" alt="img" class='comp_img' />
                          <h4 class='m-0 c_bl'>IC Markets</h4>
                        </div>
                        <div>
                          <h2 class="m-0 c_lp">vs</h2>
                        </div>
                        <div class='com_si_bro'><img src="{{asset('assets')}}/icons-svg/ex_fav.png" alt="img" class='comp_img' />
                          <h4 class='m-0 c_bl'>Exness</h4>
                        </div>
                      </div>
                    </a>
                    <a href="" class="item">
                      
                      <div class='com_sli_it'>
                        
                        <div class='com_si_bro'><img src="{{asset('assets')}}/icons-svg/tw_fav.png" alt="img" class='comp_img' />
                          <input type="hidden">
                          <h4 class='m-0 c_bl'>TradersWay</h4>
                        </div>                  
                        <div>
                          <h2 class="m-0 c_lp">vs</h2>
                        </div>
                        <div class='com_si_bro'><img src="{{asset('assets')}}/icons-svg/jm_fav.png" alt="img" class='comp_img' />
                          <h4 class='m-0 c_bl'>JustMarkets</h4>
                        </div>
                      </div>
                     
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class='hp_c_fo'>
                  <form method="request" action="{{ URL::to('/compare')}}" class='com_for'  id="compareform">
                    <div class='com_ins'>
                      <select name="compareFirst">
                        <option value="Choose a broker">Choose a broker</option>
                        @foreach($compare as $key => $value1)
                        <option value="{{ $value1->id }} ?">{{ $value1->broker_name }}</option> 
                        @endforeach
                      </select>
                      <select name="compareWith">
                          <option value="Choose a broker">Choose a broker</option>
                        @foreach($compare as $key => $value2)
                           <option value="{{ $value2->id }} ?">{{ $value2->broker_name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <button href="{{ url('/compare')}}" class="comp_btn compare_btn" type="submit" >Compare<span class='c_lp'>
                      <i class="fa-regular fa-circle-right"></i>
                      </span></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- add banner Area  --}}
        <div class="col-lg-9">
          <div class='text-center'>
            <img src="{{ asset('images/' . json_decode($top_banner->image)[0]) }}" alt="img">
          </div>
        </div>
        <div class="col-lg-3" class='mb_sm_ba_col'>
          <div class='mb_sm_ban_co'>
            <img src="{{ asset('images/' . json_decode($top_feature_banner->image)[0]) }}" alt="img" class='mb_sm_ban'>
          </div>
        </div>
      </div>
    </div>
  </section>

{{-- Top 10 Broker in the world  🥰🎉😍✅--}}
  <section class='sec_default top_ten_bro_sec'>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class='sec_top'>
            <h2 class='sec_head'>
              <span class='br_sp'>Top 10</span> Forex Brokers In The World<span class='c_lp'>!</span>
            </h2>
            <p class='sec_desc'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo labore
            officiis distinctio tempore magni dolor earum architecto dolorem odio et. Repudiandae vel
            explicabo laboriosam, nostrum voluptatibus ipsa earum deleniti amet corrupti. Cupiditate eius
            sequi repellat quae quisquam, est incidunt libero fugit corporis reprehenderit ipsum animi
            pariatur soluta recusandae minima nulla.</p>
            <p class='sec_desc'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis eius
            voluptate quibusdam ducimus, nulla officiis rem rerum, odit tempora minus, autem dolor eligendi
            repellendus cumque?</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div>
            <h3 class='m-0'><span class='hm_sp'>Best</span> forex brokers</h3>
          </div>
          <div class='br_ta_main'>
            <div>
              <table class='top_te_br_ta'>
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Brand</th>
                    <th>Bonus</th>
                    <th>Min. deposit</th>
                    <th>Leverage</th>
                    <th>Spreads</th>
                    <th>Regulation</th>
                    <th>Rating</th>
                    <th>Review</th>
                    <th>Visit site</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($featured_brokers as $key=>$broker)
                  @php  $bonus = DB::table('bonus')->Where('broker_id',  $broker->id)->first(); @endphp               
                  <tr>
                    <td>{{++$key}}.</td>
                    <td><img src="{{ asset('images/' . json_decode($broker->main_image)[0]) }}" alt="img" class='td_br_lo'></td>
                    <td>{{isset($bonus->bonus) ? $bonus->bonus : ''}}</td>                 
                    <td><span class="c_lg">$</span>{{ $broker->min_trade}}</td>
                    <td>{{ $broker->max_leverage}}</td>
                    <td>Floating</td>
                    <td>{{ $broker->info}}</td>
                    <td>  
                      @php $rating = DB::table('user_review')->Where('broker_id', $broker->id)->get()->avg('rating'); @endphp
                      <div class="td_align">
                        <i class="fa-regular fa-star c_lg"></i>{{$rating}}
                      </div>
                    </td>
                    <td><a href="{{ URL::to ('broker-review/'.$broker->slug)}}" class='td_vi_si_a'>read review</a></td>
                    <td><a href="/" target="_blank" class='td_vi_si_a'>visit site</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    {{-- Top 5 Traders In The World🎈🎈🎈🎈🎉🎉🎉🎉 --}}
  <section class='sec_default top_fi_tra_sec'> 
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class='sec_top'>
            <h2 class='sec_head'>
              <span class='br_sp'>Top 5</span> Forex Traders In The World<span class='c_lp'>!</span>
            </h2>
            <p class='sec_desc'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo labore
            officiis distinctio tempore magni dolor earum architecto dolorem odio et. Repudiandae vel
            explicabo laboriosam, nostrum voluptatibus ipsa earum deleniti amet corrupti. Cupiditate
            eius sequi repellat quae quisquam, est incidunt libero fugit corporis reprehenderit ipsum
            animi pariatur soluta recusandae minima nulla.</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class='to_fi_tr_ta_con'>
            <table class=" to_fi_tr_ta">
              <thead>
                <tr>
                  <th>&nbsp;</th>
                  <th>Trader</th>
                  <th>Lifespan</th>
                  <th>Trader's share</th>
                  <th>Profitability</th>
                  <th>Equity</th>
                  <th>Copying traders</th></tr>
              </thead>
              <tbody>
                @foreach($top_traders as $trader)
                <tr>
                  <td>{{$trader->image}}</td>
                  <td><a href="/" target="_blank">{{$trader->trader}} </a></td>
                  <td>{{$trader->lifespan}}</td>
                  <td>{{$trader->trader_share}}</td>
                  <td><span>{{$trader->Profitability}}</span></td>
                  <td>{{$trader->equity}}</td>
                  <td>{{$trader->copying_traders}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>    
      </div>  
    </div>      
  </section>
  {{-- Review Section 🎉🎉🎉🎉🎈🎈🎈🎉🎈🎈🎈🎈--}}
  <section class='sec_default'>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class='sec_top'>
            <h2 class='sec_head'>
              <span class='br_sp'>Check</span> the latest reviews<span class='c_lp'>!</span>
            </h2>
            <p class='sec_desc'>We understand the importance of making informed decisions and that's why we have created this section. Our community of users has shared their personal experiences and opinions on a wide range of products, services, and experiences. So whether you're looking for a new purchase or simply seeking advice, be sure to check out the latest reviews before you make a decision.</p>
          </div>
        </div>
        <div class="col-lg-12" class='rev_sli'>
          <div class="rev_slider owl-theme owl-carousel">
            @foreach ($user_reviews as $review)
            @php $broker = DB::table('broker_review')->Where('id', $review->broker_id)->first() @endphp
            <div class='item rev_car_ma re_mar'>
              <div class='re_he'>
                <div class='rev_to_me'>
                  <h5><i class="fa-regular fa-user c_lg"></i>{{ $review->name }}</h5>
                  <p><i class="fa-solid fa-location-arrow c_lg"></i>{{ $review->city }}, {{ $review->country }}</p>     
                </div>
              </div>             
              <h4 class='m-0'>{!! Str::limit(strip_tags($review->title), 30) !!}</h4>
              <p>{!! Str::limit(strip_tags($review->description), 160) !!} <a href='{{ URL::to ('broker-review/'.$broker->slug)}}' class='c_lg'>read more <span class='c_lp'><i class="fa-regular fa-circle-right"></i></span></a></p>   
              <div class='rev_bo_me'>
                <div class="rev_bo_m">
                  <div class="br_de_ra">
                      @if($review->rating == 1)
                     <i class="fa-regular fa-star c_lp"></i>
                      {!! str_repeat('<i class="fa-regular fa-star c_lp></i>',4) !!}
                      @endif
                      @if($review->rating == 2)
                      {!! str_repeat('<i class="fa-regular fa-star c_lp"
                                  aria-hidden="true"></i>',2)
                      !!}
                      {!! str_repeat('<i class="fa fa-star-o"
                                  aria-hidden="true"></i>',3)
                      !!}
                      @endif
                      @if($review->rating == 3)
                      {!! str_repeat('<i class="fa-regular fa-star c_lp"
                                  aria-hidden="true"></i>',3)
                      !!}
                      {!! str_repeat('<i class="fa fa-star-o"
                                  aria-hidden="true"></i>',2)
                      !!}
                      @endif
                      @if($review->rating == 4)
                      {!! str_repeat('<i class="fa-regular fa-star c_lp"
                                  aria-hidden="true"></i>',4)
                      !!}
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      @endif
                      @if($review->rating == 5)
                      {!! str_repeat('<i class="fa-regular fa-star c_lp"
                                  aria-hidden="true"></i>',5) !!}
                      @endif
                  </div>
              </div>
                <p>{{ Carbon\Carbon::create( $review->created_at)->format('j M, Y') }}</p>
              </div>       
            </div>
            @endforeach 
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class='top_fi_tra_sec sec_default'> 
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class='sec_top'>
            <h2 class='sec_head'>
              <span class='br_sp'>Latest</span> published articles<span class='c_lp'>!</span>
            </h2>
            <p class='sec_desc'> Our team of expert writers covers a wide range of topics, from articles to blogs. This section offers a wealth of knowledge to help you stay informed and up-to-date on the latest trends and developments..</p>
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