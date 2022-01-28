<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
        //商品一覧ページ
        public function index()
        {
            // SELECT* FROM items;
            $items=Item::get();
            // dd($items);
            $data=['items'=>$items];
            return view('admin.item.index',$data);
        }
        //商品人気ページ
        public function create()
        {
            return view('admin.item.create');
        }
        //商品追加  
        public function add(Request $request)
        {
            $possts=$request->all();
            // dd($possts);
            Item::create($possts);
            //商品一覧にリダイレクト
            return redirect('/admin/item/');
        }

        public function edit(Request $request,$id)
        {
            //SELECT*FROM ites WHERE id=xxx;
            $item=Item::find($id);
            // dd($item);
            $data=['item'=>$item];
            // return view('admin.item.create',$data);
            return view('admin.item.edit',$data);
        }
        public function update(Request $request,$id)
        {
            $possts=$request->all();
            //SELECT*FROM ites WHERE id=xxx;
            Item::find($id)->update($possts);
            // dd($item);
            // return view('admin.item.create',$data);
            return redirect()->route('admin.item.edit');
        }
    
}
