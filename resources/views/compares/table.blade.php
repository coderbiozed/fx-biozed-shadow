<div class="table-responsive">
    <table class="table" id="compares-table">
        <thead>
            <tr>
                <!-- <th>Broker Id</th> -->
        <th>Broker Name</th>
        <th>Site Link</th>
        <th>Headquarters</th>
        <th>Broker Type</th>
        <th>Founded</th>
        <th>Regulated</th>
        <!-- <th>Office In</th>
        <th>Support Lang</th>
        <th>Account Currencies</th>
        <th>Typical Spread</th>
        <th>Eur Usd</th>
        <th>Gbp Usd</th>
        <th>Usd Jpy</th>
        <th>Min Deposit</th>
        <th>Max Leverage</th>
        <th>Min Contact</th>
        <th>Number Pairs</th>
        <th>Hedging</th>
        <th>Scalping</th>
        <th>Interest Margin</th>
        <th>Islamic Account</th>
        <th>Traders Usa</th>
        <th>Ecn Stp Account</th>
        <th>Commission Stp</th>
        <th>Platforms Offered</th>
        <th>One Click</th>
        <th>Email Alerts</th>
        <th>Mob Alerts</th>
        <th>Server Time</th>
        <th>Demo Expiry</th>
        <th>Vps Offered</th>
        <th>Cfd</th>
        <th>Metals</th>
        <th>Oil</th>
        <th>Indices</th>
        <th>Stocks</th>
        <th>Futures</th>
        <th>Binary Options</th> -->
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($compares as $compare)
            <tr>
                <!-- <td>{{ $compare->broker_id }}</td> -->
            <td>{{ $compare->broker_name }}</td>
            <td>{{ $compare->site_link }}</td>
            <td>{{ $compare->headquarters }}</td>
            <td>{{ $compare->broker_type }}</td>
            <td>{{ $compare->founded }}</td>
            <td>{{ $compare->regulated }}</td>
            <!-- <td>{{ $compare->office_in }}</td>
            <td>{{ $compare->support_lang }}</td>
            <td>{{ $compare->account_currencies }}</td>
            <td>{{ $compare->typical_spread }}</td>
            <td>{{ $compare->eur_usd }}</td>
            <td>{{ $compare->gbp_usd }}</td>
            <td>{{ $compare->usd_jpy }}</td>
            <td>{{ $compare->min_deposit }}</td>
            <td>{{ $compare->max_leverage }}</td>
            <td>{{ $compare->min_contact }}</td>
            <td>{{ $compare->number_pairs }}</td>
            <td>{{ $compare->hedging }}</td>
            <td>{{ $compare->scalping }}</td>
            <td>{{ $compare->interest_margin }}</td>
            <td>{{ $compare->islamic_account }}</td>
            <td>{{ $compare->traders_usa }}</td>
            <td>{{ $compare->ecn_stp_account }}</td>
            <td>{{ $compare->commission_stp }}</td>
            <td>{{ $compare->platforms_offered }}</td>
            <td>{{ $compare->one_click }}</td>
            <td>{{ $compare->email_alerts }}</td>
            <td>{{ $compare->mob_alerts }}</td>
            <td>{{ $compare->server_time }}</td>
            <td>{{ $compare->demo_expiry }}</td>
            <td>{{ $compare->vps_offered }}</td>
            <td>{{ $compare->cfd }}</td>
            <td>{{ $compare->metals }}</td>
            <td>{{ $compare->oil }}</td>
            <td>{{ $compare->indices }}</td>
            <td>{{ $compare->stocks }}</td>
            <td>{{ $compare->futures }}</td>
            <td>{{ $compare->binary_options }}</td> -->
                <td width="120">
                    {!! Form::open(['route' => ['compares.destroy', $compare->id], 'method' => 'delete']) !!}
                    <div class='btn-group' style="display: flex">
                        <a href="{{ route('compares.show', [$compare->id]) }}" class='btn btn-info btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('compares.edit', [$compare->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
