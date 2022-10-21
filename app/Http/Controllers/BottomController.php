<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bottom;

class BottomController extends Controller
{
    public function index()
    {
        $bottom = Bottom::first();
        // dd($all);
        $col=['頁尾版權管理'];
        $rows=[
            [
                'text'=>$bottom->text,
            ],
            [
                'tag'=>'button',
                'type'=>'button',
                'btn_color'=>'btn-info',
                'action'=>'edit',
                'id'=>$bottom->id,
                'text'=>'編輯',
            ],
        ];

        // dd($rows);

        $view=[
            'header'=>'頁尾版權管理',
            'module'=>'Bottom',
            'cols'=>$col,
            'rows'=>$rows
        ];
        return view('backend.module',$view);
    }
}
