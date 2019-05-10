<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\SliderModel;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use App\Http\Requests\cntt_admin\Slider\EditSlider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = new SliderModel;
        $sliderList = $slider->listSlider();
        return view('cntt_admin/mod_slider/list',['sliderList' => $sliderList]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = New SliderModel;
        $sliderEdit = $slider->editSlider($id) ;

        return view('cntt_admin/mod_slider/edit',['sliderEdit' => $sliderEdit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditSlider $request, $id)
    {
        $preImg = SliderModel::find($id)->cnttSliderImage;
        $slider = new SliderModel;
    
        $chkSuccess = $slider->updateSlider($request,$id) ;
        $dt = date('Y-m-d-His');
        if (($request->imgSlider) && $chkSuccess == true ) {

            File::delete('public/upload/imgSlide/'.$preImg);
            $file = Image::make($request->file('imgSlider')->getRealPath());
            
            // $file->resize(270,200);
            $file->save('public/upload/imgSlide/'.$dt.'-'.$request->imgSlider->getClientOriginalName());
        }

        return redirect()->route('admin.slider.list')->with('success', 'Cập nhật Slide thành công');
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
    }
}
