<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IdAttendence;

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



        return ["Result"=>"Has been"];
    }
}
