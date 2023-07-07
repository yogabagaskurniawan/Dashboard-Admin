<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    public function portfolio()
    {
        $portfolio = Portfolio::orderBy('id','desc')->get();
        return view('dashboard.portfolio',compact('portfolio'));
    }

    public function addPortfolio(Request $req)
    {
        $rand = 'portfolio-'.Str::random(10);
        $image = $req->file('images');
        $logo = $rand.'.'.$image->getClientOriginalExtension();
        $upload = $image->move('imagesPortfolio/', $logo);

        $tambahGambar = new Portfolio();
        $tambahGambar->tittle = $req->input('tittle');
        $tambahGambar->description = $req->input('description');
        $tambahGambar->img = $logo;
        $tambahGambar->save();

        return back()->with('success','Portfolio berhasil ditambahkan');
    }

    public function deletePortfolio($id)
    {
        $portfolio = Portfolio::find($id);
        $filePath = 'imagesPortfolio/'.$portfolio->img;

        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        $portfolio->delete();

        return back()->with('success', 'Portfolio Deleted');
    }

    public function detailPortfolio($id)
    {
        // $portfolio = Portfolio::where('id',$id)->first();

        // Ambil data portofolio berdasarkan ID
        $portfolio = Portfolio::findOrFail($id);

        // Dapatkan portofolio sebelumnya dan berikutnya
        $previousPortfolio = Portfolio::where('id', '<', $id)->orderBy('id', 'desc')->first();
        $nextPortfolio = Portfolio::where('id', '>', $id)->orderBy('id')->first();

        return view('detailPortfolio',compact('portfolio', 'previousPortfolio', 'nextPortfolio'));
    }
}
