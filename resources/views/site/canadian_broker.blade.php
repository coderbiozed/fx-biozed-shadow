@include ('layouts.header')

@include('layouts.big-banner')

<section class="sec_to_ten_bro">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class='sec_top'>
                  <?php $count = $canadian_brokers->count(); ?>
                  <h2 class='sec_head'><span class='br_sp'>Top <?php echo  $count ?></span> Canadian Forex Brokers In The World<span class='c_lp'>!</span></h2>
                    <p class='sec_desc'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo labore officiis distinctio tempore magni dolor earum architecto dolorem odio et. Repudiandae vel explicabo laboriosam, nostrum voluptatibus ipsa earum deleniti amet corrupti. Cupiditate eius sequi repellat quae quisquam, est incidunt libero fugit corporis reprehenderit ipsum animi pariatur soluta recusandae minima nulla.</p>
                    <p class='sec_desc'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis eius voluptate quibusdam ducimus, nulla officiis rem rerum, odit tempora minus, autem dolor eligendi repellendus cumque?</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class='br_ta_main'>
                    <div>
                      <h3><span class='hm_sp'>Canadian</span> forex brokers</h3>
                    </div>
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
                            @foreach ($canadian_brokers as $key=>$broker)
                            <tr>
                              <td>{{++$key}}.</td>
                              <td><img src="{{ asset('images/' . json_decode($broker->main_image)[0]) }}" alt="img" class='td_br_lo'></td>
                              <td>Welcome Bonus</td>
                              <td><span class="c_lg">$</span>{{ $broker->min_trade}}</td>
                              <td>{{ $broker->max_leverage}}</td>
                              <td>Floating</td>
                              <td>{{ $broker->info}}</td>
                              <td>
                                <div class="td_align">
                                  <i class="fa-regular fa-star c_lg"></i>
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

@include ('layouts.footer')

