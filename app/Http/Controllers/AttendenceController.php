<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IdAttendence;
use Illuminate\Support\Facades\DB;

class AttendenceController extends Controller
{
    //
    public function enter(Request $request) {
        $review = new IdAttendence();
        $review->type=$request->type;
        $review->user_id=$request->user_id;
        $review->overtime=$request->overtime;
        $review->production=$request->production;
        $review->break=$request->break;

        $time = strtotime($request->day);
        $punch_in = strtotime($request->punch_in);
        $punch_out = strtotime($request->punch_out);
        $day = date('Y-m-d', $time);

        $review->day=$day;
        $review->punch_in=date('H:i', $punch_in);
        $review->punch_out=date('H:i', $punch_out);

        $result = $review->save();
        if ($result)
            return ["Result"=>"Data has been saved"];

        else
            return ["Result"=>"Not works"];
    }
}
