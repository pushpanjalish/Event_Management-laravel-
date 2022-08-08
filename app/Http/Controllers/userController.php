<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventlistModel;
use DB;
/** 
 *Author- Shari Roluthon
 *Date- 7th July 2022
 */
class userController extends Controller
{
    public function UserDashBoardView(){
        $users = DB::select('select * from eventlisttable');
        return view('UserDashBoard',['users'=>$users]);
    }
    public function UserViewEventDescription($id){
        $data=['data1'=>EventlistModel::find($id)];
        return view('UserEventDescriptionDetails',$data);
    }
}
