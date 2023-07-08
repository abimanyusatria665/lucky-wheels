<?php

namespace App\Http\Controllers;

use App\Models\Bet_Slots;
use App\Models\Users;
use Illuminate\Http\Request;

class BetSlotsController extends Controller
{
    public function store(Request $request)
    {
        $price = $request->input('price');

        $bet = $request->input('bet');

        Bet_Slots::create([
            'bet' => $bet,
            'user_id' => 1,
        ]);

        $balance = Users::find(1);

        dd($balance);

        $currentBalance = $balance->balance + (($request->bet * $price) - $request->bet);
        if ($balance) {
            $balance->balance = $currentBalance;
            $balance->save();

            return 'success';
        }
    }
}
