<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\City;
use App\Models\Type;

class EventController extends Controller
{
    public function index() {
        $events = Event::all();
        return view('admin.event.index', compact('events'));
    }

    public function create() {
        $cities = City::all();
        $types = Type::all();
        return view('admin.event.create', compact('cities', 'types'));
    }

    public function store(Request $request) {
        return $request;
    }
}
