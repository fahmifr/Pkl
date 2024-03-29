<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\transaksi;
use App\user;
use Redirect;
class admin extends Controller
{
	public function profil()
    {
        return view('profilAdmin', compact(Auth::user()->id));
    }
    public function home()
	{
		return view('dashboardAdmin');
	}
	public function userPenyedia()
	{
		$tampil= user::where('level',2)->get();
	return view('userPenyediaJasa',compact('tampil'));
	}
	public function userPenyewa()
	{
		$tampil= user::where('level',3)->get();
	return view('userCostumer',compact('tampil'));
	}
	public function updateProfil(Request $request, $id){
		$prof=user::find($id);
		$prof->name= $request->name;
		$prof->nameB= $request->nameB;
		$prof->email= $request->email;
		$prof->alamat= $request->alamat;
		$prof->kodeP= $request->kodeP;
		$prof->noHp= $request->noHp;
  		$prof->save();
  		
  		return Redirect::back();
	}
	public function updatePassword(Request $request, $id){
		$prof=user::find($id);
  		$prof->password = bcrypt($request->password);
  		$prof->save();
  		return Redirect::back();
	}
}
