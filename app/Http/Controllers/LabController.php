<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Requests;
use App\Lab;
use App\Lab_Component;
use DB;


class LabController extends Controller
{
    public function create()
    {
        return view('labas.create');
    }

    public function history()
    {
        $id = Auth::user()->id;
        $values = DB::select("select item_name,item_count,status_id from requests where id= ?",[$id]);
        return view('labas.history')->with('values',$values);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'item_name' => 'required',
            'item_count'  => 'required',
        ]);
        $requests =  new Requests;
        $requests->item_name = $request['item_name'];
        $requests->item_count = $request['item_count'];
        $requests->id = Auth::user()->id;
        $requests->request_type = 0;
        $requests->status_id = 1;
        $requests->save();
        return redirect('/lab_as');
    }

    public function labcomp()
    {
        $id = Auth::user()->id;
        $labid = DB::select("select lab_id from labs where id=?",[$id]);
        $values = DB::select("select item_name , spare ,working ,not_working from lab__components where lab_id=?",[$labid[0]->lab_id]);
        return view('labas.labcomp')->with('values', $values);
    }

}
