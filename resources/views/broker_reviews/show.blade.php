@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Broker Review Details</h1>
                </div>
                <div class="col-sm-5">
                    <a class="btn btn-success float-right"
                       href="{{ route('brokerReviews.edit', [$brokerReview->id]) }}">
                        Update
                    </a>
                </div>
                <div class="col-sm-1">
                    <a class="btn btn-default float-right"
                       href="{{ route('brokerReviews.index') }}">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">

            <div class="card-body">
                <div class="row">
                    @include('broker_reviews.show_fields')
                </div>
            </div>

        </div>
    </div>
@endsection
