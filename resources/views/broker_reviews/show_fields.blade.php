<!-- Main Image Field -->
<div class="col-sm-12">
    {!! Form::label('main_image', 'Main Image:') !!}
    <p><img src="{{ asset('images/' . json_decode($brokerReview->main_image)[0]) }}" width="300" alt=""></p>
</div>

<!-- Logo Image Field -->
<div class="col-sm-12">
    {!! Form::label('logo_image', 'Logo Image:') !!}
    <p><img src="{{ asset('images/' . json_decode($brokerReview->logo_image)[0]) }}" width="150" alt=""></p>
</div>

<!-- Shot Description Field -->
<div class="col-sm-12">
    {!! Form::label('shot_description', 'Shot Description:') !!}
    <p>{!! $brokerReview->shot_description !!}</p>
</div>

<!-- Broker Name Field -->
<div class="col-sm-12">
    {!! Form::label('broker_name', 'Broker Name:') !!}
    <p>{{ $brokerReview->broker_name }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $brokerReview->title }}</p>
</div>

<!-- Info Field -->
<div class="col-sm-12">
    {!! Form::label('info', 'Info/Regulation:') !!}
    <p>{{ $brokerReview->info }}</p>
</div>

<!-- Visit Site Field -->
<div class="col-sm-12">
    {!! Form::label('visit_site', 'Visit Site:') !!}
    <p>{{ $brokerReview->visit_site }}</p>
</div>

<!-- Open Live Field -->
<div class="col-sm-12">
    {!! Form::label('open_live', 'Open Live:') !!}
    <p>{{ $brokerReview->open_live }}</p>
</div>

<!-- Open Demo Field -->
<div class="col-sm-12">
    {!! Form::label('open_demo', 'Open Demo:') !!}
    <p>{{ $brokerReview->open_demo }}</p>
</div>

<!-- Pros Field -->
<div class="col-sm-12">
    {!! Form::label('pros', 'Pros:') !!}
    <p>{!! $brokerReview->pros !!}</p>
</div>

<!-- Cons Field -->
<div class="col-sm-12">
    {!! Form::label('cons', 'Cons:') !!}
    <p>{!! $brokerReview->cons !!}</p>
</div>

<!-- Introduction Field -->
<div class="col-sm-12">
    {!! Form::label('introduction', 'Introduction:') !!}
    <p>{!! $brokerReview->introduction !!}</p>
</div>

<!-- Min Trade Field -->
<div class="col-sm-12">
    {!! Form::label('min_trade', 'Min Trade:lots') !!}
    <p>{{ $brokerReview->min_trade }}</p>
</div>

<!-- Establish Field -->
<div class="col-sm-12">
    {!! Form::label('establish', 'Establish:') !!}
    <p>{{ $brokerReview->establish }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-12">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $brokerReview->address }}</p>
</div>

<!-- Contact Field -->
<div class="col-sm-12">
    {!! Form::label('contact', 'Contact:') !!}
    <p>{{ $brokerReview->contact }}</p>
</div>

<!-- Regional Ofc Field -->
<div class="col-sm-12">
    {!! Form::label('regional_ofc', 'Regional Office:') !!}
    <p>{{ $brokerReview->regional_ofc }}</p>
</div>

<!-- Prohibited Countries Field -->
<div class="col-sm-12">
    {!! Form::label('prohibited_countries', 'Prohibited Countries:') !!}
    <p>{{ $brokerReview->prohibited_countries }}</p>
</div>

<!-- Max Leverage Field -->
<div class="col-sm-12">
    {!! Form::label('max_leverage', 'Max Leverage:') !!}
    <p>{{ $brokerReview->max_leverage }}</p>
</div>

<!-- Trading Platform Field -->
<div class="col-sm-12">
    {!! Form::label('trading_platform', 'Trading Platform:') !!}
    <p>{{ $brokerReview->trading_platform }}</p>
</div>

<!-- Web Trading Field -->
<div class="col-sm-12">
    {!! Form::label('web_trading', 'Web Trading:') !!}
    <p>{{ $brokerReview->web_trading }}</p>
</div>

<!-- Mob Trading Field -->
<div class="col-sm-12">
    {!! Form::label('mob_trading', 'Mob Trading:') !!}
    <p>{{ $brokerReview->mob_trading }}</p>
</div>

<!-- Currencies Field -->
<div class="col-sm-12">
    {!! Form::label('currencies', 'Currencies:') !!}
    <p>{{ $brokerReview->currencies }}</p>
</div>

<!-- Cryptocurrencies Field -->
<div class="col-sm-12">
    {!! Form::label('cryptocurrencies', 'Cryptocurrencies:') !!}
    <p>{{ $brokerReview->cryptocurrencies }}</p>
</div>

<!-- Cfd Field -->
<div class="col-sm-12">
    {!! Form::label('cfd', 'Cfd:') !!}
    <p>{{ $brokerReview->cfd }}</p>
</div>

<!-- Min Open Live Field -->
<div class="col-sm-12">
    {!! Form::label('min_open_live', 'Min Open Live/Deposite:') !!}
    <p>{{ $brokerReview->min_open_live }}</p>
</div>

<!-- Robots Field -->
<div class="col-sm-12">
    {!! Form::label('robots', 'Robots:') !!}
    <p>{{ $brokerReview->robots }}</p>
</div>

<!-- News Spike Field -->
<div class="col-sm-12">
    {!! Form::label('news_spike', 'News Spike:') !!}
    <p>{{ $brokerReview->news_spike }}</p>
</div>

<!-- Scalping Field -->
<div class="col-sm-12">
    {!! Form::label('scalping', 'Scalping:') !!}
    <p>{{ $brokerReview->scalping }}</p>
</div>

<!-- Mam Field -->
<div class="col-sm-12">
    {!! Form::label('mam', 'Mam:') !!}
    <p>{{ $brokerReview->mam }}</p>
</div>

<!-- Pamm Field -->
<div class="col-sm-12">
    {!! Form::label('pamm', 'Pamm:') !!}
    <p>{{ $brokerReview->pamm }}</p>
</div>

<!-- Zulu Trade Field -->
<div class="col-sm-12">
    {!! Form::label('zulu_trade', 'Zulu Trade:') !!}
    <p>{{ $brokerReview->zulu_trade }}</p>
</div>

<!-- Deposit Method Field -->
<div class="col-sm-12">
    {!! Form::label('deposit_method', 'Deposit Method:') !!}
    <p>{!! $brokerReview->deposit_method !!}</p>
</div>

<!-- Withdrawal Method Field -->
<div class="col-sm-12">
    {!! Form::label('withdrawal_method', 'Withdrawal Method:') !!}
    <p>{!! $brokerReview->withdrawal_method !!}</p>
</div>

<!-- Trading Conditions Field -->
<div class="col-sm-12">
    {!! Form::label('trading_conditions', 'Trading Conditions:') !!}
    <p>{!! $brokerReview->trading_conditions !!}</p>
</div>

<!-- Products Field -->
<div class="col-sm-12">
    {!! Form::label('products', 'Products:') !!}
    <p>{!! $brokerReview->products !!}</p>
</div>

<!-- Regulation Field -->
<div class="col-sm-12">
    {!! Form::label('regulation', 'Regulation:') !!}
    <p>{!! $brokerReview->regulation !!}</p>
</div>

<!-- Platforms Field -->
<div class="col-sm-12">
    {!! Form::label('platforms', 'Platforms:') !!}
    <p>{!! $brokerReview->platforms !!}</p>
</div>

<!-- Mobile Trading Field -->
<div class="col-sm-12">
    {!! Form::label('mobile_trading', 'Mobile Trading:') !!}
    <p>{!! $brokerReview->mobile_trading !!}</p>
</div>

<!-- Pricing Field -->
<div class="col-sm-12">
    {!! Form::label('pricing', 'Pricing:') !!}
    <p>{!! $brokerReview->pricing !!}</p>
</div>

<!-- Deposit Withdrawals Field -->
<div class="col-sm-12">
    {!! Form::label('deposit_withdrawals', 'Deposit Withdrawals:') !!}
    <p>{!! $brokerReview->deposit_withdrawals !!}</p>
</div>

<!-- Customer Support Field -->
<div class="col-sm-12">
    {!! Form::label('customer_support', 'Customer Support:') !!}
    <p>{!! $brokerReview->customer_support !!}</p>
</div>

<!-- Research Education Field -->
<div class="col-sm-12">
    {!! Form::label('research_education', 'Research Education:') !!}
    <p>{!! $brokerReview->research_education !!}</p>
</div>

<!-- Country Field -->
<div class="col-sm-12">
    {!! Form::label('country', 'Country:') !!}
    <p>{{ $brokerReview->country }}</p>
</div>

<!-- Featured Broker Field -->
<div class="col-sm-12">
    {!! Form::label('featured_broker', 'Featured Broker:') !!}
    <p>{!! ($brokerReview->featured_broker == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</p>
</div>

<!-- High Leverage Field -->
<div class="col-sm-12" >
    {!! Form::label('high_leverage', 'Most Traders Choice:') !!}
    <p>{!! ($brokerReview->high_leverage == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</p>
</div>

<!-- Asian Broker Field -->
<div class="col-sm-12">
    {!! Form::label('asian_broker', 'Best ECN/STP:') !!}
    <p>{!! ($brokerReview->asian_broker == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</p>
</div>

<!-- Australian Broker Field -->
<div class="col-sm-12">
    {!! Form::label('australian_broker', 'Best ECN/STP:') !!}
    <p>{!! ($brokerReview->australian_broker == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</p>
</div>

<!-- African Broker Field -->
<div class="col-sm-12">
    {!! Form::label('african_broker', 'Best ECN/STP:') !!}
    <p>{!! ($brokerReview->african_broker == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</p>
</div>


<!-- Canadian Broker Field -->
<div class="col-sm-12">
    {!! Form::label('canadian_broker', 'Best ECN/STP:') !!}
    <p>{!! ($brokerReview->canadian_broker == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</p>
</div>


<!-- Europian Broker Field -->
<div class="col-sm-12">
    {!! Form::label('europian_broker', 'Best ECN/STP:') !!}
    <p>{!! ($brokerReview->europian_broker == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</p>
</div>

<!-- Middle East Broker Field -->
<div class="col-sm-12">
    {!! Form::label('middle_east_broker', 'Best ECN/STP:') !!}
    <p>{!! ($brokerReview->middle_east_broker == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</p>
</div>

<!-- US Broker Field -->
<div class="col-sm-12">
    {!! Form::label('us_broker', 'Best ECN/STP:') !!}
    <p>{!! ($brokerReview->us_broker == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</p>
</div>

<!-- UK Broker Field -->
<div class="col-sm-12">
    {!! Form::label('uk_broker', 'Best ECN/STP:') !!}
    <p>{!! ($brokerReview->uk_broker == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</p>
</div>

<!-- Trading Platform Review Field -->
{{-- <div class="col-sm-12">
    {!! Form::label('trading_platform_review', 'Best High Leverage:') !!}
    <p>{!! ($brokerReview->trading_platform_review == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</p>
</div> --}}

<!-- Publish Field -->
<div class="col-sm-12">
    {!! Form::label('publish', 'Publish:') !!}
    <p>{!! ($brokerReview->publish == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</p>
</div>

<!-- Top Broker Field -->
<div class="col-sm-12">
    {!! Form::label('top_broker', 'Top Broker:') !!}
    <p>{{ $brokerReview->top_broker }}</p>
</div>

<!-- Slug Field -->
<div class="col-sm-12">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $brokerReview->slug }}</p>
</div>