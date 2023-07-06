<?php

namespace App\Http\Controllers;

use App\Homepage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $homepage = Homepage::all();
        return view('dashboard.home', compact('homepage'));
    }
    public function updatecontent(Request $request)
    {
        $data = [
            'id' => $request->id,
            'navbarNama' => $request->navbarNama,
            'textContent' => $request->textContent,
        ];
    
        $validator = Validator::make($request->all(), [
            'textContent' => 'required|string',
            'navbarNama' => 'required|string'
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        Homepage::where('id', $data['id'])->update($validator->validated());
        return back()->with('success','Data berhasil ditambahkan');
    }
}
