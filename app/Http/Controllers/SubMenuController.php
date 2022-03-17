<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;
use App\Models\SubMenuItem;

class SubMenuController extends Controller
{
    public function create()
    {
        $menuItems = MenuItem::where('status', 'Enabled')->get();

        return view('admin.submenucreate', compact('menuItems'));
    }
    public function store(Request $request)
    {
        SubMenuItem::create([
            'name' => $request->name,
            'menu_item_id' => $request->menu_item_id,
            'status' => $request->status,
            'link' => $request->link
        ]);

        return back();
    }
}
