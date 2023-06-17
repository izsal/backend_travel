<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\User;
use App\Models\Place;
use App\Models\Slider;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     * 
     * @param \Illuminate\Http\Request $request
     * @param \Illuminate\Http\Response $response
     */
    public function __invoke(Request $request)
    {
        //count categories
        $categories = Category::count();

        // count places
        $places = Place::count();

        // count sliders
        $sliders = Slider::count();

        // count users
        $users = User::count();

        return response()->json([
            'succes' => true,
            'message'=> 'Statistik Data',
            'data' => [
                'categories' => $categories,
                'places'     => $places,
                'sliders'    => $sliders,
                'users'      => $users
            ]
            ]);
    }
}
