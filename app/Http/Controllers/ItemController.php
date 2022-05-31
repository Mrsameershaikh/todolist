<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{

    public function store(Request $request){
        
        $items=new Item;
        $items->items=$request['items'];
        $items->save();

        return redirect('/show');

    }
    public function show(){
        $items=Item::all();
        $data=compact('items');
        return view('index')->with($data);

    }

    public function delete($id){
        Item::find($id)->delete();
        return redirect('/show');
    }

    
    public function edit($id){
        $items=Item::find($id);
        $url=url('/update')."/".$id;
        $data=compact('items','url');
        return view('updateItem')->with($data);
    }

    public function update($id,Request $request){
        $items=Item::find($id);
        $items->items=$request['items'];
        $items->save();
        return redirect('/show');
    }

    
}
