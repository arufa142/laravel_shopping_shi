<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    //商品一覧ページ
    public function index()
    {
        return view('admin.item.index');
    }
    //商品人気ページ
    public function create()
    {
        return view('admin.item.create');
    }
    public function add()
    {
        return redirect();
    }

}

