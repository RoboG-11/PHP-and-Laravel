<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\Uppercase;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $users = User::paginate(15);
        // return view('index', compact('users'));

        return User::paginate(15);
    }

    public function search()
    {
        return view('search');
    }

    public function searchPost(Request $request)
    {
        $request->validate(
            [
                'name' => ['required', 'min:3', 'max:255', new Uppercase]
            ],
            [
                'name.required' => 'Can not be empty',
            ]
        );

        $users = User::where('name', '%LIKE%', $request->name)->get();
        return view('search-results', compact('users'));
    }
}
