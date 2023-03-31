<!-- Broker Id Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('broker_id', 'Broker Id:') !!}
    {!! Form::number('broker_id', null, ['class' => 'form-control']) !!}
</div> -->

<!-- Broker Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('broker_name', 'Broker Name:') !!}
    {!! Form::select('broker_name', $brokerReviews, null, ['class' => 'form-control','placeholder' => 'Choose broker ...']) !!}
</div>

<!-- Site Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('site_link', 'Site Link:') !!}
    {!! Form::text('site_link', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Headquarters Field -->
<div class="form-group col-sm-6">
    {!! Form::label('headquarters', 'Headquarters:') !!}
    {!! Form::text('headquarters', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Broker Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('broker_type', 'Broker Type:') !!}
    {!! Form::text('broker_type', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Founded Field -->
<div class="form-group col-sm-6">
    {!! Form::label('founded', 'Founded:') !!}
    {!! Form::text('founded', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Regulated Field -->
<div class="form-group col-sm-6">
    {!! Form::label('regulated', 'Regulated:') !!}
    {!! Form::text('regulated', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Office In Field -->
<div class="form-group col-sm-6">
    {!! Form::label('office_in', 'Office In:') !!}
    {!! Form::text('office_in', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Support Lang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('support_lang', 'Support Lang:') !!}
    {!! Form::text('support_lang', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Account Currencies Field -->
<div class="form-group col-sm-6">
    {!! Form::label('account_currencies', 'Account Currencies:') !!}
    {!! Form::text('account_currencies', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Typical Spread Field -->
<div class="form-group col-sm-6">
    {!! Form::label('typical_spread', 'Typical Spread:') !!}
    {!! Form::text('typical_spread', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Eur Usd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('eur_usd', 'Eur Usd:') !!}
    {!! Form::text('eur_usd', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Gbp Usd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gbp_usd', 'Gbp Usd:') !!}
    {!! Form::text('gbp_usd', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Usd Jpy Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usd_jpy', 'Usd Jpy:') !!}
    {!! Form::text('usd_jpy', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Min Deposit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('min_deposit', 'Min Deposit:') !!}
    {!! Form::text('min_deposit', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Max Leverage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('max_leverage', 'Max Leverage:') !!}
    {!! Form::text('max_leverage', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Min Contact Field -->
<div class="form-group col-sm-6">
    {!! Form::label('min_contact', 'Min Contact:') !!}
    {!! Form::text('min_contact', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Number Pairs Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number_pairs', 'Number Pairs:') !!}
    {!! Form::text('number_pairs', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Commission Stp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('commission_stp', 'Commission Stp:') !!}
    {!! Form::text('commission_stp', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Hedging Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('hedging', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('hedging', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('hedging', 'Hedging', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Scalping Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('scalping', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('scalping', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('scalping', 'Scalping', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Interest Margin Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('interest_margin', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('interest_margin', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('interest_margin', 'Interest Margin', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Islamic Account Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('islamic_account', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('islamic_account', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('islamic_account', 'Islamic Account', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Traders Usa Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('traders_usa', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('traders_usa', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('traders_usa', 'Traders Usa', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Ecn Stp Account Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('ecn_stp_account', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('ecn_stp_account', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('ecn_stp_account', 'Ecn Stp Account', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Platforms Offered Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('platforms_offered', 'Platforms Offered:') !!}
    {!! Form::textarea('platforms_offered', null, ['class' => 'form-control']) !!}
</div>

<!-- One Click Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('one_click', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('one_click', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('one_click', 'One Click', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Email Alerts Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('email_alerts', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('email_alerts', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('email_alerts', 'Email Alerts', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Mob Alerts Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('mob_alerts', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('mob_alerts', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('mob_alerts', 'Mob Alerts', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Vps Offered Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('vps_offered', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('vps_offered', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('vps_offered', 'Vps Offered', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Server Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('server_time', 'Server Time:') !!}
    {!! Form::text('server_time', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Demo Expiry Field -->
<div class="form-group col-sm-6">
    {!! Form::label('demo_expiry', 'Demo Expiry:') !!}
    {!! Form::text('demo_expiry', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>


<!-- Cfd Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('cfd', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('cfd', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('cfd', 'Cfd', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Metals Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('metals', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('metals', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('metals', 'Metals', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Oil Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('oil', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('oil', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('oil', 'Oil', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Indices Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('indices', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('indices', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('indices', 'Indices', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Stocks Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('stocks', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('stocks', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('stocks', 'Stocks', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Futures Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('futures', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('futures', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('futures', 'Futures', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Binary Options Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('binary_options', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('binary_options', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('binary_options', 'Binary Options', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
