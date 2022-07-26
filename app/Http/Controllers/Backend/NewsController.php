<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Session;
use Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;



class NewsController extends Controller
{
    //__ view function is here __//
    public function index()
    {
        $allData = News::all();
        return view('backend.news.news-view', compact('allData'));
    }

    //__ Create function is here __//
    public function create()
    {
        return view('backend.news.news-create');
    }

    //__ Store function is here __//
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
        ]);
        $storeData = new News();
        $storeData->title = $request->title;
        $storeData->slug = Str::slug($request->title);
        $storeData->short_desc = $request->short_desc;
        $storeData->long_desc = $request->long_desc;
        $storeData->date = $request->date;
        //for pdf
        $img=$request->file('pdf');
        if($img){
            $imgName=date('YmdHi').$img->getClientOriginalName();
            $img->move('public/images/news/',$imgName);
            $storeData['pdf']=$imgName;
        }
        //for image
        $img=$request->file('image');
        if($img){
            $imgName=date('YmdHi').$img->getClientOriginalName();
            $img->move('public/images/news/',$imgName);
            $storeData['image']=$imgName;
        }
        $storeData->save();
        Session::flash('success', 'News Created successfully');
        return redirect()->back();
    }

    //__ pdf view function is here __//
    public function viewPdf($id)
    {
        $showData = News::find($id);
        return view('backend.news.show-pdf', compact('showData'));
    }

    //__ edit function is here __//
    public function edit($id)
    {
        $editData = News::find($id);
        return view('backend.news.news-create', compact('editData'));
    }

    //__ update function is here __//
    public function update(Request $request, $id)
    {
        $updateData = News::find($id);
        $updateData->title = $request->title;
        $updateData->slug = Str::slug($request->title);
        $updateData->short_desc = $request->short_desc;
        $updateData->long_desc = $request->long_desc;
        $updateData->long_desc = $request->long_desc;
        $updateData->date = $request->date;
        $img=$request->file('pdf');
        if($img){
            $imgName=date('YmdHi').$img->getClientOriginalName();
            $img->move('public/images/news/',$imgName);
            if(file_exists('public/images/news/'.$updateData->pdf)AND ! empty($updateData->pdf))
            {
             unlink('public/images/news/'.$updateData->pdf);
            }
            $updateData['pdf']=$imgName;
        }
        //for image
        $img=$request->file('image');
        if($img){
            $imgName=date('YmdHi').$img->getClientOriginalName();
            $img->move('public/images/news/',$imgName);
            if(file_exists('public/images/news/'.$updateData->image)AND ! empty($updateData->image))
            {
             unlink('public/images/news/'.$updateData->image);
            }
            $updateData['image']=$imgName;
        }
        $updateData->save();
        Session::flash('success', 'News Updated successfully');
        return redirect()->back();
    }

    //delete function is here...........................
    public function destroy(Request $request, $id)
    {
        $deleteData = News::find($request->id);
        if (file_exists('public/images/news/' . $deleteData->image) and !empty($deleteData->image)) {
            unlink('public/images/news/' . $deleteData->image);
        }
        $deleteData->delete();
        return redirect()->route('about.news.view');
    }
}
