<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;
use App\Team;
use App\User;
use App\Theme;
use App\Type;
use Illuminate\Support\Facades\Auth;

class CatagoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Team $team, Catagory $catagory)
    {
        $themes = $catagory->themes()->with('types')->get();
        
        return view('catagory', [
            'players' => User::where('team_id', $team->id)->get(),
            'catagories' => Catagory::all(),
            'catagory' => $catagory,
            'themes' => $themes,
            'team' => $team,
        ]);
    }
}