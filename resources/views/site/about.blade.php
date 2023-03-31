@include ('layouts.header')

<body id="page-top" data-spy="scroll" data-target=".fixed-top">

    {{-- <div class="left-banner my-fixed vert-move">
        <a href="{{ $left_banner->image_link }}" target="_blank"><img
                src="{{ asset('images/' . json_decode($left_banner->image)[0]) }}" alt=""></a>
    </div>
    <div class="right-banner my-fixed vert-move">
        <a href="{{ $right_banner->image_link }}" target="_blank"><img
                src="{{ asset('images/' . json_decode($right_banner->image)[0]) }}" alt=""></a>
    </div> --}}

   

    <!-- Add Start -->
    {{-- <div class="add add-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="add-col text-center about-page-add-col">
                        <a href="{{ $top_banner->image_link }}" target="_blank"><img
                                src="{{ asset('images/' . json_decode($top_banner->image)[0]) }}" alt=""
                                class="img-fluid blink"></a>
                    </div>
                </div>
                <div class="col-lg-4">
                        <div class="about-hub">
                            <h2 class="about-sub-title">Know few words about us</h2>
                        </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- About Start -->

    
   {{-- add-big-bannar --}}
   @include('layouts.big-banner')


    <section class="sec_default sec_mb">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col_align">
                    <h1 class='sec_head'><span class='br_sp'>About Us</span> - <br /> who are we, what we do and what's our goal<span class='c_lp'>?</span></h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim at minima dolorum praesentium natus. Similique cumque ratione voluptatibus labore deleniti minima! Iusto voluptatibus laborum
                    beatae numquam libero quis veritatis atque?</p>
                </div>
                <div class="col-lg-6">
                    <img src="{{asset('assets')}}/images/ab_he.png" alt="" class='ab_he_img ab_h_mt' >
                </div>
            </div>
        </div>
    </section>

    <section class="sec_default sec_mb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class='sec_head'><span class='br_sp'>TopAsiaFX</span> helps you to find the best brokers in the world<span class='c_lp'>!</span></h2>
                    <p class='sec_desc'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo labore officiis distinctio tempore magni dolor earum architecto dolorem odio et. Repudiandae vel explicabo
                    laboriosam, nostrum voluptatibus ipsa earum deleniti amet corrupti. Cupiditate eius sequi repellat quae quisquam, est incidunt libero fugit corporis reprehenderit ipsum animi pariatur soluta 
                    recusandae minima nulla.</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class='fe_ab_ca'>
                        <i class="fa-regular fa-newspaper"></i>
                        <h4>Broker reviews</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, animi quas id voluptatibus libero dolore ratione dign!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fe_ab_ca">
                        <i class="fa-solid fa-coins"></i>
                        <h4>Best bonuses</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, animi quas id voluptatibus libero dolore ratione dign!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fe_ab_ca">
                        <i class="fa-solid fa-arrow-right-arrow-left"></i>
                        <h4>Broker comparisons</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, animi quas id voluptatibus libero dolore ratione dign!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fe_ab_ca">
                        <i class="fa-solid fa-medal"></i>
                        <h4>User ratings</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, animi quas id voluptatibus libero dolore ratione dign!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sec_default">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset('assets')}}/images/direction.png" alt="" class='ab_di_img ab_h_mb' >
                </div>
                <div class="col-lg-6 col_align">
                    <h2 class='sec_head'><span class='br_sp'>We</span> have started our journey since 2016<span class='c_lp'>!</span></h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt fuga fugit molestias alias, molestiae hic, excepturi nam aliquid recusandae doloribus accusantium. Nulla accusantium ab suscipit
                    id expedita, inventore non odio repellendus voluptates optio perspiciatis soluta cum officiis incidunt.</p>
                </div>               
            </div>
        </div>
    </section>


    <section class="sec_default sec_mb">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-1 order-2 col_align">
                    <h2 class='sec_head'><span class='br_sp'>We</span> help you to grow your business<span class='c_lp'>!</span></h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt fuga fugit molestias alias, molestiae hic, excepturi nam aliquid recusandae doloribus accusantium. Nulla accusantium ab suscipit
                    id expedita, inventore non odio repellendus voluptates optio perspiciatis soluta cum officiis incidunt.</p>          
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <img src="{{asset('assets')}}/images/3d-Illustration.png" alt="" class='ab_bu_img ab_h_mb' >
                </div>
            </div>
        </div>
    </section>


    <section class="sec_default">
        <div class="container">
            <div class="row">
                <div class="ab_ne_le">
                    <div class="row">
                        <div class="col-lg-4 ab_ne_le_img_col">
                            <img src="{{asset('assets')}}/images/3d-Illustration2.png" alt="" class='ab_ne_le_img' >
                        </div>
                        <div class="col-lg-8">
                            <div class='ab_ne_le_inn'>
                                <h2 class='sec_head'><span class='br_sp'>Have</span> any question on mind<span class='c_lp'>?</span></h2>
                                <p>Let's talk about your business and project.</p>
                                <div>
                                  {{-- <form action="" class='ab_ne_le_fo'>
                                    <input type="email" name="" id="" class='ab_ne_le_inp' placeholder='your email' />
                                    <a href='/' class="bl_card_btn ab_ne_le_btn">Let's talk <span class='c_lp'><i class="fa-regular fa-circle-right"></i></span></a>
                                  </form> --}}
                                  {!! Form::open(['route' => 'subscribers.store']) !!}
                                <div>                                  
                                     @csrf
                                     <input type="email" name="email" id="email" placeholder="jhon@email.com" class="ab_ne_le_inp">
                                     {!! Form::submit('Subscribe', ['class' => 'ab_ne_le_inp']) !!}  
                                </div>
                                {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include ('layouts.footer')