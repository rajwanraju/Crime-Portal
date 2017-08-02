<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\addcrime;
use DB;

class AdminController extends Controller
{
    public function dashboard(){


return view('admin.home.homeContent');
    }




public function managePost(){

$posts=addcrime::Paginate(10);
return view('admin.post.managePost',['posts'=>$posts]);
}


 public function AddFeedback($id){
    	$feedback=addcrime::where('id',$id)->first();

return view('admin.post.managePost',['feedback'=>$feedback]);

    }

    public function Feedbackform(Request $request){
    	$post_id = $request->id;
    	$postById = addcrime::where('id', $post_id)->first();

return view('admin.feedback.feedback',['postById'=>$postById]);

    }


 
    public function StoreFeedback(Request $request){

    	

    	//$this->validate($request,['Feedback'=>'required','FeedbackDate'=>'required','FeedbackTime'=>'required',]);
DB::table('feedback')->insert([



'crimeId'=>$request->crimeId,
'Feedback'=>$request->Feedback,
'FeedbackDate'=>$request->FeedbackDate,
'FeedbackTime'=>$request->FeedbackTime,

	]);

//return redirect()->back();
return redirect('/managePost')->with('message','Feedback  add successfully');
    }

}
