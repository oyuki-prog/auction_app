<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Http\Requests\ItemRequest;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('items.index', ['items' => $items]);
    }

    public function show($id)
    {
        $item = Item::find($id);
        return view('items.show', ['item' => $item]);
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(ItemRequest $request){
    //Request $requestはトークンなしのフォームデータ
        $item = new Item;

        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->seller = $request->seller;
        $item->email = $request->email;
        $item->image_url = $request->image_url;

        $item->save();

        return redirect('/items');
    }

    public function edit($id)
    {
        $item = Item::find($id);
        return view('items.edit',['item' => $item]);
    }

    public function update(ItemRequest $request, $id)
    {
        $item = Item::find($id);

        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->seller = $request->seller;
        $item->email = $request->email;
        $item->image_url = $request->image_url;

        $item->save();

        return redirect('/items');
    }

    public function destroy($id){
        $item = Item::find($id);
        $item->delete();

        return redirect('/items');
    }
}
