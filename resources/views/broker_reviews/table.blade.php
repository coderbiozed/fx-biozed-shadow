<div class="table-responsive">
    <table class="table" id="brokerReviews-table">
        <thead>
            <tr>
                <th>Main Image</th>
        <th>Logo Image</th>
        <!-- <th>Shot Description</th> -->
        <th>Broker Name</th>
       
        <th>Publish</th>
        <!-- <th>Top Broker</th> -->
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($brokerReviews as $brokerReview)
            <tr>
                <td><img src="{{ asset('images/' . json_decode($brokerReview->main_image)[0]) }}" width="50" alt=""></td>
            <td><img src="{{ asset('images/' . json_decode($brokerReview->logo_image)[0]) }}" width="50" alt=""></td>
         
            <td>{{ $brokerReview->broker_name }}</td>
           
            <td>{!! ($brokerReview->publish == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</td>
            <!-- <td>{{ $brokerReview->top_broker }}</td> -->
                <td width="120">
                    {!! Form::open(['route' => ['brokerReviews.destroy', $brokerReview->id], 'method' => 'delete']) !!}
                    <div class='btn-group' style="display: flex">
                        <a href="{{ route('brokerReviews.show', [$brokerReview->id]) }}" class='btn btn-info btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('brokerReviews.edit', [$brokerReview->id]) }}" class='btn btn-default btn-xs'>
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

<span>
    {{$brokerReviews->links()}}
</span>


<!-- Featured Broker -->
<h1 style="padding:70px 0px 20px 20px;color:#03b97c !important;text-align:center;box-shadow:inset 10px 10px 10px rgb(0 0 0 / 5%), 15px 25px 10px rgb(0 0 0 / 5%), 15px 20px 20px rgb(0 0 0 / 5%), inset -10px -10px 15px rgb(255 255 255 / 5%);text-align:center;">Top 10 Forex Brokers In The World! </h1>
<div class="table-responsive">
    <table class="table" id="brokerReviews-table">
        <thead>
            <tr>
                <th>Main Image</th>
        <th>Logo Image</th>        
        <th>Broker Name</th>        
        <th>Featured Broker</th>        
        <th>Publish</th>
        <!-- <th>Top Broker</th> -->
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($featuredBrokers as $brokerReview)
            <tr>
                <td><img src="{{ asset('images/' . json_decode($brokerReview->main_image)[0]) }}" width="50" alt=""></td>
            <td><img src="{{ asset('images/' . json_decode($brokerReview->logo_image)[0]) }}" width="50" alt=""></td>            
            <td>{{ $brokerReview->broker_name }}</td>            
            <td>{!! ($brokerReview->featured_broker == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</td>
            <td>{!! ($brokerReview->publish == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</td>
            <!-- <td>{{ $brokerReview->top_broker }}</td> -->
                <td width="120">
                    {!! Form::open(['route' => ['brokerReviews.destroy', $brokerReview->id], 'method' => 'delete']) !!}
                    <div class='btn-group' style="display: flex">
                        <a href="{{ route('brokerReviews.show', [$brokerReview->id]) }}" class='btn btn-info btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('brokerReviews.edit', [$brokerReview->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- Brokers -->
<h1 style="padding:70px 0px 20px 20px;color:#03b97c !important;text-align:center;box-shadow:inset 10px 10px 10px rgb(0 0 0 / 5%), 15px 25px 10px rgb(0 0 0 / 5%), 15px 20px 20px rgb(0 0 0 / 5%), inset -10px -10px 15px rgb(255 255 255 / 5%)">Country wise broker list In The World!</h1>
<div class="table-responsive">
    <table class="table" id="brokerReviews-table">
        <thead>
            <tr>
                <th>Main Image</th>
                <th>Logo Image</th>        
                <th>Broker Name</th> 
                <th>Asian Broker</th>       
                <th>Australian Broker</th> 
                <th>African Broker</th>
                <th>Canadian Broker</th>
                <th>Europian Broker</th>
                <th>Middle east Broker</th>
                <th>US Broker</th>
                <th>UK Broker</th>       
                <th>Publish</th>        
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($australian_brokers as $brokerReview)
            <tr>
                <td><img src="{{ asset('images/' . json_decode($brokerReview->main_image)[0]) }}" width="50" alt=""></td>
                <td><img src="{{ asset('images/' . json_decode($brokerReview->logo_image)[0]) }}" width="50" alt=""></td>            
                <td>{{ $brokerReview->broker_name }}</td>            
                <td>{!! ($brokerReview->asian_broker == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</td>
                <td>{!! ($brokerReview->australian_broker == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</td>
                <td>{!! ($brokerReview->african_broker == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</td>
                <td>{!! ($brokerReview->canadian_broker == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</td>
                <td>{!! ($brokerReview->europian_broker == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</td>
                <td>{!! ($brokerReview->middle_east_broker == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</td>
                <td>{!! ($brokerReview->us_broker == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</td>
                <td>{!! ($brokerReview->uk_broker == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</td>
                <td>{!! ($brokerReview->publish == 1) ? '<b class="text-success">Yes</b>' : '<b class="text-danger">No</b>' !!}</td>
                <td width="120">
                    {!! Form::open(['route' => ['brokerReviews.destroy', $brokerReview->id], 'method' => 'delete']) !!}
                    <div class='btn-group' style="display: flex">
                        <a href="{{ route('brokerReviews.show', [$brokerReview->id]) }}" class='btn btn-info btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('brokerReviews.edit', [$brokerReview->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>