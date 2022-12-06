<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Region;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();

        $regions = Region::select([
            'region_id',
            'name'
        ])->get();

        return view('profile.profile', [
            'user' => $user,
            'regions' => $regions
        ]);
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name_f' => ['required', 'string', 'max:255'],
            'name_s' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', $request->get('email') !== $user->email ? 'unique:users' : ''],
            //'password' => ['required', 'confirmed', Rules\Password::defaults()],
            //'region_id' => ['numeric'],
        ]);

        $user->name_f = $request->get('name_f');
        $user->name_s = $request->get('name_s');
        $user->phone = $request->get('phone');
        $user->email = $request->get('email');
        $user->save();

        return redirect()->route('profile');
    }
}