<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\vote;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVoteRequest;

class AdminController extends Controller
{


    public function Dashboard()
    {
        // $UserCount = User::count();
        return view('Admin.dashboard');
    }

    public function Voting()
    {
        // $UserCount = User::count();
        return view('Admin.voting');
    }
    public function DataVoting()
    {
        $vote = vote::all();

        return view('Admin.datavoting', ['vote' => $vote]);
        // $votes = vote::all();
        // return view('Admin.datavoting', compact('votes'));
    }

    public function store(StoreVoteRequest $request)
    {
        $imageName = time() . '.' . $request->image->extension();
        $uploadedImage = $request->image->storeAs('images', $imageName);
        $imagePath = 'images/' . $imageName;

        $params = $request->validated();
        $vote = vote::create($params);

        if ($vote = vote::create($params)) {
            $vote->image = $imagePath;
            $vote->save();
            return redirect(route('Voting'))->with('success', 'Added!');
        }
    }
}
