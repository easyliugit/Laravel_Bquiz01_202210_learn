<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Total;

class TotalController extends Controller
{
    public function index()
    {
        $total = Total::first();
        // dd($all);
        $col=['進站總人數'];
        $rows=[
            [
                'text'=>$total->text,
            ],
            [
                'tag'=>'button',
                'type'=>'button',
                'btn_color'=>'btn-info',
                'action'=>'edit',
                'id'=>$total->id,
                'text'=>'編輯',
            ],
        ];

        // dd($rows);

        $view=[
            'header'=>'進站總人數',
            'module'=>'Total',
            'cols'=>$col,
            'rows'=>$rows
        ];
        return view('backend.module',$view);
    }
}
