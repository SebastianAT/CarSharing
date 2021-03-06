<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Feedback;
use App\Car;
use App\User;

class FeedbackController extends Controller
{
    /**
     * FeedbackController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * shows writeFeedback blade
     * @param $carUser_id
     * @return $this
     */
    public function writeFeedback($car_id)
    {
        $user = User::where('id', $car_id)->first();
        $car = Car::where('id', $car_id)->first();
        return view('feedback/writeFeedback')->with('user', $user)->with('car', $car);
    }

    /**
     * creats new feedback from user at car
     * @param Request $request
     * @param Car $carUser_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request, Car $car_id)
    {
        $feed = $request->validate([        //validate
            'inhalt'=> 'required'
        ]);


        $newFeedback = new Feedback();
        $newFeedback->feedback = $request->input('inhalt');
        $newFeedback->user_id = $request->user()->id;
        $newFeedback->car_id = $car_id->id;
        $newFeedback->save();  // save in DB

        return redirect('profile')->with('success', 'Bewertung abgegeben');
    }
}
