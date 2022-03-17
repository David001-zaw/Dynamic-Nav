<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;

class MenuItemController extends Controller
{
    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        MenuItem::create([
            'name' => $request->name,
            'link' => $request->link,
            'status' => $request->status
        ]);

        return back();
    }
}
