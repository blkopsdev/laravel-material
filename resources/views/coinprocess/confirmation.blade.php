
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
                                    <img src="/images/process/green_confirm.png">
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
                                        <div class="progress-bar" role="progressbar" aria-valuenow="66.8" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 66.8%;"></div>
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
                    <a href="/process/sendto">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAARCAMAAADT/c3XAAAAKlBMVEWzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7PVONgmAAAADnRSTlMACSEiI2VmZ6e+v8Lg4W+1yJIAAAAvSURBVHgBY4ACZk5GGIuHFQuLDcpiQmKx42ExcHMACZhudsJsXjYcbFasbBYuRgB8UAFYODedtwAAAABJRU5ErkJggg==">
                        <span>Back</span>
                    </a>
                </div>
            </div>
            <div class="bg-wrapper">
                <div class="container container-confirm-phase">
                    <div class="warning-override"></div>
                    <div class="row head-text">
                        <div class="col-xs-12">
                            <h2 style="margin-top: 20px;">
                                <span>Check all the details before processing</span>
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-6" style="background-color: white; border-radius: 4px; padding: 15px;">
                                    <div class="row" style="margin-top: 10px;">
                                        <div class="col-xs-4 uppercase span-confirm-green">
                                            <span>You have</span>
                                        </div>
                                        <div class="col-xs-8 large-font">
                                            <span class="text-bold">2 BTC</span>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 10px;">
                                        <div class="col-xs-4">
                                            <span class="uppercase span-confirm-green">
                                                <span>You get</span>
                                            </span>
                                        </div>
                                        <div class="col-xs-8 large-font">
                                            <span class="text-bold">26.865995 ETH</span>
                                            <span class="text-lowercase grey small-font"> (estimated amount)</span>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 10px;">
                                        <div class="col-xs-4">
                                            <span class="uppercase span-confirm-green">
                                                <span>Recipient address</span>
                                            </span>
                                        </div>
                                        <div class="col-xs-8" style="word-wrap: break-word;">
                                            <a href="https://etherscan.io/address/0xD26f0cA83245a5C5A61Eb7B1e7dB671fAa89f711" target="_blank"
                                                class="link green">0xD26f0cA83245a5C5A61Eb7B1e7dB671fAa89f711</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 exchange-wrapper">
                                    <a href="/process/sending" class="btn btn-lg btn-exchange btn-green" role="button">
                                        <span>Confirm and make payment</span>
                                    </a>
                                    <div class="form-group">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px;">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-6" style="background-color: white; border-radius: 4px; padding: 15px;">
                                    <div class="row row-spacer" style="margin-top: 10px;">
                                        <div class="col-xs-5">
                                            <span class="uppercase span-confirm-grey nowrap">
                                                <span>Expected exchange rate</span>
                                            </span>
                                        </div>
                                        <div class="col-xs-7 medium-font">1 BTC = 13.5005 ETH</div>
                                    </div>
                                    <div class="row" style="margin-top: 10px;">
                                        <div class="col-xs-5">
                                            <span class="uppercase span-confirm-grey">
                                                <span>Commission included (0.5%)</span>
                                            </span>
                                        </div>
                                        <div class="col-xs-7 medium-font">0.135005 ETH</div>
                                    </div>
                                    <div class="row" style="margin-top: 10px;">
                                        <div class="col-xs-5">
                                            <span class="uppercase span-confirm-grey">
                                                <span>Network transaction fee</span>
                                            </span>
                                        </div>
                                        <div class="col-xs-7 medium-font">0.002 ETH</div>
                                    </div>
                                    <div class="row" style="margin-top: 10px;">
                                        <div class="col-xs-5">
                                            <span class="uppercase span-confirm-grey">
                                                <span>Estimated arrival</span>
                                            </span>
                                        </div>
                                        <div class="col-xs-7 medium-font">≈ 5-30 minutes</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
