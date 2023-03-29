<!-- Main Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('main_image', 'Main Image:') !!}
    <!-- {!! Form::text('main_image', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!} -->

    @csrf
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="user-image mb-3 text-center">
                <div class="imgPreview-main"> </div>
            </div>            

            <div class="custom-file">
                <input type="file" name="imageMain[]" class="custom-file-input" id="main_image" multiple="multiple">
                <label class="custom-file-label" for="images">Choose image (Size: 1000 x 750)</label>
            </div>
</div>

<!-- Logo Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('logo_image', 'Logo Image:') !!}
    <!--{!! Form::text('logo_image', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!} -->

    @csrf
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="user-image mb-3 text-center">
                <div class="imgPreview-logo"> </div>
            </div>            

            <div class="custom-file">
                <input type="file" name="imageLogo[]" class="custom-file-input" id="logo_image" multiple="multiple">
                <label class="custom-file-label" for="images">Choose image (Size: 250 x 60)</label>
            </div>
</div>

<!-- Shot Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('shot_description', 'Shot Description:') !!}
    {!! Form::textarea('shot_description', null, ['class' => 'ckeditor form-control']) !!}
</div>

<!-- Broker Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('broker_name', 'Broker Name:') !!}
    {!! Form::text('broker_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Info Field -->
<div class="form-group col-sm-6">
    {!! Form::label('info', 'Info/Regulation:') !!}
    {!! Form::text('info', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Visit Site Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visit_site', 'Visit Site:') !!}
    {!! Form::text('visit_site', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Open Live Field -->
<div class="form-group col-sm-6">
    {!! Form::label('open_live', 'Open Live:') !!}
    {!! Form::text('open_live', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Open Demo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('open_demo', 'Open Demo:') !!}
    {!! Form::text('open_demo', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Pros Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('pros', 'Pros:') !!}
    {!! Form::textarea('pros', null, ['class' => 'ckeditor form-control']) !!}
</div>

<!-- Cons Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('cons', 'Cons:') !!}
    {!! Form::textarea('cons', null, ['class' => 'ckeditor form-control']) !!}
</div>

<!-- Introduction Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('introduction', 'Introduction:') !!}
    {!! Form::textarea('introduction', null, ['class' => 'ckeditor form-control']) !!}
</div>

<!-- Min Trade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('min_trade', 'Min Trade/lots:') !!}
    {!! Form::text('min_trade', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Establish Field -->
<div class="form-group col-sm-6">
    {!! Form::label('establish', 'Establish:') !!}
    {!! Form::text('establish', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Contact Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contact', 'Contact:') !!}
    {!! Form::text('contact', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Regional Ofc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('regional_ofc', 'Regional Office:') !!}
    {!! Form::text('regional_ofc', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Prohibited Countries Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prohibited_countries', 'Prohibited Countries:') !!}
    {!! Form::text('prohibited_countries', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Max Leverage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('max_leverage', 'Max Leverage:') !!}
    {!! Form::text('max_leverage', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Trading Platform Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trading_platform', 'Trading Platform:') !!}
    {!! Form::text('trading_platform', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Web Trading Field -->
<div class="form-group col-sm-6">
    {!! Form::label('web_trading', 'Web Trading:') !!}
    {!! Form::text('web_trading', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Mob Trading Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mob_trading', 'Mob Trading:') !!}
    {!! Form::text('mob_trading', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Currencies Field -->
<div class="form-group col-sm-6">
    {!! Form::label('currencies', 'Currencies:') !!}
    {!! Form::text('currencies', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cryptocurrencies Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cryptocurrencies', 'Cryptocurrencies:') !!}
    {!! Form::text('cryptocurrencies', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Cfd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cfd', 'Cfd:') !!}
    {!! Form::text('cfd', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Min Open Live Field -->
<div class="form-group col-sm-6">
    {!! Form::label('min_open_live', 'Min Open Live/Deposite:') !!}
    {!! Form::text('min_open_live', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Robots Field -->
<div class="form-group col-sm-6">
    {!! Form::label('robots', 'Robots:') !!}
    {!! Form::text('robots', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- News Spike Field -->
<div class="form-group col-sm-6">
    {!! Form::label('news_spike', 'News Spike:') !!}
    {!! Form::text('news_spike', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Scalping Field -->
<div class="form-group col-sm-6">
    {!! Form::label('scalping', 'Scalping:') !!}
    {!! Form::text('scalping', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Mam Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mam', 'Mam:') !!}
    {!! Form::text('mam', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Pamm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pamm', 'Pamm:') !!}
    {!! Form::text('pamm', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Zulu Trade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zulu_trade', 'Zulu Trade:') !!}
    {!! Form::text('zulu_trade', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Deposit Method Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('deposit_method', 'Deposit Method:') !!}
    {!! Form::textarea('deposit_method', null, ['class' => 'ckeditor form-control']) !!}
</div>

<!-- Withdrawal Method Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('withdrawal_method', 'Withdrawal Method:') !!}
    {!! Form::textarea('withdrawal_method', null, ['class' => 'ckeditor form-control']) !!}
</div>

<!-- Trading Conditions Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('trading_conditions', 'Trading Conditions:') !!}
    {!! Form::textarea('trading_conditions', null, ['class' => 'ckeditor form-control']) !!}
</div>

<!-- Products Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('products', 'Products:') !!}
    {!! Form::textarea('products', null, ['class' => 'ckeditor form-control']) !!}
</div>

<!-- Regulation Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('regulation', 'Regulation:') !!}
    {!! Form::textarea('regulation', null, ['class' => 'ckeditor form-control']) !!}
</div>

<!-- Platforms Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('platforms', 'Platforms:') !!}
    {!! Form::textarea('platforms', null, ['class' => 'ckeditor form-control']) !!}
</div>

<!-- Mobile Trading Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('mobile_trading', 'Mobile Trading:') !!}
    {!! Form::textarea('mobile_trading', null, ['class' => 'ckeditor form-control']) !!}
</div>

<!-- Pricing Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('pricing', 'Bonus & Promotion:') !!}
    {!! Form::textarea('pricing', null, ['class' => 'ckeditor form-control']) !!}
</div>

<!-- Deposit Withdrawals Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('deposit_withdrawals', 'Deposit Withdrawals:') !!}
    {!! Form::textarea('deposit_withdrawals', null, ['class' => 'ckeditor form-control']) !!}
</div>

<!-- Customer Support Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('customer_support', 'Customer Support:') !!}
    {!! Form::textarea('customer_support', null, ['class' => 'ckeditor form-control']) !!}
</div>

<!-- Research Education Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('research_education', 'Research Education:') !!}
    {!! Form::textarea('research_education', null, ['class' => 'ckeditor form-control']) !!}
</div>

<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::text('country', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}

    
</div>

<!-- Top Broker Field -->
<div class="form-group col-sm-6">
    {!! Form::label('top_broker', 'Top Broker:') !!}
    {!! Form::number('top_broker', null, ['class' => 'form-control']) !!}
</div>

<!-- Featured Broker Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('featured_broker', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('featured_broker', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('featured_broker', 'Featured Broker', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- High Leverage Field -->
<!-- <div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('high_leverage', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('high_leverage', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('high_leverage', 'Most Traders Choice', ['class' => 'form-check-label']) !!}
    </div>
</div> -->


<!-- Asian Broker Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('asian_broker', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('asian_broker', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('asian_broker', 'Asian Broker', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Australian Broker Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('australian_broker', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('australian_broker', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('australian_broker', 'Austrilian Broker', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- African Broker Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('african_broker', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('african_broker', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('african_broker', 'African Broker', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Canadian Broker Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('canadian_broker', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('canadian_broker', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('canadian_broker', 'Canadian Broker', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Europian Broker Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('europian_broker', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('europian_broker', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('europian_broker', 'Europian Broker', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Middle East Broker Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('middle_east_broker', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('middle_east_broker', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('middle_east_broker', 'Middle East Broker', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- US East Broker Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('us_broker', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('us_broker', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('us_broker', 'US Broker', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- UK  Broker Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('uk_broker', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('uk_broker', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('uk_broker', 'UK Broker', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Trading Platform Review Field -->
{{-- <div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('trading_platform_review', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('trading_platform_review', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('trading_platform_review', 'Best High Leverage', ['class' => 'form-check-label']) !!}
    </div>
</div> --}}


<!-- Publish Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('publish', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('publish', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('publish', 'Publish', ['class' => 'form-check-label']) !!}
    </div>
</div>