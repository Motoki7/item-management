<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Earning;
use Cron\MonthField;

class EarningsController extends Controller
{
        /**
     * 売上登録
     */
    public function earnings(Request $request)
    {
        // POSTリクエストのとき
        if ($request->isMethod('post')) {
            // 売上登録
            Earning::create([
                'month1' =>$request->month1,
                'month2' =>$request->month2,
                'month3' =>$request->month3,
                'month4' =>$request->month4,
                'month5' =>$request->month5,
                'month6' =>$request->month6,
                'month7' =>$request->month7,
                'month8' =>$request->month8,
                'month9' =>$request->month9,
                'month10' =>$request->month10,
                'month11' =>$request->month11,
                'month12' =>$request->month12,
            ]);

            return redirect('/earnings');
        }

        return view('item.earnings');
    }
}
