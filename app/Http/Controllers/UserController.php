<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Auth\SessionGuard;
Use Auth;
use App\addcrime;
use DB;

class UserController extends Controller
{
      public function AddCrime(){

$categories=Category::all();
return view('user.addcrime',['categories'=>$categories]);


    }


    public function viewPage(){


      return view('user.user');
    }



  public function StoreCrime(Request $request){


 /*   

$this->validate($request,['IncidentTitle'=>'required','categoryId'=>'required','Description'=>'required','Location'=>'required','ExactLocation'=>'required','IncidentDate'=>'required','IncidentTime'=>'required'
		]);

*/


//$userId = Auth::id();

  $postImage = $request->file('postImage');
        $name = $postImage->getClientOriginalName();
        $uploadPath = 'public/postImage/';
        $postImage->move($uploadPath, $name);
        $imageUrl = $uploadPath . $name;
      //  $this->savePostInfo($request, $imageUrl);


/*


return redirect('/addcrime')->with('message','Crime report  save successfully');



}

*/

DB::table('addcrimes')->insert([

         'user_id' => Auth::user()->id,
        'IncidentTitle' => $request->IncidentTitle,
        'categoryid' => $request->categoryid,
        'Description' => $request->Description,
        'Location' => $request->Location,
        'ExactLocation' => $request->ExactLocation,
        'IncidentDate' => $request->IncidentDate,
        'IncidentTime' => $request->IncidentTime,
        'image' =>  $imageUrl,

  ]);
return redirect('/user')->with('message','Crime report  save successfully');

/*

 protected function savePostInfo($request, $imageUrl) {



  $AddCrime = new addcrime();
        $AddCrime -> $userId = Auth::user()->id;
        $AddCrime->IncidentTitle = $request->IncidentTitle;
        $AddCrime->categoryid = $request->categoryid;
        $AddCrime->Description = $request->Description;
        $AddCrime->Location = $request->Location;
        $AddCrime->ExactLocation = $request->ExactLocation;
        $AddCrime->IncidentDate = $request->IncidentDate;
        $AddCrime->IncidentTime = $request->IncidentTime;
        $AddCrime->Image = $imageUrl;
        $AddCrime->save();


      

//return redirect()->back();

*/


    }

  


}
