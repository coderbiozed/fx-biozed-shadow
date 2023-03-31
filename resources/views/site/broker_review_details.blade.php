@include ('layouts.header')

@include('layouts.big-banner')

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class='br_de_sidebar'>
                    <div class='de_br_ca'>
                    <div class='de_br_ca_to'>
                        <img src="{{ asset('images/' . json_decode($broker->main_image)[0]) }}" alt="img" />
                        <div class='br_ca_to_in'><a href="{{ $broker->visit_site }}" target="_blank"
                        class='br_ca_to_in_a'>visit site</a></div>
                    </div>
                    @php $rating = DB::table('user_review')->Where('broker_id', $broker->id)->get()->avg('rating'); @endphp
                    <div class='de_br_ca_mi'>
                        <div class='br_de_ra'>
                            <i class="fa-regular fa-star c_lp"></i>
                           {{$rating}}
                        </div>
                    </div>
                    <div class='de_br_ca_bo'>
                        <a href="/" class="de_br_bo_btn">Open live <span class='c_lp'>
                            <i class="fa-regular fa-circle-right"></i></span>
                        </a> 
                        <a href="/" class="de_br_bo_btn">Open demo <span class='c_lp'>
                            <i class="fa-regular fa-circle-right"></i></span>
                        </a> 
                    </div>
                    </div>
                    <div class='br_de_sid_ban'>
                    <img src="{{asset('assets')}}/images/300x600.gif" alt="img" />
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="de_br_re_main">     
                    <div class='de_br_he last_p'>
                        <h1 class='sec_head'><span class='br_sp'>{{$broker->broker_name}}</span> review by - <span
                        class='c_lg'>TopAsia</span><span class='c_lp'>FX</span></h1>
                        <p>{!! $broker->shot_description !!}</p>
                    </div>                  
                    <div class='de_br_pr_co'>
                    <div>
                        <h3><span class="hm_sp">{{$broker->broker_name}}</span> Pros & Cons</h3>
                        <div class='de_br_pr last_p'>
                        <h4>Pros</h4>
                        <p>{!! $broker->pros !!}</p>           
                        </div>
                        <div class='de_br_co last_p'>
                        <h4>Cons</h4>
                        <p>{!!$broker->cons!!}</p>
                        </div>
                    </div>
                    </div>
    
                    <div class='de_br_ta'>
                    <h3><span class="hm_sp">{{$broker->broker_name}}</span> account types</h3>
                    <table class='top_te_br_ta'>
                        <thead>
                        <tr>
                            <th>Accounts</th>
                            <th>Currencies</th>               
                            <th>Min. deposit</th> 
                            <th>Leverage</th>               
                            <th>Starting Spreads</th>  
                            <th>Demo Account</th>
                            <th>Rollover Free</th>               
                            <th>Decimal Pricing</th>               
                            <th>Commission per trade</th> 
                            <th>Max. Lot Size Per Trade</th>
                            <th>Min. Lot Size Per Trade</th>              
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Standard Account</td>
                            <td>USD, EUR, JPY</td>
                            <td><span class="c_lg">$</span>100</td>
                            <td>1:3000</td>
                            <td>0.1</td>
                            <td>No</td>
                            <td>Yes</td>
                            <td>5</td>
                            <td>$0</td>
                            <td>500</td>
                            <td>0.01</td>
                        </tr>
                        <tr>
                            <td>Zero-Spreads Account</td>
                            <td>USD, EUR, JPY</td>
                            <td><span class="c_lg">$</span>500</td>
                            <td>1:3000</td>
                            <td>0.0 (fixed)</td>
                            <td>No</td>
                            <td>Yes</td>
                            <td>5</td>
                            <td>$20/lot</td>
                            <td>500</td>
                            <td>0.01</td>
                        </tr>
                        <tr>
                            <td>ECN Account</td>
                            <td>USD</td>
                            <td><span class="c_lg">$</span>1000</td>
                            <td>1:500</td>
                            <td>0</td>
                            <td>No</td>
                            <td>Yes</td>
                            <td>5</td>
                            <td>$6</td>
                            <td>500</td>
                            <td>0.10</td>
                        </tr>
                        <tr>
                            <td>Crypto</td>
                            <td>USDT</td>
                            <td><span class="c_lg">$</span>1</td>
                            <td>1:5</td>
                            <td>1 point</td>
                            <td>No</td>
                            <td>No</td>
                            <td>5</td>
                            <td>0.05% for opening / 0.05% for closing</td>
                            <td>500</td>
                            <td>0.01</td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
    
                    <div class='de_br_ta'>
                    <h3><span class="hm_sp">Account</span> options</h3>
                    <table class='top_te_br_ta'>
                        <thead>
                        <tr>
                            <th>Broker Type</th>
                            <th>Minimum Deposit</th>               
                            <th>Forex Majors Spread</th>
                            <th>Maximum Leverage</th>
                            <th>Min. Trade Size</th>
                            <th>Scalping</th>
                            <th>Hedging</th>
                            <th>Free Demo</th>
                            <th>USA Traders</th>    
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>STP/ECN</td>
                            <td>1</td>
                            <td>EUR/USD: -0.1, GBP/USD: 0.2, USD/JPY: 0.1</td>
                            <td>{{$broker->max_leverage}}</td>
                            <td>{{$broker->min_trade}}</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>No</td>
                            <td>No</td>
                        </tr>                     
                        </tbody>
                    </table>
                    </div>

                    <div class='bd_frp_sec'>
                        <h3><span class="hm_sp">{{$broker->broker_name}}</span> trading platforms, fees & regulation</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam id molestias, reprehenderit omnis laboriosam itaque tempore illo corrupti, quod placeat libero magnam nobis necessitatibus
                        animi optio temporibus quasi velit. Quibusdam! Lorem ipsum dolor sit amet consectetur adipisicing elit Ipsum.</p>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class='last_p bd_frp'>
                            <h5>Regulation</h5>
                            <p><span><i class="fa-regular fa-circle-right c_lp"></i></span>(CySEC, Cyprus)</p>
                            <p><span><i class="fa-regular fa-circle-right c_lp"></i></span>(ASIC, Australia) </p>
                            <p><span><i class="fa-regular fa-circle-right c_lp"></i></span>(FSCA, South Africa)</p>
                            <p><span><i class="fa-regular fa-circle-right c_lp"></i></span>(IFCA, Belize)</p>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class='last_p bd_frp'>
                            <h5>Fees</h5>
                            <p><span><i class="fa-regular fa-circle-right c_lp"></i></span>No rollover fee</p>
                            <p><span><i class="fa-regular fa-circle-right c_lp"></i></span>No margin interest</p>
                            <p><span><i class="fa-regular fa-circle-right c_lp"></i></span>Depositing fees reimbursed by FBS</p>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class='last_p'>
                            <h5>Platforms</h5>
                            
                            <p><span><i class="fa-regular fa-circle-right c_lp"></i></span>{{$broker->trading_platform}}</p>
                            {{-- <p><span><i class="fa-regular fa-circle-right c_lp"></i></span>FBS Trader</p> --}}
                            </div>
                          </div>
                        </div>
                    </div>
    
                    <div class='last_p'>
                    <h3><span class="hm_sp">{{$broker->broker_name}}</span> top features</h3>
                    <p>Favorable Spreads and Commissions: Only three of six possible account types at FBS (IFCA and FSCA) have commissions, the rest do not. ECN and Zero-Spread Account holders will pay $20 per 
                    lot and $6 per lot in commissions, respectively, and these accounts exhibit the lowest possible spreads. The Zero-Spreads Account is aptly named with a 0-point fixed spread, while the ECN
                    account offers a floating spread from -1 point. As for Crypto account holders, their commission is 0.05% for opening and 0.05% for closing positions with the floating spread from 1 point. 
                    </p>
                    <p>In the regions under CySEC and ASIC regulations, FBS accounts have no obligatory commission, except commissions that may be charged when trading some instruments. </p>
                    <p>Leverage Up to 1:3000: For the regions under IFCA and FSCA regulations, leverage on the Standard, Micro, and Zero-Spread accounts runs up to 1:3000, which is among the highest in the world.
                    All other accounts have leverage of up to 1:1000 except the ECN account, which offers up to 1:500.</p>
                    <p>For the regions under ASIC regulation, leverage is up to 1:30, while for the EU and UK, it’s up to 1:500 for a Professional category. </p>
                    <p>Effortless Deposits and Withdrawals: With a healthy variety of payment types, including bank cards, wire transfer, Skrill, Neteller, Rapid Transfer, STICPAY, Perfect Money, crypto wallets, 
                    local banks, local payment systems, and local exchangers, clients can deposit and withdraw their funds quickly. </p>
                    <p>Effective Customer Support: Customer support is available 24/7 in English and 20 other languages via methods including email, phone, call back, live chat, and social media. The FBS customer 
                    service team is committed to customer success, helping traders, both new and experienced ones overcome any obstacles they encounter.</p>
                    </div>
    
                    <div class='last_p'>
                    <h3><span class="hm_sp">{{$broker->broker_name}}</span> Compliance & Regulation</h3>
                    {!!$broker->regulation !!}
                    </div>
                    
                    <div class='de_br_ta'>
                    <h3><span class="hm_sp">{{$broker->broker_name}}</span> service details</h3>
                    <table class='top_te_br_ta'>
                        <tbody>
                        <tr>
                            <td>Supported Languages</td>
                            <td>Arabic, Chinese, English, French, German, Hindi, Indonesian, Italian, Japanese, Korean, Malay, Portuguese, Spanish, Thai, Turkish, Urdu, Vietnamese</td>
                        </tr>
                        <tr>
                            <td>Customer Service By</td>
                            <td>Forums, Manuals, Newsletter, Call Backs, Phone, Live Chat, Email, Social Media</td>
                        </tr>
                        <tr>
                            <td>Service Hours</td>
                            <td>24/7</td>
                        </tr>
                        <tr>
                            <td>Email Response</td>
                            <td>Immediate</td>
                        </tr>
                        </tbody>
                    </table>
                    </div>

                    <div class='de_br_ta'>
                        <h3 class='m-0'><span class="hm_sp">{{$broker->broker_name}}</span> trading and investment tools</h3>
                        <div class='tr_in_ta_main'>
                          <table class='top_te_br_ta'>
                            <tbody>
                              <tr>
                                <td>One Click Trading</td>
                                <td>Yes</td>
                              </tr>
                              <tr>
                                <td>Stop Order</td>
                                <td>Yes</td>
                              </tr>
                              <tr>
                                <td>Limit Order</td>
                                <td>Yes</td>
                              </tr>
                              <tr>
                                <td>Trade off Charts</td>
                                <td>Yes</td>
                              </tr>
                              <tr>
                                <td>Market Order</td>
                                <td>Yes</td>
                              </tr>
                              <tr>
                                <td>24hr Trading</td>
                                <td>Yes</td>
                              </tr>
                            </tbody>
                          </table>
                          <table class='top_te_br_ta'>
                            <tbody>
                              <tr>
                                <td>Email Alerts</td>
                                <td>Yes</td>
                              </tr>
                              <tr>
                                <td>Trailing Stop Order</td>
                                <td>Yes</td>
                              </tr>
                              <tr>
                                <td>Charting Package</td>
                                <td>Yes</td>
                              </tr>
                              <tr>
                                <td>Mobile Alerts</td>
                                <td>Yes</td>
                              </tr>
                              <tr>
                                <td>OCO Orders</td>
                                <td>Yes</td>
                              </tr>
                              <tr>
                                <td>Streaming News Feed</td>
                                <td>Yes</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
    
                    <div class='last_p'>
                    <h3><span class="hm_sp">{{$broker->broker_name}}</span> pricing</h3>
                    {!! $broker->pricing!!}
                    </div>
                      
                    
                    <div>
                      <h3><span class="hm_sp">Deposit</span> methods</h3>
                      <div class='owl-theme owl-carousel de_me_sli tr_me_sli'>
                       {{-- {!!$broker->deposit_method!!}  --}}

                        <div class="item">
                          <img src="{{asset('assets')}}/icons-svg/bank.png" alt="img" />
                        </div>
    
                        <div class="item">
                          <img src="{{asset('assets')}}/icons-svg/visa_mastercard.png" alt="img" />
                        </div>
    
                        <div class="item">
                          <img src="{{asset('assets')}}/icons-svg/wire_transfer.png" alt="img" />
                        </div>
    
                        <div class="item">
                          <img src="{{asset('assets')}}/icons-svg/swift.png" alt="img" />
                        </div>
    
                        <div class="item">
                          <img src="{{asset('assets')}}/icons-svg/Skrill.png" alt="img" />
                        </div>
    
                        <div class="item">
                          <img src="{{asset('assets')}}/icons-svg/Netler.png" alt="img" />
                        </div>
                      </div>
                    </div>
    
                    <div>
                      <h3><span class="hm_sp">Withdrawl</span> methods</h3>
                      <div class='owl-theme owl-carousel wi_me_sli tr_me_sli'>
                        {{-- {!!$broker->withdrawal_method!!}  --}}
                        <div>
                          <img src="{{asset('assets')}}/icons-svg/Netler.png" alt="img" />
                        </div>
    
                        <div>
                          <img src="{{asset('assets')}}/icons-svg/Skrill.png" alt="img" />
                        </div>
    
                        <div>
                          <img src="{{asset('assets')}}/icons-svg/wire_transfer.png" alt="img" />
                        </div>
    
                        <div>
                          <img src="{{asset('assets')}}/icons-svg/visa_mastercard.png" alt="img" />
                        </div>
    
                        <div>
                          <img src="{{asset('assets')}}/icons-svg/swift.png" alt="img" />
                        </div>
    
                        <div>
                          <img src="{{asset('assets')}}/icons-svg/bank.png" alt="img" />
                        </div>
                      </div>
                    </div>

                    <div>
                      <h3><span class="hm_sp">FAQ</span> section</h3>
                      <div class="faq-content">
                        @if(!empty($faq->q_1))
                        <div class="faq-question">
                          <input id="q1" type="checkbox" class="panel"/>
                          <div class="plus">+</div>
                          <label for="q1" class="panel-title">{!! $faq->q_1 !!}</label>
                          <div class="panel-content">{!! $faq->ans_1 !!}
                          </div>
                        </div>
                        @endif
                        @if(!empty($faq->q_2))
                        <div class="faq-question">
                          <input id="q2" type="checkbox" class="panel"/>
                          <div class="plus">+</div>
                          <label for="q2" class="panel-title">{!! $faq->q_2 !!}</label>
                          <div class="panel-content">{!! $faq->ans_2 !!}
                          </div>
                        </div>
                        @endif
                        @if(!empty($faq->q_3))
                        <div class="faq-question">
                          <input id="q3" type="checkbox" class="panel"/>
                          <div class="plus">+</div>
                          <label for="q3" class="panel-title">{!!$faq->q_3!!} </label>
                          <div class="panel-content">{!! $faq->ans_3 !!}
                          </div>
                        </div>
                        @endif
                        @if(!empty($faq->q_4))
                        <div class="faq-question">
                          <input id="q4" type="checkbox" class="panel"/>
                          <div class="plus">+</div>
                          <label for="q4" class="panel-title">{!!$faq->q_4!!}</label>
                          <div class="panel-content">{!! $faq->ans_4 !!}
                          </div>
                        </div>
                        @endif
                        @if(!empty($faq->q_4))
                        <div class="faq-question">
                          <input id="q5" type="checkbox" class="panel"/>
                          <div class="plus">+</div>
                          <label for="q5" class="panel-title">{!!$faq->q_5!!}</label>
                          <div class="panel-content">{!! $faq->ans_5 !!}
                          </div>
                        </div>
                        @endif
                      </div>
                    </div>

                    <div class='last_p'>
                      <h3><span class="hm_sp">{{$broker->broker_name}}</span> user experience</h3>
                      <p>Trading with FBS is reminiscent of similarly agile online brokers and begins by signing up with your email and phone number (which must then be verified), or alternatively a Facebook or
                      Google account. After downloading the preferred trading platform, you can log in to the correct FBS server with the credentials emailed to you. Deposits are instantly processed. The FBS
                      Dashboard is logically designed, with financial operations, the trading platform, promotions (except the regions under CySEC and ASIC regulations), transaction, and order history on the left-
                      hand side. Here, traders will also see the status of their open positions.</p>
                      <p>The FBS Trader trading platform gives users full access to financial markets. There is a range of indicators and custom parameters along the top bar, a primary window to display the
                      selected instrument’s chart, a left-side panel with all selectable instruments, and information on current and past trades. To execute a trade, click on the instrument of choice, click on the
                      Buy or Sell button on the small one-click trading module.</p>
                    </div>

                    <div>
                      <h3><span class="hm_sp">Add</span> your review</h3>
                        <div class='bro_det_re_bar'>
                          @php $rating = DB::table('user_review')->Where('broker_id', $broker->id)->get()->avg('rating'); @endphp
                          <div class='de_br_ca_mi'>
                            <div class='br_de_ra'>
                              <i class="fa-regular fa-star c_lp"></i>{{$rating}}
                            </div>
                          </div>
                          <div>
                            <div type="button" class="de_br_bo_btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              Add your review <span class='c_lp'><i class="fa-regular fa-circle-right"></i></span>
                            </div>

                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add you valuable review here!</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <div>
                                        {!! Form::open(['route' => 'userReviews.store']) !!}
                                    
                                          <div class="row">
                                            <input class="form-control" type="hidden" name="broker_id" id="broker_id" value="{{ $broker->id }}">  
                                            <input class="form-control" type="hidden" name="rating" id="rating" value="">  
                                              <div class="col-lg-6">
                                                  <input type="text" name="name" id="name" placeholder='name' />
                                              </div>
                                              <div class="col-lg-6">
                                                  <input type="email" name="email" id="email" placeholder='email'/>
                                              </div>
                                              <div class="col-lg-12">
                                                  <input type="text"  name="title" id="title" placeholder='review title' />
                                              </div>
                                              <div class="col-lg-12">
                                                  <textarea name="review" name="description" id="description" rows="5" placeholder='write your review'></textarea>
                                              </div>
                                              <div class="col-lg-6">
                                                <div class='rating-widget'>
                                                  <!-- Rating Stars Box -->
                                              <div class='rating-stars'>
                                                  <ul id='stars' class="d-flex" style="list-style: none">
                                                        <li class='star' title='Poor' data-value='1'>
                                                            <i class='fa fa-star fa-fw'></i>
                                                        </li>
                                                        <li class='star' title='Fair' data-value='2'>
                                                            <i class='fa fa-star fa-fw'></i>
                                                        </li>
                                                        <li class='star' title='Good' data-value='3'>
                                                            <i class='fa fa-star fa-fw'></i>
                                                        </li>
                                                        <li class='star' title='Excellent' data-value='4'>
                                                            <i class='fa fa-star fa-fw'></i>
                                                        </li>
                                                        <li class='star' title='WOW!!!' data-value='5'>
                                                            <i class='fa fa-star fa-fw'></i>
                                                        </li>
                                                  </ul>
                                              </div>                                                 
                                                                                                 
                                          </div> 
                                              </div>
                                              <div class="col-lg-6">
                                                <select class="form-control" name="country" id="country">
                                                  <option>Select Your Country</option>
                                                  <option value="Afganistan">Afghanistan</option>
                                                  <option value="Albania">Albania</option>
                                                  <option value="Algeria">Algeria</option>
                                                  <option value="American Samoa">American Samoa</option>
                                                  <option value="Andorra">Andorra</option>
                                                  <option value="Angola">Angola</option>
                                                  <option value="Anguilla">Anguilla</option>
                                                  <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                  <option value="Argentina">Argentina</option>
                                                  <option value="Armenia">Armenia</option>
                                                  <option value="Aruba">Aruba</option>
                                                  <option value="Australia">Australia</option>
                                                  <option value="Austria">Austria</option>
                                                  <option value="Azerbaijan">Azerbaijan</option>
                                                  <option value="Bahamas">Bahamas</option>
                                                  <option value="Bahrain">Bahrain</option>
                                                  <option value="Bangladesh">Bangladesh</option>
                                                  <option value="Barbados">Barbados</option>
                                                  <option value="Belarus">Belarus</option>
                                                  <option value="Belgium">Belgium</option>
                                                  <option value="Belize">Belize</option>
                                                  <option value="Benin">Benin</option>
                                                  <option value="Bermuda">Bermuda</option>
                                                  <option value="Bhutan">Bhutan</option>
                                                  <option value="Bolivia">Bolivia</option>
                                                  <option value="Bonaire">Bonaire</option>
                                                  <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                  <option value="Botswana">Botswana</option>
                                                  <option value="Brazil">Brazil</option>
                                                  <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                  <option value="Brunei">Brunei</option>
                                                  <option value="Bulgaria">Bulgaria</option>
                                                  <option value="Burkina Faso">Burkina Faso</option>
                                                  <option value="Burundi">Burundi</option>
                                                  <option value="Cambodia">Cambodia</option>
                                                  <option value="Cameroon">Cameroon</option>
                                                  <option value="Canada">Canada</option>
                                                  <option value="Canary Islands">Canary Islands</option>
                                                  <option value="Cape Verde">Cape Verde</option>
                                                  <option value="Cayman Islands">Cayman Islands</option>
                                                  <option value="Central African Republic">Central African Republic</option>
                                                  <option value="Chad">Chad</option>
                                                  <option value="Channel Islands">Channel Islands</option>
                                                  <option value="Chile">Chile</option>
                                                  <option value="China">China</option>
                                                  <option value="Christmas Island">Christmas Island</option>
                                                  <option value="Cocos Island">Cocos Island</option>
                                                  <option value="Colombia">Colombia</option>
                                                  <option value="Comoros">Comoros</option>
                                                  <option value="Congo">Congo</option>
                                                  <option value="Cook Islands">Cook Islands</option>
                                                  <option value="Costa Rica">Costa Rica</option>
                                                  <option value="Cote DIvoire">Cote DIvoire</option>
                                                  <option value="Croatia">Croatia</option>
                                                  <option value="Cuba">Cuba</option>
                                                  <option value="Curaco">Curacao</option>
                                                  <option value="Cyprus">Cyprus</option>
                                                  <option value="Czech Republic">Czech Republic</option>
                                                  <option value="Denmark">Denmark</option>
                                                  <option value="Djibouti">Djibouti</option>
                                                  <option value="Dominica">Dominica</option>
                                                  <option value="Dominican Republic">Dominican Republic</option>
                                                  <option value="East Timor">East Timor</option>
                                                  <option value="Ecuador">Ecuador</option>
                                                  <option value="Egypt">Egypt</option>
                                                  <option value="El Salvador">El Salvador</option>
                                                  <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                  <option value="Eritrea">Eritrea</option>
                                                  <option value="Estonia">Estonia</option>
                                                  <option value="Ethiopia">Ethiopia</option>
                                                  <option value="Falkland Islands">Falkland Islands</option>
                                                  <option value="Faroe Islands">Faroe Islands</option>
                                                  <option value="Fiji">Fiji</option>
                                                  <option value="Finland">Finland</option>
                                                  <option value="France">France</option>
                                                  <option value="French Guiana">French Guiana</option>
                                                  <option value="French Polynesia">French Polynesia</option>
                                                  <option value="French Southern Ter">French Southern Ter</option>
                                                  <option value="Gabon">Gabon</option>
                                                  <option value="Gambia">Gambia</option>
                                                  <option value="Georgia">Georgia</option>
                                                  <option value="Germany">Germany</option>
                                                  <option value="Ghana">Ghana</option>
                                                  <option value="Gibraltar">Gibraltar</option>
                                                  <option value="Great Britain">Great Britain</option>
                                                  <option value="Greece">Greece</option>
                                                  <option value="Greenland">Greenland</option>
                                                  <option value="Grenada">Grenada</option>
                                                  <option value="Guadeloupe">Guadeloupe</option>
                                                  <option value="Guam">Guam</option>
                                                  <option value="Guatemala">Guatemala</option>
                                                  <option value="Guinea">Guinea</option>
                                                  <option value="Guyana">Guyana</option>
                                                  <option value="Haiti">Haiti</option>
                                                  <option value="Hawaii">Hawaii</option>
                                                  <option value="Honduras">Honduras</option>
                                                  <option value="Hong Kong">Hong Kong</option>
                                                  <option value="Hungary">Hungary</option>
                                                  <option value="Iceland">Iceland</option>
                                                  <option value="Indonesia">Indonesia</option>
                                                  <option value="India">India</option>
                                                  <option value="Iran">Iran</option>
                                                  <option value="Iraq">Iraq</option>
                                                  <option value="Ireland">Ireland</option>
                                                  <option value="Isle of Man">Isle of Man</option>
                                                  <option value="Israel">Israel</option>
                                                  <option value="Italy">Italy</option>
                                                  <option value="Jamaica">Jamaica</option>
                                                  <option value="Japan">Japan</option>
                                                  <option value="Jordan">Jordan</option>
                                                  <option value="Kazakhstan">Kazakhstan</option>
                                                  <option value="Kenya">Kenya</option>
                                                  <option value="Kiribati">Kiribati</option>
                                                  <option value="Korea North">Korea North</option>
                                                  <option value="Korea Sout">Korea South</option>
                                                  <option value="Kuwait">Kuwait</option>
                                                  <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                  <option value="Laos">Laos</option>
                                                  <option value="Latvia">Latvia</option>
                                                  <option value="Lebanon">Lebanon</option>
                                                  <option value="Lesotho">Lesotho</option>
                                                  <option value="Liberia">Liberia</option>
                                                  <option value="Libya">Libya</option>
                                                  <option value="Liechtenstein">Liechtenstein</option>
                                                  <option value="Lithuania">Lithuania</option>
                                                  <option value="Luxembourg">Luxembourg</option>
                                                  <option value="Macau">Macau</option>
                                                  <option value="Macedonia">Macedonia</option>
                                                  <option value="Madagascar">Madagascar</option>
                                                  <option value="Malaysia">Malaysia</option>
                                                  <option value="Malawi">Malawi</option>
                                                  <option value="Maldives">Maldives</option>
                                                  <option value="Mali">Mali</option>
                                                  <option value="Malta">Malta</option>
                                                  <option value="Marshall Islands">Marshall Islands</option>
                                                  <option value="Martinique">Martinique</option>
                                                  <option value="Mauritania">Mauritania</option>
                                                  <option value="Mauritius">Mauritius</option>
                                                  <option value="Mayotte">Mayotte</option>
                                                  <option value="Mexico">Mexico</option>
                                                  <option value="Midway Islands">Midway Islands</option>
                                                  <option value="Moldova">Moldova</option>
                                                  <option value="Monaco">Monaco</option>
                                                  <option value="Mongolia">Mongolia</option>
                                                  <option value="Montserrat">Montserrat</option>
                                                  <option value="Morocco">Morocco</option>
                                                  <option value="Mozambique">Mozambique</option>
                                                  <option value="Myanmar">Myanmar</option>
                                                  <option value="Nambia">Nambia</option>
                                                  <option value="Nauru">Nauru</option>
                                                  <option value="Nepal">Nepal</option>
                                                  <option value="Netherland Antilles">Netherland Antilles</option>
                                                  <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                  <option value="Nevis">Nevis</option>
                                                  <option value="New Caledonia">New Caledonia</option>
                                                  <option value="New Zealand">New Zealand</option>
                                                  <option value="Nicaragua">Nicaragua</option>
                                                  <option value="Niger">Niger</option>
                                                  <option value="Nigeria">Nigeria</option>
                                                  <option value="Niue">Niue</option>
                                                  <option value="Norfolk Island">Norfolk Island</option>
                                                  <option value="Norway">Norway</option>
                                                  <option value="Oman">Oman</option>
                                                  <option value="Pakistan">Pakistan</option>
                                                  <option value="Palau Island">Palau Island</option>
                                                  <option value="Palestine">Palestine</option>
                                                  <option value="Panama">Panama</option>
                                                  <option value="Papua New Guinea">Papua New Guinea</option>
                                                  <option value="Paraguay">Paraguay</option>
                                                  <option value="Peru">Peru</option>
                                                  <option value="Phillipines">Philippines</option>
                                                  <option value="Pitcairn Island">Pitcairn Island</option>
                                                  <option value="Poland">Poland</option>
                                                  <option value="Portugal">Portugal</option>
                                                  <option value="Puerto Rico">Puerto Rico</option>
                                                  <option value="Qatar">Qatar</option>
                                                  <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                  <option value="Republic of Serbia">Republic of Serbia</option>
                                                  <option value="Reunion">Reunion</option>
                                                  <option value="Romania">Romania</option>
                                                  <option value="Russia">Russia</option>
                                                  <option value="Rwanda">Rwanda</option>
                                                  <option value="St Barthelemy">St Barthelemy</option>
                                                  <option value="St Eustatius">St Eustatius</option>
                                                  <option value="St Helena">St Helena</option>
                                                  <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                  <option value="St Lucia">St Lucia</option>
                                                  <option value="St Maarten">St Maarten</option>
                                                  <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                  <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                  <option value="Saipan">Saipan</option>
                                                  <option value="Samoa">Samoa</option>
                                                  <option value="Samoa American">Samoa American</option>
                                                  <option value="San Marino">San Marino</option>
                                                  <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                  <option value="Saudi Arabia">Saudi Arabia</option>
                                                  <option value="Senegal">Senegal</option>
                                                  <option value="Seychelles">Seychelles</option>
                                                  <option value="Sierra Leone">Sierra Leone</option>
                                                  <option value="Singapore">Singapore</option>
                                                  <option value="Slovakia">Slovakia</option>
                                                  <option value="Slovenia">Slovenia</option>
                                                  <option value="Solomon Islands">Solomon Islands</option>
                                                  <option value="Somalia">Somalia</option>
                                                  <option value="South Africa">South Africa</option>
                                                  <option value="Spain">Spain</option>
                                                  <option value="Sri Lanka">Sri Lanka</option>
                                                  <option value="Sudan">Sudan</option>
                                                  <option value="Suriname">Suriname</option>
                                                  <option value="Swaziland">Swaziland</option>
                                                  <option value="Sweden">Sweden</option>
                                                  <option value="Switzerland">Switzerland</option>
                                                  <option value="Syria">Syria</option>
                                                  <option value="Tahiti">Tahiti</option>
                                                  <option value="Taiwan">Taiwan</option>
                                                  <option value="Tajikistan">Tajikistan</option>
                                                  <option value="Tanzania">Tanzania</option>
                                                  <option value="Thailand">Thailand</option>
                                                  <option value="Togo">Togo</option>
                                                  <option value="Tokelau">Tokelau</option>
                                                  <option value="Tonga">Tonga</option>
                                                  <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                  <option value="Tunisia">Tunisia</option>
                                                  <option value="Turkey">Turkey</option>
                                                  <option value="Turkmenistan">Turkmenistan</option>
                                                  <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                  <option value="Tuvalu">Tuvalu</option>
                                                  <option value="Uganda">Uganda</option>
                                                  <option value="United Kingdom">United Kingdom</option>
                                                  <option value="Ukraine">Ukraine</option>
                                                  <option value="United Arab Erimates">United Arab Emirates</option>
                                                  <option value="United States of America">United States of America</option>
                                                  <option value="Uraguay">Uruguay</option>
                                                  <option value="Uzbekistan">Uzbekistan</option>
                                                  <option value="Vanuatu">Vanuatu</option>
                                                  <option value="Vatican City State">Vatican City State</option>
                                                  <option value="Venezuela">Venezuela</option>
                                                  <option value="Vietnam">Vietnam</option>
                                                  <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                  <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                  <option value="Wake Island">Wake Island</option>
                                                  <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                  <option value="Yemen">Yemen</option>
                                                  <option value="Zaire">Zaire</option>
                                                  <option value="Zambia">Zambia</option>
                                                  <option value="Zimbabwe">Zimbabwe</option>
                                                </select>
                                            </div>
                                              <div class="col-lg-12">
                                                  <button className='cust_btn' type='submit'>
                                                      Add review
                                                  </button>

                                                  @php  @endphp
                                              </div>
                                          </div>
                                       {!! Form::close() !!}
                                    </div>
                                  </div>               
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div>
                      <h3><span class="hm_sp">User</span> reviews</h3>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis repellat ipsa nam ducimus at id consectetur! Eligendi, illum. Voluptas, ducimus maiores. Mollitia, optio qui amet maiores
                      cumque quod eaque corrupti recusandae debitis molestias fuga sequi distinctio nam facilis laudantium delectus atque perspiciatis illo iusto dolores? Aliquid, asperiores aperiam. Nesciunt,
                      saepe.</p>
                      <div class='br_de_rev_ma'>
                        @foreach($user_reviews as $user)
                        <div class='rev_car_ma'>
                          <div class='re_he'>
                            <div class='rev_to_me'>
                              <h5><i class="fa-regular fa-user c_lg"></i> {{ $user->name }}</h5>
                              <p><i class="fa-solid fa-location-arrow c_lg"></i>{{ $user->city }} , {{ $user->country }}</p>     
                            </div>
                          </div>
                          
                          <h4 class='m-0'>{{ $user->title }}</h4>
                          <p>{!! $user->description !!} <a href='.' class='c_lg'>read more <span class='c_lp'><i class="fa-regular fa-circle-right"></i></span></a></p>   
    
                          <div class='rev_bo_me'>
                            <div class='br_de_ra'>
                              @php $rating = DB::table('user_review')->Where('broker_id', $broker->id)->get()->avg('rating'); @endphp
                              <i class="fa-regular fa-star c_lp"></i>
                             {{$rating}}
                            </div>
                            <p>{{ Carbon\Carbon::create($user->updated_at)->format('j M, Y') }}</p>
                          </div>       
                        </div>
                        @endforeach  
                       
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  





        
        
   

@include ('layouts.footer')

    <script type="text/javascript">
        // Foxed a sidebar 
        var topLimit = $('#bar-fixed').offset().top;
            $(window).scroll(function() {
              //console.log(topLimit <= $(window).scrollTop())
              if (topLimit <= $(window).scrollTop()) {
                $('#bar-fixed').addClass('stickIt')
              } else {
                $('#bar-fixed').removeClass('stickIt')
              }
            })


        // Smooth scroll for the navigation menu and links with .scrollto classes
          var scrolltoOffset = $('#mymenu').outerHeight() - 340;
          $(document).on('click', '.nav-menu a, .mobile-nav a, .scrollto', function(e) {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
              var target = $(this.hash);
              if (target.length) {
                e.preventDefault();

                var scrollto = target.offset().top - scrolltoOffset;

                if ($(this).attr("href") == '#mymenu') {
                  scrollto = 0;
                }

                $('html, body').animate({
                  scrollTop: scrollto
                }, 1500, 'easeInOutExpo');

                if ($(this).parents('.nav-menu, .mobile-nav').length) {
                  $('.nav-menu .active-item, .mobile-nav .active-item').removeClass('active-item');
                  $(this).closest('li').addClass('active-item');
                }

                if ($('body').hasClass('mobile-nav-active')) {
                  $('body').removeClass('mobile-nav-active');
                  $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
                  $('.mobile-nav-overly').fadeOut();
                }
                return false;
              }
            }
          });

    </script>





 <!-- script for faq section -->
<script>
            var acordion = document.getElementsByClassName('accordion');

            var i;
            var len = acordion.length;
            for(i = 0; i<len; i++){
            acordion[i].addEventListener('click', function(){
            this.classList.toggle('active');
            var panal = this.nextElementSibling;
            if(panal.style.maxHeight){
                panal.style.maxHeight = null;
            }else{
                panal.style.maxHeight = panal.scrollHeight + 'px';
            }
            })
            }

</script>


{{-- @if(!empty($faq->q_1))
<div class="accordion">
    <h5>{{ $faq->q_1 }}</h5>
    <i class="fa fa-minus"></i>
    <i class="fa fa-plus"></i>
</div>
<div class="panal">
    <p>{!! $faq->ans_1 !!}</p>
</div>
@endif --}}