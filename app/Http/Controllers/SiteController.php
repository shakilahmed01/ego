<?php

namespace App\Http\Controllers;

use App\Constants\Status;
use App\Models\AdminNotification;
use App\Models\EgoModels\Color;
use App\Models\EgoModels\Product;
use App\Models\Frontend;
use App\Models\Language;
use App\Models\Page;
use App\Models\SupportMessage;
use App\Models\SupportTicket;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class SiteController extends Controller
{

    public function placeholderImage($size = null)
    {
        $imgWidth = explode('x', $size)[0];
        $imgHeight = explode('x', $size)[1];
        $text = $imgWidth . '×' . $imgHeight;
        $fontFile = realpath('assets/font/RobotoMono-Regular.ttf');
        $fontSize = round(($imgWidth - 50) / 8);
        if ($fontSize <= 9) {
            $fontSize = 9;
        }
        if ($imgHeight < 100 && $fontSize > 30) {
            $fontSize = 30;
        }

        $image     = imagecreatetruecolor($imgWidth, $imgHeight);
        $colorFill = imagecolorallocate($image, 100, 100, 100);
        $bgFill    = imagecolorallocate($image, 175, 175, 175);
        imagefill($image, 0, 0, $bgFill);
        $textBox = imagettfbbox($fontSize, 0, $fontFile, $text);
        $textWidth  = abs($textBox[4] - $textBox[0]);
        $textHeight = abs($textBox[5] - $textBox[1]);
        $textX      = ($imgWidth - $textWidth) / 2;
        $textY      = ($imgHeight + $textHeight) / 2;
        header('Content-Type: image/jpeg');
        imagettftext($image, $fontSize, 0, $textX, $textY, $colorFill, $fontFile, $text);
        imagejpeg($image);
        imagedestroy($image);
    }

    public function maintenance()
    {
        $pageTitle = 'Maintenance Mode';
        $general = gs();
        if ($general->maintenance_mode == Status::DISABLE) {
            return to_route('home');
        }
        $maintenance = Frontend::where('data_keys', 'maintenance.data')->first();
        return view($this->activeTemplate . 'maintenance', compact('pageTitle', 'maintenance'));
    }

    public function policyPages($slug, $id)
    {
        $policy = Frontend::where('id', $id)->where('data_keys', 'policy_pages.element')->firstOrFail();
        $pageTitle = $policy->data_values->title;
        return view('templates.basic.policy', compact('policy', 'pageTitle'));
    }

    public function contact()
    {
        $pageTitle = "Contact Us";
        return view('contact', compact('pageTitle'));
    }

    public function contactSubmit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required|string|max:255',
            'message' => 'required',
        ]);

        // if(!verifyCaptcha()){
        //     $notify[] = ['error','Invalid captcha provided'];
        //     return back()->withNotify($notify);
        // }

        $request->session()->regenerateToken();

        $random = getNumber();

        $ticket = new SupportTicket();
        $ticket->user_id = auth()->id() ?? 0;
        $ticket->name = $request->name;
        $ticket->email = $request->email;
        $ticket->priority = Status::PRIORITY_MEDIUM;


        $ticket->ticket = $random;
        $ticket->subject = $request->subject;
        $ticket->last_reply = Carbon::now();
        $ticket->status = Status::TICKET_OPEN;
        $ticket->save();

        $adminNotification = new AdminNotification();
        $adminNotification->user_id = auth()->user() ? auth()->user()->id : 0;
        $adminNotification->title = 'A new support ticket has opened ';
        $adminNotification->click_url = urlPath('admin.ticket.view', $ticket->id);
        $adminNotification->save();

        $message = new SupportMessage();
        $message->support_ticket_id = $ticket->id;
        $message->message = $request->message;
        $message->save();

        $notify[] = ['success', 'Ticket created successfully!'];

        return to_route('ticket.view', [$ticket->ticket])->withNotify($notify);
    }

    public function egoIndex()
    {
        $pageTitle = "Ego Vision-Home";
        return view('ego_index', compact('pageTitle'));
    }
    public function toricLense()
    {
        $pageTitle = "Toric Lense";
        return view('ego.pages.toric_lense', compact('pageTitle'));
    }
    public function collection()
    {
        $pageTitle = "collection";
        return view('ego.pages.collection', compact('pageTitle'));
    }

    public function color()
    {
        $pageTitle = "color";
        $colors = Color::all();
        return view('ego.pages.color', compact('pageTitle','colors'));
    }
    public function duration()
    {
        $pageTitle = "duration";
        return view('ego.pages.duration', compact('pageTitle'));
    }
    public function about()
    {
        $pageTitle = "about";
        return view('ego.pages.about', compact('pageTitle'));
    }

    public function accessories()
    {
        $pageTitle = "Accessories";
        return view('ego.pages.accessories', compact('pageTitle'));
    }
    public function shopInstagram()
    {
        $pageTitle = "Shop Instagram";
        return view('ego.pages.shop_instagram', compact('pageTitle'));
    }
    public function allLenses()
    {
        $pageTitle = "All Lenses";
        $products = Product::all();
        return view('ego.pages.all_lenses', compact('pageTitle', 'products'));
    }
    public function egoLogin()
    {
        $pageTitle = "Ego Vision User Login";
        return view('ego.auth.login', compact('pageTitle'));
    }
    public function egoRegister()
    {
        $pageTitle = "Ego Vision User Register";
        return view('ego.auth.register', compact('pageTitle'));
    }

    public function testUser()
    {
        $pageTitle = "User Dashboard";
        return view('layouts.userTamplate', compact('pageTitle'));
    }
}
