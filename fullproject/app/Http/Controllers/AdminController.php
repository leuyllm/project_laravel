<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use RealRashid\SweetAlert\Facades\Alert;
use Validator;

class AdminController extends Controller
{
    //
    public function create(){
        
        return view('subadmin.item');
    }

    public function save(Request $r){

        //$data=$r->except('_token');
        $data = array(
            'name'=>$r->name,
            'price'=>$r->price,
            'description'=>$r->description
           
        );
        $validation=$r->validate([
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
            'photo'=>'required'
        ]);


        if($r->photo){
            $data['photo']=$r->file('photo')->store('upload/item','custom');
        }
        //dd($data);
        $i=DB::table('items')->insert($data);
        Alert::success("Data has been saved","We have added data ");
        if($i){
            return redirect()->back();
        }
        /*with('error','Fail to save data');
        ->with('success','Data has been saved');
        */
        else{
            return redirect()->back();
        }

       
    }
    public function show(){
        $data['item']=DB::table('items')->paginate(config('app.row'));
        return view('subadmin.show_item',$data);
    }

    public function delete($id){
        $i= DB::table('items')
        ->where('id',$id)
        ->delete();

        return redirect()->back()->with('success','Data has been removed');
    }

    public function edit($id){
        $item=DB::table('items')->find($id);/*first()*/ 

        return view('subadmin.edit',compact('item'));
    }

    public function update(Request $r){
        $data=$r->except('_token','id','photo');
        
        if($r->photo){
            $data['photo']=$r->file('photo')->store('upload/item','custom');
        }

        $i=DB::table('items')
        ->where('id',$r->id)
        ->update($data);

        if($i){
            return redirect('desh/edit/'.$r->id);
            /*with('success','Data has been edit');
            with('error','Fail to edit data');
            */
        }
        else{
            return redirect('desh/edit/'.$r->id);
        }
    }


}
/*
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
*/
