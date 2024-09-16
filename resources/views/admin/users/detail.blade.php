@extends('admin.layouts.app')
@section('content')
@php
Use App\Constants\Status;
@endphp
<div class="container-fluid">
    <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    @lang('Balance')</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $general->cur_sym }}{{ showAmount($user->balance) }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-wallet fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('admin.report.transaction') }}?search={{ $user->username }}">@lang('View All')</a>
                    </div>
                </div>
                <!-- dashboard-w1 end -->

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    @lang('Deposits')</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $general->cur_sym }}{{ showAmount($totalDeposit) }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('admin.deposit.list') }}?search={{ $user->username }}" >@lang('View All')</a>
                    </div>
                </div>
                <!-- dashboard-w1 end -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    @lang('Withdrawals')</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $general->cur_sym }}{{ showAmount($totalWithdrawals) }}</div>
                                </div>
                                <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('admin.withdraw.log') }}?search={{ $user->username }}" >@lang('View All')</a>
                    </div>
                </div>
                
                <!-- dashboard-w1 end -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    @lang('Transactions')</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalTransaction }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('admin.report.transaction') }}?search={{ $user->username }}" >@lang('View All')</a>
                    </div>
                </div>
                <!-- dashboard-w1 end -->


            </div>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">

                <button data-toggle="modal" data-target="#addSubModal" class="d-none d-lg-inline-block btn btn-lg btn-success shadow-lg bal-btn" data-act="add"><i
                class="fa fa-plus-circle fa-sm text-white-50"></i> @lang('Balance')</button>

                <button  data-toggle="modal" data-target="#addSubModal" class="d-none d-lg-inline-block btn btn-lg btn-danger shadow-lg bal-btn" data-act="sub"><i
                class="fa fa-minus-circle fa-sm text-white-50"></i> @lang('Balance')</button>

                <a href="{{route('admin.report.login.history')}}?search={{ $user->username }}" class="d-none d-lg-inline-block btn btn-lg btn-primary shadow-sm"><i
                class="fa fa-bars fa-sm text-white-50"></i> @lang('Logins')</a>

                <a href="{{ route('admin.users.notification.log',$user->id) }}" class="d-none d-lg-inline-block btn btn-lg btn-secondary shadow-lg"><i
                class="fa fa-bell fa-sm text-white-50"></i> @lang('Notifications')</a>

                <a href="{{route('admin.users.login',$user->id)}}" class="d-none d-lg-inline-block btn btn-lg btn-primary shadow-lg"><i
                class="fa fa-info-circle fa-sm text-white-50"></i> @lang('Login as User')</a>

                @if($user->kyc_data)
                <a href="{{ route('admin.users.kyc.details', $user->id) }}" class="d-none d-lg-inline-block btn btn-lg btn-dark shadow-lg"><i
                class="fa fa-info-circle fa-sm text-white-50"></i> @lang('KYC Data')</a>
                @endif

                @if($user->status == Status::USER_ACTIVE)
                <a href="#" class="d-none d-lg-inline-block btn btn-lg btn-warning shadow-lg" data-toggle="modal" data-target="#userStatusModal"><i
                class="fa fa-ban fa-sm text-white-50"></i> @lang('Ban User')</a>
                @else
                <a href="#" class="d-none d-lg-inline-block btn btn-lg btn-warning shadow-lg" data-toggle="modal" data-target="#userStatusModal"><i
                class="fa fa-undo fa-sm text-white-50"></i> @lang('Unban User')</a>
                @endif

            </div>


            <div class="card mt-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">@lang('Information of') {{$user->fullname}}</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.users.update',[$user->id])}}" method="POST"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label>@lang('First Name')</label>
                                    <input class="form-control" type="text" name="firstname" required value="{{$user->firstname}}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">@lang('Last Name')</label>
                                    <input class="form-control" type="text" name="lastname" required value="{{$user->lastname}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Email') </label>
                                    <input class="form-control" type="email" name="email" value="{{$user->email}}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Mobile Number') </label>
                                    <div class="input-group ">
                                        <span class="input-group-text mobile-code"></span>
                                        <input type="number" name="mobile" value="{{ old('mobile') }}" id="mobile" class="form-control checkUser" required>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label>@lang('Address')</label>
                                    <input class="form-control" type="text" name="address" value="{{@$user->address->address}}">
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="form-group">
                                    <label>@lang('City')</label>
                                    <input class="form-control" type="text" name="city" value="{{@$user->address->city}}">
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="form-group ">
                                    <label>@lang('State')</label>
                                    <input class="form-control" type="text" name="state" value="{{@$user->address->state}}">
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="form-group ">
                                    <label>@lang('Zip/Postal')</label>
                                    <input class="form-control" type="text" name="zip" value="{{@$user->address->zip}}">
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="form-group ">
                                    <label>@lang('Country')</label>
                                    <select name="country" class="form-control">
                                        @foreach($countries as $key => $country)
                                            <option data-mobile_code="{{ $country->dial_code }}" value="{{ $key }}">{{ __($country->country) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="row justify-content-center">
                            <div class="btn btn-danger col-xl-3 col-md-6 col-12 m-1">
                                <label>@lang('Email Verification')</label>
                                <input type="checkbox" data-width="100%" data-onstyle="success" data-offstyle="danger"
                                       data-toggle="toggle" data-on="@lang('Verified')" data-off="@lang('Unverified')" name="ev"
                                       @if($user->ev) checked @endif>

                            </div>

                            <div class="btn btn-danger  col-xl-3 col-md-6 col-12 m-1">
                                <label>@lang('Mobile Verification')</label>
                                <input type="checkbox" data-width="100%" data-onstyle="success" data-offstyle="danger"
                                       data-toggle="toggle" data-on="@lang('Verified')" data-off="@lang('Unverified')" name="sv"
                                       @if($user->sv) checked @endif>

                            </div>
                            <div class="btn btn-danger col-xl-3 col-md- col-12 m-1">
                                <label>@lang('2FA Verification') </label>
                                <input type="checkbox" data-width="100%" data-height="50" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="@lang('Enable')" data-off="@lang('Disable')" name="ts" @if($user->ts) checked @endif>
                            </div>
                            <div class="btn btn-danger col-xl-3 col-md- col-12 m-1">
                                <label>@lang('KYC') </label>
                                <input type="checkbox" data-width="100%" data-height="50" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="@lang('Verified')" data-off="@lang('Unverified')" name="kv" @if($user->kv == 1) checked @endif>
                            </div>
                        </div>


                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary w-100 h-45">@lang('Submit')
                                    </button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            
    </div>



    {{-- Add Sub Balance MODAL --}}
    <div id="addSubModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><span class="type"></span> <span>@lang('Balance')</span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <form action="{{route('admin.users.add.sub.balance',$user->id)}}" method="POST">
                    @csrf
                    <input type="hidden" name="act">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>@lang('Amount')</label>
                            <div class="input-group">
                                <input type="number" step="any" name="amount" class="form-control" placeholder="@lang('Please provide positive amount')" required>
                                <div class="input-group-text">{{ __($general->cur_text) }}</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>@lang('Remark')</label>
                            <textarea class="form-control" placeholder="@lang('Remark')" name="remark" rows="4" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary h-45 w-100">@lang('Submit')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="userStatusModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        @if($user->status == Status::USER_ACTIVE)
                        <span>@lang('Ban User')</span>
                        @else
                        <span>@lang('Unban User')</span>
                        @endif
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <form action="{{route('admin.users.status',$user->id)}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        @if($user->status == Status::USER_ACTIVE)
                        <h6 class="mb-2">@lang('If you ban this user he/she won\'t able to access his/her dashboard.')</h6>
                        <div class="form-group">
                            <label>@lang('Reason')</label>
                            <textarea class="form-control" name="reason" rows="4" required></textarea>
                        </div>
                        @else
                        <p><span>@lang('Ban reason was'):</span></p>
                        <p>{{ $user->ban_reason }}</p>
                        <h4 class="text-center mt-3">@lang('Are you sure to unban this user?')</h4>
                        @endif
                    </div>
                    <div class="modal-footer">
                        @if($user->status == Status::USER_ACTIVE)
                        <button type="submit" class="btn btn-primary h-45 w-100">@lang('Submit')</button>
                        @else
                        <button type="button" class="btn btn-dark" data-dismiss="modal">@lang('No')</button>
                        <button type="submit" class="btn btn-primary">@lang('Yes')</button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


@push('script')
<script>
    (function($){
    "use strict"
        $('.bal-btn').click(function(){
            var act = $(this).data('act');
            $('#addSubModal').find('input[name=act]').val(act);
            if (act == 'add') {
                $('.type').text('Add');
            }else{
                $('.type').text('Subtract');
            }
        });
        let mobileElement = $('.mobile-code');
        $('select[name=country]').change(function(){
            mobileElement.text(`+${$('select[name=country] :selected').data('mobile_code')}`);
        });

        $('select[name=country]').val('{{@$user->country_code}}');
        let dialCode        = $('select[name=country] :selected').data('mobile_code');
        let mobileNumber    = `{{ $user->mobile }}`;
        mobileNumber        = mobileNumber.replace(dialCode,'');
        $('input[name=mobile]').val(mobileNumber);
        mobileElement.text(`+${dialCode}`);

    })(jQuery);
</script>
@endpush
