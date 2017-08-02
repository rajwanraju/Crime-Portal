<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\addcrime;
use DB;

class PostController extends Controller
{
    public function viewPage()
    {

return view ('post.posts');

    }


 public function viewPost()
    {

  $viewPosts = addcrime::Paginate(6);


        return view('post.posts', ['viewPosts' => $viewPosts]);

    }


 public function readPost($id)
    {

 	//$readById=addcrime::where('id',$id)->first();



 $readById = DB::table('addcrimes')

->join('feedback', 'feedback.crimeId', '=', 'addcrimes.id')
                ->select('addcrimes.id', 'addcrimes.IncidentTitle', 'addcrimes.Description', 'addcrimes.Location','addcrimes.Image', 'addcrimes.ExactLocation', 'addcrimes.IncidentDate', 'addcrimes.IncidentTime', 'feedback.Feedback')
                ->where('addcrimes.id', $id)
                ->first();




return view('post.postDetails',['readById'=>$readById]);

    }




}
