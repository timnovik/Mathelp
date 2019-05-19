<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function ShowMainPage() {
        return view('layouts/main');
    }

    public function RoundSquare(Request $request) {
        $radius = INF;
        if ($request->has('radius')) {
            $radius = $request->radius;
        }
        return view('round_square', ['square' => $radius ** 2 * 3.142]);
    }
    public function LengthOfCircle(Request $request) {
        $radius = INF;
        if ($request->has('radius')) {
            $radius = $request->radius;
        }
        return view('circle_length', ['length' => $radius * 2 * 3.142]);
    }
    public function VolumeOfSphere(Request $request) {
        $radius = INF;
        if ($request->has('radius')) {
            $radius = $request->radius;
        }
        return view('sphere_volume', ['volume' => $radius ** 3 * 4 / 3 * 3.142]);
    }
}
