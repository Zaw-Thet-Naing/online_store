<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('Item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Item.create');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    public function store(Request $request)
    {
        $item = new Item();
        $item->name = $request->name;
        $item->description = $request->description;
        $item->category_id = $request->category;
        $item->price = $request->price;
        $item->quantity = $request->quantity;
        $item->image = $request->image;
        $item->save();
        return redirect('admin/items');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function show($id)
    {

        $item = Item::findOrFail($id);
        // dd($category);
        return view('Item.show', compact('item'));
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit($id)
    {
        $item = Item::FindOrFail($id);
        // dd($category);
        return view('Item.edit', compact('item'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->name = $request->name;
        $item->description = $request->description;
        $item->category_id = $request->category;
        $item->price = $request->price;
        $item->quantity = $request->quantity;
        $item->image = $request->image;
        $item->update();
        return redirect('admin/items');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect('admin/items');
    }
}
