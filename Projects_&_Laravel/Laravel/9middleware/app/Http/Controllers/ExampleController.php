<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{

    // WARNING: Protegerlas desde el controller. Hay que tener una buena construcción del Controller
    public function __construct()
    {
        $this->middleware('example');
    }

    public function index()
    {
        return response()->json("Hello world!", 200);
    }

    public function noAccess()
    {
        return response()->json("No access", 200);
    }
}
