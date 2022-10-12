<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class EditingController extends Controller
{
    //
        public function edit(Request $request)
    {
        $item = Item::find($request->id);
        return view('item.editing', compact('item'));
    }

    public function update(Request $request)
    {
        $item = Item::find($request->id);
        $item->name = $request->input('name');
        $item->type = $request->input('type');
        $item->detail = $request->input('detail');
        $item->save();
        return redirect('/items');
    }
}
