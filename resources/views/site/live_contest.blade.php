@include ('layouts.header')
{{-- banner --}}
@include('layouts.big-banner')

{{-- Live Contest 🎈🎈🎈🎈--}}
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class='sec_top'>
                    <h2 class='sec_head'><span class='br_sp'>Join</span> our live contests<span class='c_lp'>!</span></h2>
                    <p class='sec_desc'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo labore officiis distinctio tempore magni dolor earum architecto dolorem odio et. Repudiandae vel explicabo laboriosam, nostrum voluptatibus ipsa earum deleniti amet corrupti. Cupiditate eius sequi repellat quae quisquam, est incidunt libero fugit corporis reprehenderit ipsum animi pariatur soluta recusandae minima nulla.</p>
                  </div>
            </div>
            @foreach ($liveContest as $contest) 
            <div class="col-md-6 col-lg-4 col-xxl-3">
                <div class='bon_card'>
                    @php $broker = DB::table('broker_review')->Where('id',  $contest->broker_id)->first() @endphp
                    @php $rating = DB::table('user_review')->Where('broker_id', $broker->id)->get()->avg('rating') @endphp 
                    <div class='bon_car_br'>
                        <div class='sq_1'>
                            <i class="fa-regular fa-star"></i>{{$rating}}
                        </div>
                        <div class='tr_1'></div>
                        
                        <img src="{{ asset('images/' . json_decode($broker->main_image)[0]) }}" alt="img" >
                    </div>
                    <div class='bon_ca_bo'>
                        <a href="{{ url('live_contest_details/'.$contest->id)}}">
                            <h4>{{$contest->title}}</h4>
                        </a>
                    </div>
                    <div class='bon_car_btns'>
                        <a href='/' class="bon_card_btn">Visit site <span class='c_lp'>
                                <i class="fa-regular fa-circle-right"></i>
                            </span></a>
                        <a href='{{ url('live_contest_details/'.$contest->id)}}' class="bon_card_btn">Read details <span class='c_lp'>
                                <i class="fa-regular fa-circle-right"></i>
                            </span></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@include ('layouts.footer')