<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\Tool;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $lentTools = Tool::join('users', 'users.id', '=', 'tools.user_id')
            ->join('reservations', 'tools.id', '=', 'reservations.tool_id')
            ->where('reservations.borrowed_by_user_id', auth()->id())
            ->get();

        return view('profile')->with('lentTools', $lentTools);
    }

    public function update(UpdateProfileRequest $request)
    {
        auth()->user()->update($request->only('name', 'email'));

        if ($request->input('password')) {
            auth()->user()->update([
                'password' => bcrypt($request->input('password'))
            ]);
        }

        return redirect()->route('profile')->with('message', 'Profile saved successfully');
    }
}
