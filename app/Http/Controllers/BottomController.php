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

    public function edit($id)
    {
        //
        $bottom=Bottom::first();
        $view=[
            'action'=>'/admin/bottom/'.$id,
            'method'=>'patch',
            'modal_header'=>'頁尾版權管理',
            'modal_body'=>[
                [
                    'label'=>'頁尾版權',
                    'tag'=>'input',
                    'type'=>'text',
                    'name'=>'bottom',
                    'value'=>$bottom->text,
                ],
            ],
        ];

        return view('modals.base_modal',$view);
    }

    public function update(Request $request, $id)
    {
        //
        $bottom=Bottom::find($id);

        // 現在的資料已經會自動判斷這個動作
        if ($bottom->text!=$request->input('bottom')) {
            $bottom->text=$request->input('bottom');
            $bottom->save();
        }
        

        return redirect('/admin/bottom');
    }
}
