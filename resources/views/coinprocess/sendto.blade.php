@extends('layouts.process')

@section('template_title')
    {{ trans('process.sendtoPageTitle') }}
@endsection

@section('content')

    <div class="app-wrapper">
        <div>
            <div class="container-fluid transaction-progress">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-8 col-xs-offset-2">
                            <div class="row icons">
                                <div class="col-xs-2">
                                    <img src="/images/process/green_from.png">
                                </div>
                                <div class="col-xs-2">
                                    <img src="/images/process/green_amounts.png">
                                </div>
                                <div class="col-xs-2" style="margin-left:-3px">
                                    <img src="/images/process/green_to.png">
                                </div>
                                <div class="col-xs-2">
                                    <img src="/images/process/confirm.png">
                                </div>
                                <div class="col-xs-2">
                                    <img src="/images/process/sending.png">
                                </div>
                                <div class="col-xs-2">
                                    <img src="/images/process/exchanging.png">
                                </div>
                            </div>
                            <div class="row icons">
                                <div class="col-xs-2">
                                    <span>{{ trans('process.From') }}</span>
                                </div>
                                <div class="col-xs-2">
                                    <span>{{ trans('process.Amounts') }}</span>
                                </div>
                                <div class="col-xs-2">
                                    <span>{{ trans('process.SendTo') }}</span>
                                </div>
                                <div class="col-xs-2">
                                    <span>{{ trans('process.Confirmation') }}</span>
                                </div>
                                <div class="col-xs-2">
                                    <span>{{ trans('process.Sending') }}</span>
                                </div>
                                <div class="col-xs-2">
                                    <span>{{ trans('process.Exchanging') }}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="50.099999999999994" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 50.1%;"></div>
                                        <div class="triangle"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="head-back">
                <div class="container">
                    <a href="/process/amounts">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAARCAMAAADT/c3XAAAAKlBMVEWzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7PVONgmAAAADnRSTlMACSEiI2VmZ6e+v8Lg4W+1yJIAAAAvSURBVHgBY4ACZk5GGIuHFQuLDcpiQmKx42ExcHMACZhudsJsXjYcbFasbBYuRgB8UAFYODedtwAAAABJRU5ErkJggg==">
                        <span>Back</span>
                    </a>
                </div>
            </div>
            <div class="bg-wrapper">
                <div class="container">
                    <div class="row head-text">
                        <div class="col-xs-12">
                            <h2 style="display: inline-block;">
                                <span>Enter the recipient's ETH address (your Ethereum wallet)</span>
                            </h2>
                            <!-- <span class="circle animated circle-gray">?</span> -->
                            <span class="inline-block"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10">
                            <form class="form-inline form-address">
                                <div class="form-group">
                                    <span class="error">
                                        <label for="payout_address" class="error red"></label>
                                    </span>
                                    <div class="input-group input-group-address">
                                        <div class="input-group-addon uppercase">ETH address</div>
                                        <input type="text" id="address" class="form-control" value="">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xs-2">
                            <div class="pull-right">
                                <a href="/process/confirmation" class="btn btn-lg btn-address btn-green" role="button">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
