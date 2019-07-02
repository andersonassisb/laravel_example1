<?php

namespace App\Http\Controllers;

use App\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index(){
        $listPeople = People::all();
        return view('people.index', ['people' => $listPeople]);
    }
}
