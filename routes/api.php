<?php

use App\Http\Controllers\Api\EgoVisionControllers\AuthController;
use App\Http\Controllers\Api\EgoVisionControllers\ProductController;
use App\Models\GeneralSetting;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(AuthController::class)->group(function () {
    Route::post('ego/register', 'register');
    Route::post('ego/login', 'login');
    Route::post('ego/logout', 'logout')->middleware('auth:sanctum');
});
Route::controller(ProductController::class)->group(function () {
    Route::get('ego/products', 'getProducts');
});
Route::namespace('Api')->name('api.')->group(function () {

    Route::get('general-setting', function () {
        $general = GeneralSetting::first();
        $notify[] = 'General setting data';
        return response()->json([
            'remark' => 'general_setting',
            'status' => 'success',
            'message' => ['success' => $notify],
            'data' => [
                'general_setting' => $general,
            ],
        ]);
    });

    Route::get('get-countries', function () {
        $c = json_decode(file_get_contents(resource_path('views/partials/country.json')));
        $notify[] = 'General setting data';
        foreach ($c as $k => $country) {
            $countries[] = [
                'country' => $country->country,
                'dial_code' => $country->dial_code,
                'country_code' => $k,
            ];
        }
        return response()->json([
            'remark' => 'country_data',
            'status' => 'success',
            'message' => ['success' => $notify],
            'data' => [
                'countries' => $countries,
            ],
        ]);
    });

    Route::namespace('Auth')->group(function () {
        Route::post('login', 'LoginController@login');
        Route::post('register', 'RegisterController@register');

        Route::controller('ForgotPasswordController')->group(function () {
            Route::post('password/email', 'sendResetCodeEmail')->name('password.email');
            Route::post('password/verify-code', 'verifyCode')->name('password.verify.code');
            Route::post('password/reset', 'reset')->name('password.update');
        });
    });

    Route::middleware('auth:sanctum')->group(function () {

        //authorization
        Route::controller('AuthorizationController')->group(function () {
            Route::get('authorization', 'authorization')->name('authorization');
            Route::get('resend-verify/{type}', 'sendVerifyCode')->name('send.verify.code');
            Route::post('verify-email', 'emailVerification')->name('verify.email');
            Route::post('verify-mobile', 'mobileVerification')->name('verify.mobile');
            Route::post('verify-g2fa', 'g2faVerification')->name('go2fa.verify');
        });

        Route::middleware(['check.status'])->group(function () {
            Route::post('user-data-submit', 'UserController@userDataSubmit')->name('data.submit');

            Route::middleware('registration.complete')->group(function () {
                Route::get('dashboard', function () {
                    return auth()->user();
                });

                Route::get('user-info', function () {
                    $notify[] = 'User information';
                    return response()->json([
                        'remark' => 'user_info',
                        'status' => 'success',
                        'message' => ['success' => $notify],
                        'data' => [
                            'user' => auth()->user()
                        ]
                    ]);
                });

                Route::controller('UserController')->group(function () {

                    //KYC
                    Route::get('kyc-form', 'kycForm')->name('kyc.form');
                    Route::post('kyc-submit', 'kycSubmit')->name('kyc.submit');

                    //Report
                    Route::any('deposit/history', 'depositHistory')->name('deposit.history');
                    Route::get('transactions', 'transactions')->name('transactions');
                });

                //Profile setting
                Route::controller('UserController')->group(function () {
                    Route::post('profile-setting', 'submitProfile');
                    Route::post('change-password', 'submitPassword');
                });

                // Withdraw
                Route::controller('WithdrawController')->group(function () {
                    Route::get('withdraw-method', 'withdrawMethod')->name('withdraw.method')->middleware('kyc');
                    Route::post('withdraw-request', 'withdrawStore')->name('withdraw.money')->middleware('kyc');
                    Route::post('withdraw-request/confirm', 'withdrawSubmit')->name('withdraw.submit')->middleware('kyc');
                    Route::get('withdraw/history', 'withdrawLog')->name('withdraw.history');
                });

                // Payment
                Route::controller('PaymentController')->group(function () {
                    Route::get('deposit/methods', 'methods')->name('deposit');
                    Route::post('deposit/insert', 'depositInsert')->name('deposit.insert');
                    Route::get('deposit/confirm', 'depositConfirm')->name('deposit.confirm');
                    Route::get('deposit/manual', 'manualDepositConfirm')->name('deposit.manual.confirm');
                    Route::post('deposit/manual', 'manualDepositUpdate')->name('deposit.manual.update');
                });
            });
        });

        Route::get('logout', 'Auth\LoginController@logout');
    });
});
