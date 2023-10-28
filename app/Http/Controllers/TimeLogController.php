<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\TimeLogCreateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TimeLogController extends Controller
{
    public function show()
    {
        return view('log-time.create')->with(['user' => Auth::user()]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(TimeLogCreateRequest $request): RedirectResponse
    {
        dd($request->all());
        return Redirect::route('time-log.show')->with('status', 'Saved');
    }
}
