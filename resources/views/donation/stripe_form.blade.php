@extends('layouts.master')

@section('content')
    <div class="container">
        <div class=" justify-content-center">
            <div class="col-md-8 mt-5 mb-5">
                <div class="panel-heading display-table">
                    <div class=" display-tr">
                        <h3 class="panel-title display-td">Payment Details</h3>
                        <div class="display-td">
                            <img class="img-responsive pull-right" src="{{ asset('img/static-img/Powered by Stripe - blurple.svg') }}" style="width: 100px;">
                        </div>
                    </div>
                </div>
                <div class="panel-body">

                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif

                    <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation"
                        data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                        @csrf

                        <div class='form-group '>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label> <input class='form-control' size='4'
                                    type='text' required>
                            </div>
                        </div>

                        <div class='form-group '>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Card Number</label> <input autocomplete='off'
                                    class='form-control card-number' size='20' type='text' required>
                            </div>
                        </div>

                        <div class='form-group row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                    class='form-control card-cvc' placeholder='ex. 311' size='4' type='text' required>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Month</label> <input
                                    class='form-control card-expiry-month' placeholder='MM' size='2' type='text' required>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label> <input
                                    class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text' required>
                            </div>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group required'>
                            <label class='control-label'>Amount</label> <input
                                class='form-control card-amount' placeholder='$100' size='4' name="amount" type='number' required>
                        </div>

                        <div class="">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    @endsection
