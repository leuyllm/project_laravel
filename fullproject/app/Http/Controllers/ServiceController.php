<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Validator;
use DB;
class ServiceController extends Controller
{
    //
    
    public function createservice(){
        
        return view('subadmin.service');
    }

    
    public function saveservice(Request $r){

            //$data=$r->except('_token');
            $data = array(
                'title'=>$r->title,
                'description'=>$r->description
               
            );
            $validation=$r->validate([
                'title'=>'required',
                'description'=>'required',
                'photo'=>'required'
            ]);
    
    
            if($r->photo){
                $data['photo']=$r->file('photo')->store('upload/service','custom');
            }
            //dd($data);
            $i=DB::table('services')->insert($data);
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

        public function showservice(){
            $data['service']=DB::table('services')->paginate(config('app.row'));
            return view('subadmin.show_service',$data);
        }

        public function deleteservice($id){
            $i= DB::table('services')
            ->where('id',$id)
            ->delete();
    
            return redirect()->back();
            /*>with('success','Data has been removed'); */
        }

        public function editservice($id){
            $service=DB::table('services')->find($id);/*first()*/ 
    
            return view('subadmin.editservice',compact('service'));
        }
    
        public function updateservice(Request $r){
            $data=$r->except('_token','id','photo');
            
            if($r->photo){
                $data['photo']=$r->file('photo')->store('upload/service','custom');
            }
    
            $i=DB::table('services')
            ->where('id',$r->id)
            ->update($data);
    
            if($i){
                return redirect('desh/editservice/'.$r->id);
                /*with('success','Data has been edit');
                with('error','Fail to edit data');
                */
            }
            else{
                return redirect('desh/editservice/'.$r->id)->with('error','Fail to edit data');;
            }
        }
    
    }

