<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventlistModel;
use DB;
/** 
 *Author- Shari Roluthon
 *Date- 7th July 2022
 */
class AdminController extends Controller
{
    public function AdminDashBoardView(){
        $users = DB::select('select * from eventlisttable');
        return view('AdminDashboard',['users'=>$users]);
    }
    public function AdminAddingEvents(){
        return view('AdminCreateEvents');
    }
    public function AdminStoreEvents(){
        $obj=new EventlistModel();
        $obj->event_name=request('event_name');
        $obj->ticket_price=request('ticket_price');
        $obj->event_des=request('event_des');
        $obj->people_no=request('people_no');
        $obj->event_pic=request('event_pic');
        $obj->save();
        return redirect('/AdminDashboard')->with('success', 'User created successfully.');
    }
    public function ViewEventDescription($id){
        $data=['data1'=>EventlistModel::find($id)];
        return view('EventDescriptionDetails',$data);
    }
    public function UserDetailsProfile(){
        $data = DB::select('select * from eventbookingusers');
        return view('UserProfileDetails',['data'=>$data]);
    }
    public function UpdateEvent($id){
        $data=['data1'=>EventlistModel::find($id)];
        return view('EditEvents',$data);
    }
    public function Update($id){
        $data=EventlistModel::find($id);
        $data->event_name=request('event_name');
        $data->ticket_price=request('ticket_price');
        $data->event_des=request('event_des');
        $data->people_no=request('people_no');
        $data->event_pic=request('event_pic');
        $data->save();
        return redirect('/AdminDashboard');
    }
    public function DeleteEvent($id){
        $data=EventlistModel::find($id);
        $data->delete();
        return redirect('/AdminDashboard');
    }
}
