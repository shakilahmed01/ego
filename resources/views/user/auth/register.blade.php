@extends('layouts.app')
@section('content')
@php
    $policyPages = getContent('policy_pages.element',false,null,true);
@endphp
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <div class="card ">
                    <div class="card-header bg-primary">
                        <h5 class="card-title text-white">@lang('Register')</h5>
                    </div>

                    <div class="card-body bg-light">
                        <form action="{{ route('user.register') }}" method="POST" class="verify-gcaptcha">
                            @csrf
                            <div class="row">
                                @if(session()->get('reference') != null)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="referenceBy" class="form-label">@lang('Reference by')</label>
                                        <input type="text" name="referBy" id="referenceBy" class="form-control" value="{{session()->get('reference')}}" readonly>
                                    </div>
                                </div>
                                @endif

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">@lang('Username')</label>
                                        <input type="text" class="form-control form--control checkUser" name="username" value="{{ old('username') }}" required>
                                        <small class="text-danger usernameExist"></small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">@lang('E-Mail Address')</label>
                                        <input type="email" class="form-control form--control checkUser" name="email" value="{{ old('email') }}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">@lang('Country')</label>
                                        <select name="country" class="form-control form--control">
                                            @foreach($countries as $key => $country)
                                                <option data-mobile_code="{{ $country->dial_code }}" value="{{ $country->country }}" data-code="{{ $key }}">{{ __($country->country) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">@lang('Mobile')</label>
                                        <div class="input-group ">
                                            <span class="input-group-text mobile-code">

                                            </span>
                                            <input type="hidden" name="mobile_code">
                                            <input type="hidden" name="country_code">
                                            <input type="number" name="mobile" value="{{ old('mobile') }}" class="form-control form--control checkUser" required>
                                        </div>
                                        <small class="text-danger mobileExist"></small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">@lang('Password')</label>
                                        <input type="password" class="form-control form--control" name="password" required>
                                        @if($general->secure_password)
                                            <div class="input-popup">
                                                <p class="error lower">@lang('1 small letter minimum')</p>
                                                <p class="error capital">@lang('1 capital letter minimum')</p>
                                                <p class="error number">@lang('1 number minimum')</p>
                                                <p class="error special">@lang('1 special character minimum')</p>
                                                <p class="error minimum">@lang('6 character password')</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">@lang('Confirm Password')</label>
                                        <input type="password" class="form-control form--control" name="password_confirmation" required>
                                    </div>
                                </div>

                            </div>

                            @if($general->agree)
                            <div class="form-group">
                                <input type="checkbox" id="agree" @checked(old('agree')) name="agree" required>
                                <label>@lang('I agree with')</label> <span>@foreach($policyPages as $policy) <a href="{{ route('policy.pages',[slug($policy->data_values->title),$policy->id]) }}">{{ __($policy->data_values->title) }}</a> @if(!$loop->last), @endif @endforeach</span>
                                
                            </div>
                            @endif
                            <br>
                            <div class="form-group">
                                <button type="submit" id="recaptcha" class="btn btn-primary w-100"> @lang('Register')</button>
                            </div>
                            <p class="mb-0">@lang('Already have an account?') <a href="{{ route('user.login') }}">@lang('Login')</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="modal fade" id="existModalCenter" tabindex="-1" role="dialog" aria-labelledby="existModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="existModalLongTitle">@lang('You are with us')</h5>
        <span type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <i class="las la-times"></i>
        </span>
      </div>
      <div class="modal-body">
        <h6 class="text-center">@lang('You already have an account please Login ')</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark btn-sm" data-bs-dismiss="modal">@lang('Close')</button>
        <a href="{{ route('user.login') }}" class="btn btn--base btn-sm">@lang('Login')</a>
      </div>
    </div>
  </div>
</div>
@endsection
@push('style')
<style>
    .country-code .input-group-text{
        background: #fff !important;
    }
    .country-code select{
        border: none;
    }
    .country-code select:focus{
        border: none;
        outline: none;
    }
</style>
@endpush
@if($general->secure_password)
    @push('script-lib')
        <script src="{{ asset('assets/global/js/secure_password.js') }}"></script>
    @endpush
@endif
@push('script')
    <script>
      "use strict";
        (function ($) {
            @if($mobileCode)
            $(`option[data-code={{ $mobileCode }}]`).attr('selected','');
            @endif

            $('select[name=country]').change(function(){
                $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
                $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
                $('.mobile-code').text('+'+$('select[name=country] :selected').data('mobile_code'));
            });
            $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
            $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
            $('.mobile-code').text('+'+$('select[name=country] :selected').data('mobile_code'));

            $('.checkUser').on('focusout',function(e){
                var url = '{{ route('user.checkUser') }}';
                var value = $(this).val();
                var token = '{{ csrf_token() }}';
                if ($(this).attr('name') == 'mobile') {
                    var mobile = `${$('.mobile-code').text().substr(1)}${value}`;
                    var data = {mobile:mobile,_token:token}
                }
                if ($(this).attr('name') == 'email') {
                    var data = {email:value,_token:token}
                }
                if ($(this).attr('name') == 'username') {
                    var data = {username:value,_token:token}
                }
                $.post(url,data,function(response) {
                  if (response.data != false && response.type == 'email') {
                    $('#existModalCenter').modal('show');
                  }else if(response.data != false){
                    $(`.${response.type}Exist`).text(`${response.type} already exist`);
                  }else{
                    $(`.${response.type}Exist`).text('');
                  }
                });
            });
        })(jQuery);

    </script>
@endpush
