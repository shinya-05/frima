<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        $soldItems = $user->items; // ユーザーが出品した商品
        $purchasedItems = $user->orders()->with('item')->get()->pluck('item'); // ユーザーが購入した商品

        return view('mypage', compact('user', 'soldItems', 'purchasedItems'));
    }
}
