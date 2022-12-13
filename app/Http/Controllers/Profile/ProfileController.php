<?php

namespace App\Http\Controllers\Profile;

use App\Models\User;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\History;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::check()) {
            $user = auth()->user();

            $regions = Region::select([
                'region_id',
                'name'
            ])->get();

            $histories = History::where('user_id', $user->user_id)
                ->orderBy('created_at', 'desc')->get();

            return view('profile.profile', [
                'user' => $user,
                'regions' => $regions,
                'histories' => $histories
            ]);
        } else return redirect()->route('login');
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name_f' => ['required', 'string', 'max:255'],
            'name_s' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', $request->get('email') !== $user->email ? 'unique:users' : ''],
            'about_me' => ['nullable', 'string'],
            //'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'region_id' => ['numeric', 'nullable'],
        ]);

        $user->name_f = $request->get('name_f');
        $user->name_s = $request->get('name_s');
        $user->phone = $request->get('phone');
        $user->email = $request->get('email');
        $user->about_me = $request->get('about_me');
        $user->region_id = $request->get('region_id');
        $user->save();

        return redirect()->route('profile');
    }
}
