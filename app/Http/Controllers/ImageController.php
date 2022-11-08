<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index()
    {
        $image = Image::all();
        // dd($image);
        $col=['校園映像圖片','顯示','刪除','操作'];
        $rows=[];

        foreach ($image as $a) {
            $tmp=[
                [
                    'tag'=>'img',
                    'src'=>$a->img,
                    'style'=>'width:100px;height:68px;',
                ],
                [
                    'tag'=>'button',
                    'type'=>'button',
                    'btn_color'=>'btn-success',
                    'action'=>'show',
                    'id'=>$a->id,
                    'text'=>($a->sh==1) ? '顯示' : '隱藏' ,

                ],
                [
                    'tag'=>'button',
                    'type'=>'button',
                    'btn_color'=>'btn-danger',
                    'action'=>'delete',
                    'id'=>$a->id,
                    'text'=>'刪除',
                ],
                [
                    'tag'=>'button',
                    'type'=>'button',
                    'btn_color'=>'btn-info',
                    'action'=>'edit',
                    'id'=>$a->id,
                    'text'=>'編輯',
                ],
            ];

            $rows[]=$tmp;
        }
        // dd($rows);

        $view=[
            'header'=>'校園映像圖片管理',
            'module'=>'Image',
            'cols'=>$col,
            'rows'=>$rows
        ];
        return view('backend.module',$view);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $view=[
            'action'=>'/admin/image',
            'modal_header'=>'新增校園映像圖片',
            'modal_body'=>[
                [
                    'label'=>'校園映像圖片',
                    'tag'=>'input',
                    'type'=>'file',
                    'name'=>'img'
                ],
            ],
        ];

        return view('modals.base_modal',$view);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // 儲存檔案
        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            // 原始檔案名稱
            $filename = $request->file('img')->getClientOriginalName();
            // 儲存至 public 目錄，命名檔案為原始名稱
            $request->file('img')->storeAs('public', $filename);

            $image=new Image();
            $image->img=$filename;
            $image->save();
        }

        return redirect('/admin/image');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $image=Image::find($id);
        $view=[
            'action'=>'/admin/image/'.$id,
            'method'=>'patch',
            'modal_header'=>'編輯校園映像圖片',
            'modal_body'=>[
                [
                    'label'=>'目前圖片',
                    'tag'=>'img',
                    'src'=>$image->img,
                    'style'=>'width:100px;height:68px'
                ],
                [
                    'label'=>'更換校園映像圖片',
                    'tag'=>'input',
                    'type'=>'file',
                    'name'=>'img'
                ],
            ],
        ];

        return view('modals.base_modal',$view);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $image=Image::find($id);

        // 儲存檔案
        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            // 原始檔案名稱
            $filename = $request->file('img')->getClientOriginalName();
            // 儲存至 public 目錄，命名檔案為原始名稱
            $request->file('img')->storeAs('public', $filename);
            $image->img=$filename;
            $image->save();
        }
        

        return redirect('/admin/image');
    }

    /**
     * 改變資料的顯示狀態
     */
    public function display($id)
    {
        $image=Image::find($id);
        $image->sh=($image->sh)%2;
        $image->save();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Image::destroy($id);
    }
}
