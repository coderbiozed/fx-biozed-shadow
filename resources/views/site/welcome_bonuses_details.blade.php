@include ('layouts.header')
@include('layouts.big-banner')

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class='sec_top'>
                    @foreach($welcome_bonus as $bonus)
                    <h1 class='sec_head'><span class='br_sp'>{{$bonus->title}}</span><span
                            class='c_lp'>!</span></h1>
                            @endforeach  
                    <p class='sec_desc'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo labore
                        officiis distinctio tempore magni dolor earum architecto dolorem odio et. Repudiandae vel
                        explicabo
                        laboriosam, nostrum voluptatibus ipsa earum deleniti amet corrupti. Cupiditate eius sequi
                        repellat quae quisquam, est incidunt libero fugit corporis reprehenderit ipsum animi
                        pariatur soluta
                        recusandae minima nulla.</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis eius voluptate quibusdam
                        ducimus, nulla officiis rem rerum, odit tempora minus, autem dolor eligendi repellendus
                        cumque?</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="top_te_br_ta_inn">
                    <table class='top_te_br_ta'>
                        <thead>
                            <tr>
                                <th colSpan="2">
                                    <h5 class='m-0 c_lg'>{{$bonus->title}}</h5>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Link</strong></td>
                                <td><a href='' target="_blank" class='td_vi_si_a'>{{$bonus->link}}</a></td>
                            </tr>
                            <tr>
                                <td><strong>Dates</strong></td>
                                <td>{{$bonus->date}}</td>
                            </tr>
                            <tr>
                                <td><strong>Available to</strong></td>
                                <td>{{$bonus->available }}</td>
                            </tr>
                            <tr>
                                <td><strong>Bonus</strong></td>
                                <td>{{$bonus->bonus}}</td>
                            </tr>
                            <tr>
                                <td><strong>How to get</strong></td>
                                <td>{{$bonus->requirement}}</td>
                            </tr>
                            <tr>
                                <td><strong>Withdrawal</strong></td>
                                <td>{{$bonus->withdrawal}}</td>
                            </tr>
                            <tr>
                                <td><strong>Other conditions</strong></td>
                                <td>{{$bonus->others_condition}} <a href='/' target="_blank"
                                        class='td_vi_si_a'> here</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="sec_default">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class='sec_top'>
                    <h2 class='sec_head'><span class='br_sp'>How</span> to get<span class='c_lp'>!</span></h2>
                    <p class='sec_desc'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo labore
                        officiis distinctio tempore magni dolor earum architecto dolorem odio et. Repudiandae vel
                        explicabo
                        laboriosam, nostrum voluptatibus ipsa earum deleniti amet corrupti. Cupiditate eius sequi
                        repellat quae quisquam, est incidunt libero fugit corporis reprehenderit ipsum animi
                        pariatur soluta
                        recusandae minima nulla.</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class='inst_ca'>
                    <h4>Open an account
                        <i class="fa-solid fa-arrow-right-long c_lp"></i>
                    </h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, corrupti placeat adipisci
                        ipsam nostrum deserunt ullam architecto consequatur.</p>
                    <span class='c_lg'>1</span>
                </div>
            </div>
            <div class="col-lg-3">
                <div class='inst_ca'>
                    <h4>Make a deposit
                        <i class="fa-solid fa-arrow-right-long c_lp"></i>
                    </h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, corrupti placeat adipisci
                        ipsam nostrum deserunt ullam architecto consequatur.</p>
                    <span class='c_lg'>2</span>
                </div>
            </div>
            <div class="col-lg-3">
                <div class='inst_ca'>
                    <h4>Increase your deposit
                        <i class="fa-solid fa-arrow-right-long c_lp"></i>
                    </h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, corrupti placeat adipisci
                        ipsam nostrum deserunt ullam architecto consequatur.</p>
                    <span class='c_lg'>3</span>
                </div>
            </div>
            <div class="col-lg-3">
                <div class='inst_ca'>
                    <h4>Withdraw bonus fund
                        <i class="fa-solid fa-arrow-right-long c_lp"></i>
                    </h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, corrupti placeat adipisci
                        ipsam nostrum deserunt ullam architecto consequatur.</p>
                    <span class='c_lg'>4</span>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="sec_default">
    <div class="po_inn">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class='sec_top'>
                        <h2 class='sec_head'><span class='br_sp'>Multiple</span> payment options<span
                                class='c_lp'>!</span></h2>
                        <p class='sec_desc'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo labore
                            officiis distinctio tempore magni dolor earum architecto dolorem odio et. Repudiandae
                            vel explicabo
                            laboriosam, nostrum voluptatibus ipsa earum deleniti amet corrupti. Cupiditate eius
                            sequi repellat quae quisquam, est incidunt libero fugit corporis reprehenderit ipsum
                            animi pariatur soluta
                            recusandae minima nulla.</p>
                    </div>
                </div>
                <div class='bon_sli owl-theme owl-carousel'>
                    <div class="item">
                        <img src="icons-svg/bank.png" alt="img" />
                        <h4>local online banking</h4>
                    </div>

                    <div class="item">
                        <img src="icons-svg/visa_mastercard.png" alt="img" />
                        <h4>visa/Master card</h4>
                    </div>

                    <div class="item">
                        <img src="icons-svg/wire_transfer.png" alt="img" />
                        <h4>wire transfer</h4>
                    </div>

                    <div class="item">
                        <img src="icons-svg/swift.png" alt="img" />
                        <h4>swift</h4>
                    </div>

                    <div class="item">
                        <img src="icons-svg/Skrill.png" alt="img" />
                        <h4>skrill</h4>
                    </div>

                    <div class="item">
                        <img src="icons-svg/Netler.png" alt="img" />
                        <h4>neteller</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="sec_default">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class='sec_top'>
                    <h2 class='sec_head'><span class='br_sp'>Bonus</span> FAQ<span class='c_lp'>!</span></h2>
                    <p class='sec_desc'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo labore
                        officiis distinctio tempore magni dolor earum architecto dolorem odio et. Repudiandae vel
                        explicabo
                        laboriosam, nostrum voluptatibus ipsa earum deleniti amet corrupti. Cupiditate eius sequi
                        repellat quae quisquam, est incidunt libero fugit corporis reprehenderit ipsum animi
                        pariatur soluta
                        recusandae minima nulla.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class='bon_faqs'>
                    <div>
                        <div>
                            <h4 class='c_lg'>1.</h4>
                        </div>
                    </div>
                    <div>
                        <h4>Who is eligible to claim the deposit bonus<span class='c_lp'>?</span></h4>
                        <p class="m-0">Any MTrading customer with an M.Premium account, either new or existing. Lorem, ipsum
                            dolor sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class='bon_faqs'>
                    <div>
                        <div>
                            <h4 class='c_lg'>2.</h4>
                        </div>
                    </div>
                    <div>
                        <h4>What to do if the bonus expires<span class='c_lp'>?</span></h4>
                        <p class="m-0">No worries, claim it again! You can do it as many times as you want. Lorem, ipsum dolor
                            sit amet.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class='bon_faqs'>
                    <div>
                        <div>
                            <h4 class='c_lg'>3.</h4>
                        </div>
                    </div>
                    <div>
                        <h4>Can I use wire transfer for depositing<span class='c_lp'>?</span></h4>
                        <p class="m-0">Yes. In this case, please notify your account manager via e-mail after the account has
                            been funded.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class='bon_faqs'>
                    <div>
                        <div>
                            <h4 class='c_lg'>4.</h4>
                        </div>
                    </div>
                    <div>
                        <h4>How can I keep the bonus<span class='c_lp'>?</span></h4>
                        <p class="m-0">You should get the bonus rules fulfilled. Please read Terms and Conditions for more
                            information.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include ('layouts.footer')