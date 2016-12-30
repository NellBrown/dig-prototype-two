<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;

class CollectionsController extends Controller
{
    public function index()
    {
        $collections = Collection::all();
        return view('collections.index', compact('collections'));
    }

    public function series()
    {

    }
}