@include ('layouts.header')
@include('layouts.big-banner')

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class='sec_top'>
                    <h2 class='sec_head'><span class='br_sp'>Enjoy</span> exciting deposit bonuses<span
                            class='c_lp'>!</span></h2>
                    <p class='sec_desc'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo labore
                        officiis distinctio tempore magni dolor earum architecto dolorem odio et. Repudiandae vel
                        explicabo
                        laboriosam, nostrum voluptatibus ipsa earum deleniti amet corrupti. Cupiditate eius sequi
                        repellat quae quisquam, est incidunt libero fugit corporis reprehenderit ipsum animi
                        pariatur soluta
                        recusandae minima nulla.</p>
                </div>
            </div>
            @foreach ($deposit_bonus as $bonus)
            <div class="col-md-6 col-lg-4 col-xxl-3">
                <div class='bon_card'>
                    <div class='bon_car_br'>
                        @php $broker = DB::table('broker_review')->Where('id',  $bonus->broker_id)->first() @endphp 
                        
                        @php $rating = DB::table('user_review')->Where('broker_id', $broker->id)->get()->avg('rating'); @endphp   
                        <div class='sq_1'>
                            <i class="fa-regular fa-star"></i>{{ $rating}}
                        </div>
                        <div class='tr_1'></div>  
                        @php $broker = DB::table('broker_review')->Where('id',  $bonus->broker_id)->first() @endphp  
                                       
                        <img src="{{ asset('images/' . json_decode($broker->main_image)[0]) }}" alt="img" >
                    </div>
                    <div class='bon_ca_bo'>
                        <a href="{{ url('deposit_bonuses_details/'.$bonus->id)}}">
                            <h4>{{ $bonus->title}}</h4>
                        </a>
                    </div>
                    <div class='bon_car_btns'>
                        <a href='/' class="bon_card_btn">Visit site <span class='c_lp'>
                                <i class="fa-regular fa-circle-right"></i>
                            </span></a>
                        <a href='{{ url('deposit_bonuses_details/'.$bonus->id)}}' class="bon_card_btn">Read details <span class='c_lp'>
                                <i class="fa-regular fa-circle-right"></i>
                            </span></a>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-md-6 col-lg-4 col-xxl-3">
                <div class='bon_card'>
                    <div class='bon_car_br'>
                        <div class='sq_1'>
                            <i class="fa-regular fa-star"></i>5
                        </div>
                        <div class='tr_1'></div>
                        <img src="{{asset('assets')}}/icons-svg/fbs.svg" alt="img" >
                    </div>
                    <div class='bon_ca_bo'>
                        <a href="/">
                            <h4>AssetFX offers 50% Deposit Bonus</h4>
                        </a>
                    </div>
                    <div class='bon_car_btns'>
                        <a href='/' class="bon_card_btn">Visit site <span class='c_lp'>
                                <i class="fa-regular fa-circle-right"></i>
                            </span></a>
                        <a href='/' class="bon_card_btn">Read details <span class='c_lp'>
                                <i class="fa-regular fa-circle-right"></i>
                            </span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xxl-3">
                <div class='bon_card'>
                    <div class='bon_car_br'>
                        <div class='sq_1'>
                            <i class="fa-regular fa-star"></i>5
                        </div>
                        <div class='tr_1'></div>
                        <img src="{{asset('assets')}}/icons-svg/tradersway.svg" alt="img" >
                    </div>
                    <div class='bon_ca_bo'>
                        <a href="/">
                            <h4>AssetFX offers 50% Deposit Bonus</h4>
                        </a>
                    </div>
                    <div class='bon_car_btns'>
                        <a href='/' class="bon_card_btn">Visit site <span class='c_lp'>
                                <i class="fa-regular fa-circle-right"></i>
                            </span></a>
                        <a href='/' class="bon_card_btn">Read details <span class='c_lp'>
                                <i class="fa-regular fa-circle-right"></i>
                            </span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xxl-3">
                <div class='bon_card'>
                    <div class='bon_car_br'>
                        <div class='sq_1'>
                            <i class="fa-regular fa-star"></i>5
                        </div>
                        <div class='tr_1'></div>
                        <img src="{{asset('assets')}}/icons-svg/lite-finance.svg" alt="img" >
                    </div>
                    <div class='bon_ca_bo'>
                        <a href="/">
                            <h4>AssetFX offers 50% Deposit Bonus</h4>
                        </a>
                    </div>
                    <div class='bon_car_btns'>
                        <a href='/' class="bon_card_btn">Visit site <span class='c_lp'>
                                <i class="fa-regular fa-circle-right"></i>
                            </span></a>
                        <a href='/' class="bon_card_btn">Read details <span class='c_lp'>
                                <i class="fa-regular fa-circle-right"></i>
                            </span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xxl-3">
                <div class='bon_card'>
                    <div class='bon_car_br'>
                        <div class='sq_1'>
                            <i class="fa-regular fa-star"></i>5
                        </div>
                        <div class='tr_1'></div>
                        <img src="{{asset('assets')}}/icons-svg/AssetFX.svg" alt="img" >
                    </div>
                    <div class='bon_ca_bo'>
                        <a href="/">
                            <h4>AssetFX offers 50% Deposit Bonus</h4>
                        </a>
                    </div>
                    <div class='bon_car_btns'>
                        <a href='/' class="bon_card_btn">Visit site <span class='c_lp'>
                                <i class="fa-regular fa-circle-right"></i>
                            </span></a>
                        <a href='/' class="bon_card_btn">Read details <span class='c_lp'>
                                <i class="fa-regular fa-circle-right"></i>
                            </span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xxl-3">
                <div class='bon_card'>
                    <div class='bon_car_br'>
                        <div class='sq_1'>
                            <i class="fa-regular fa-star"></i>5
                        </div>
                        <div class='tr_1'></div>
                        <img src="{{asset('assets')}}/icons-svg/fbs.svg" alt="img" >
                    </div>
                    <div class='bon_ca_bo'>
                        <a href="/">
                            <h4>AssetFX offers 50% Deposit Bonus</h4>
                        </a>
                    </div>
                    <div class='bon_car_btns'>
                        <a href='/' class="bon_card_btn">Visit site <span class='c_lp'>
                                <i class="fa-regular fa-circle-right"></i>
                            </span></a>
                        <a href='/' class="bon_card_btn">Read details <span class='c_lp'>
                                <i class="fa-regular fa-circle-right"></i>
                            </span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xxl-3">
                <div class='bon_card'>
                    <div class='bon_car_br'>
                        <div class='sq_1'>
                            <i class="fa-regular fa-star"></i>5
                        </div>
                        <div class='tr_1'></div>
                        <img src="{{asset('assets')}}/icons-svg/tradersway.svg" alt="img" >
                    </div>
                    <div class='bon_ca_bo'>
                        <a href="/">
                            <h4>AssetFX offers 50% Deposit Bonus</h4>
                        </a>
                    </div>
                    <div class='bon_car_btns'>
                        <a href='/' class="bon_card_btn">Visit site <span class='c_lp'>
                                <i class="fa-regular fa-circle-right"></i>
                            </span></a>
                        <a href='/' class="bon_card_btn">Read details <span class='c_lp'>
                                <i class="fa-regular fa-circle-right"></i>
                            </span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xxl-3">
                <div class='bon_card'>
                    <div class='bon_car_br'>
                        <div class='sq_1'>
                            <i class="fa-regular fa-star"></i>5
                        </div>
                        <div class='tr_1'></div>
                        <img src="{{asset('assets')}}/icons-svg/lite-finance.svg" alt="img" >
                    </div>
                    <div class='bon_ca_bo'>
                        <a href="/">
                            <h4>AssetFX offers 50% Deposit Bonus</h4>
                        </a>
                    </div>
                    <div class='bon_car_btns'>
                        <a href='/' class="bon_card_btn">Visit site <span class='c_lp'>
                                <i class="fa-regular fa-circle-right"></i>
                            </span></a>
                        <a href='/' class="bon_card_btn">Read details <span class='c_lp'>
                                <i class="fa-regular fa-circle-right"></i>
                            </span></a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
@include ('layouts.footer')