@include ('layouts.header')

@include('layouts.big-banner')

<section>
    <div class="container"> 
        <div class="row">
            <div class="col-lg-12">
                <div class='sec_top'>
                    <h2 class='sec_head'><span class='br_sp'>Comparison</span> between <span class='c_lp'>{{ $compareFirst->broker_name }}</span> and <span class='c_lg'>{{ $compareWith->broker_name }}</span><span class='c_lp'>!</span></h2>
                    <p class='sec_desc'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo labore officiis distinctio tempore magni dolor earum architecto dolorem odio et. Repudiandae vel explicabo laboriosam, nostrum voluptatibus ipsa earum deleniti amet corrupti. Cupiditate eius sequi repellat quae quisquam, est incidunt libero fugit corporis reprehenderit ipsum animi pariatur soluta recusandae minima nulla.</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class='c_de_ta'>
                    <table class='top_te_br_ta mt-0'>
                        <thead>
                            <tr>
                                <th class="tr-header">Topics</th>
                                <th class="tr-header">{{ $compareFirst->broker_name }}</th>
                                <th class="tr-header">{{ $compareWith->broker_name }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Headquarters</td>
                                <td>{{ $compareFirst->headquarters }}</td>
                                <td>{{ $compareWith->headquarters }}</td>
                            </tr>
                            <tr>
                                <td>Type of Broker</td>
                                <td>{{ $compareFirst->broker_type }}</td>
                                <td>{{ $compareWith->broker_type }}</td>
                            </tr>
                            <tr>
                                <td>Founded</td>
                                <td>{{ $compareFirst->founded }}</td>
                                <td>{{ $compareWith->founded }}</td>
                            </tr>
                            <tr>
                                <td>Regulated By</td>
                                <td>{{ $compareFirst->regulated }}</td>
                                <td>{{ $compareWith->regulated }}</td>
                            </tr>
                            <tr>
                                <td>Offices In</td>
                                <td>{{ $compareFirst->office_in }}</td>
                                <td>{{ $compareWith->office_in }}</td>
                            </tr>
                            <tr>
                                <td>Supported Languages</td>
                                <td>{{ $compareFirst->support_lang }}</td>
                                <td>{{ $compareWith->support_lang }}</td>
                            </tr>
                            <tr>
                                <td>Account Currencies</td>
                                <td>{{ $compareFirst->account_currencies }}</td>
                                <td>{{ $compareWith->account_currencies }}</td>
                            </tr>
                            <tr>
                                <td>Typical Spread on Majors</td>
                                <td class="c_lg">{{ $compareFirst->typical_spread }}</td>
                                <td class="c_lg">{{ $compareWith->typical_spread }}</td>
                            </tr>
                            <tr>
                                <td>EUR/USD</td>
                                <td>{{ $compareFirst->eur_usd }}</td>
                                <td>{{ $compareWith->eur_usd }}</td>
                            </tr>
                            <tr>
                                <td>GBP/USD</td>
                                <td>{{ $compareFirst->gbp_usd }}</td>
                                <td>{{ $compareWith->gbp_usd }}</td>
                            </tr>
                            <tr>
                                <td>USD/JPY</td>
                                <td>{{ $compareFirst->usd_jpy }}</td>
                                <td>{{ $compareWith->usd_jpy }}</td>
                            </tr>
                            <tr>
                                <td>Minimum Deposit</td>
                                <td>{{ $compareFirst->min_deposit }}</td>
                                <td>{{ $compareWith->min_deposit }}</td>
                            </tr>
                            <tr>
                                <td>Maximum Leverage</td>
                                <td>{{ $compareFirst->max_leverage }}</td>
                                <td>{{ $compareWith->max_leverage }}</td>
                            </tr>
                            <tr>
                                <td>Minimum Contract Size</td>
                                <td>{{ $compareFirst->min_contact }}</td>
                                <td>{{ $compareWith->min_contact }}</td>
                            </tr>
                            <tr>
                                <td>Number of Pairs</td>
                                <td>{{ $compareFirst->number_pairs }}</td>
                                <td>{{ $compareWith->number_pairs }}</td>
                            </tr>
                            <tr>
                                <td>Hedging</td>
                                <td>{!! ($compareFirst->hedging == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                                <td>{!! ($compareWith->hedging == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                            </tr>
                            <tr>
                                <td>Scalping</td>
                                <td>{!! ($compareFirst->scalping == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                                <td>{!! ($compareWith->scalping == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                            </tr>
                            <tr>
                                <td>Interest on Margin</td>
                                <td>{!! ($compareFirst->interest_margin == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                                <td>{!! ($compareWith->interest_margin == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                            </tr>
                            <tr>
                                <td>Islamic Accounts</td>
                                <td>{!! ($compareFirst->islamic_account == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                                <td>{!! ($compareWith->islamic_account == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                            </tr>
                            <tr>
                                <td>Traders from USA</td>
                                <td>{!! ($compareFirst->traders_usa == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                                <td>{!! ($compareWith->traders_usa == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                            </tr>
                            <tr>
                                <td>ECN/STP Accounts Offered</td>
                                <td>{!! ($compareFirst->ecn_stp_account == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                                <td>{!! ($compareWith->ecn_stp_account == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                            </tr>
                            <tr>
                                <td>Commission on STP or ECN/STP</td>
                                <td>{{ $compareFirst->commission_stp }}</td>
                                <td>{{ $compareWith->commission_stp }}</td>
                            </tr>
                            <tr>
                                <td>Platforms Offered</td>
                                <td>{{ $compareFirst->platforms_offered }}</td>
                                <td>{{ $compareWith->platforms_offered }}</td>
                            </tr>
                            <tr>
                                <td>One-Click-Execution</td>
                                <td>{!! ($compareFirst->one_click == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                                <td>{!! ($compareWith->one_click == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                            </tr>
                            <tr>
                                <td>Email Alerts</td>
                                <td>{!! ($compareFirst->email_alerts == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                                <td>{!! ($compareWith->email_alerts == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                            </tr>
                            <tr>
                                <td>Mobile Alerts</td>
                                <td>{!! ($compareFirst->mob_alerts == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                                <td>{!! ($compareWith->mob_alerts == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                            </tr>
                            <tr>
                                <td>MetaTrader Server Time (winter)</td>
                                <td>{{ $compareFirst->server_time }}</td>
                                <td>{{ $compareWith->server_time }}</td>
                            </tr>
                            <tr>
                                <td>Demo Account Expiry</td>
                                <td>{{ $compareFirst->demo_expiry }}</td>
                                <td>{{ $compareWith->demo_expiry }}</td>
                            </tr>
                            <tr>
                                <td>VPS Offered</td>
                                <td>{!! ($compareFirst->vps_offered == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                                <td>{!! ($compareWith->vps_offered == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                            </tr>
                            <tr>
                                <td>CFD's</td>
                                <td>{!! ($compareFirst->cfd == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                                <td>{!! ($compareWith->cfd == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                            </tr>
                            <tr>
                                <td>Metals</td>
                                <td>{!! ($compareFirst->metals == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                                <td>{!! ($compareWith->metals == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                            </tr>
                            <tr>
                                <td>Oil</td>
                                <td>{!! ($compareFirst->oil == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                                <td>{!! ($compareWith->oil == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                            </tr>
                            <tr>
                                <td>Indices</td>
                                <td>{!! ($compareFirst->indices == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                                <td>{!! ($compareWith->indices == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                            </tr>
                            <tr>
                                <td>Stocks</td>
                                <td>{!! ($compareFirst->stocks == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                                <td>{!! ($compareWith->stocks == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                            </tr>
                            <tr>
                                <td>Futures</td>
                                <td>{!! ($compareFirst->futures == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                                <td>{!! ($compareWith->futures == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                            </tr>
                            <tr>
                                <td>Binary Options</td>
                                <td>{!! ($compareFirst->binary_options == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                                <td>{!! ($compareWith->binary_options == 1) ? '<i class="fa-solid fa-check c_lg"></i>' : '<i class="fa-solid fa-xmark c_red"></i>' !!}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@include ('layouts.footer')


   