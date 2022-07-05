<?php

namespace App\Http\Controllers;

use App\Models\Points;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PointsController extends Controller
{
    public function addData(Request $request)
    {
        try {
            $date = new \DateTime($request->when_date);
            $points = new Points;
            $points->team_name = $request->team_name;
            $points->amount_of_points = intval($request->points);
            $points->date = $date;
            $points->reason = $request->reason;

            $points->save();

            return redirect()->back();
        }catch (\Exception $exception)
        {
            print $exception->getMessage();
            return redirect()->back();
        }
    }

    public function teams()
    {
        $teams = DB::table('role_type_users')->get('role_type');
        $reasons = DB::table('reasons')->get('reason_name');
        $points = DB::table('points')->get();
        return view('form.pointsemployee', [
            'teams' => $teams,
            'reasons' => $reasons,
            'points' => $points,
        ]);
    }

    public function teamPoints()
    {
        $teams = [
            'Amsterdam' => intval(DB::table('points')->where('team_name', 'Amsterdam')->sum('amount_of_points')),
            'Istanbul' => intval(DB::table('points')->where('team_name', 'Istanbul')->sum('amount_of_points')),
            'Aqtau' => intval(DB::table('points')->where('team_name', 'Aqtau')->sum('amount_of_points')),
            'Seoul' => intval(DB::table('points')->where('team_name', 'Seoul')->sum('amount_of_points'))
        ];



        return view('form.attendanceemployee', [
            'allPoints' => $teams
        ]);
    }
}
