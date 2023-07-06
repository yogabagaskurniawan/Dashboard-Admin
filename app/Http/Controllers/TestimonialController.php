<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    public function testimonial()
    {
        $testimonial = Testimonial::orderBy('id','desc')->get();
        return view('dashboard.testimonial',compact('testimonial'));
    }

    public function addTestimonial(Request $req)
    {
        $rand = 'testimonial-'.Str::random(10);
        $image = $req->file('images');
        $logo = $rand.'.'.$image->getClientOriginalExtension();
        $upload = $image->move('imagestesTimonial/', $logo);

        $tambahGambar = new Testimonial();
        $tambahGambar->nama = $req->input('nama');
        $tambahGambar->status = $req->input('status');
        $tambahGambar->description = $req->input('description');
        $tambahGambar->img = $logo;
        $tambahGambar->save();

        return back()->with('success','Testimonial berhasil ditambahkan');
    }

    public function deleteTestimonial($id)
    {
        $testimonial = Testimonial::find($id);
        $filePath = 'imagesTestimonial/'.$testimonial->img;

        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        $testimonial->delete();

        return back()->with('success', 'Testimonial Deleted');
    }
}
