<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;  //to get the model we use this
class CreatesController extends Controller
{
    // create the function to get the report

    public function home(){
        $articles=Article::all(); //$articles holds all data in the data base
       // echo "<pre>";
       // print_r($articles); //with out pre it just display like a paragraph
        //echo "</pre>";

        return view('home',['articles'=>$articles]); //i think that pass data to 
        //the home page 
        //then we have to collect data from the home view

    }

    public function add(Request $request){  //request is object
        //we have to do the validation
     //   $this->validate($request,[
       //     'title'=>'required',
         //   'description'=>'required'
        //]);
            $reqdata=$request->validate([
                'title'=>'required',
                'description'=>'required'
            ]);
        return 'Validation pass';  //this is like a printf when 
        //title and description fill then it occur

        //now we want to save the data that we enter in to the database
        $articles=new Article;
        $articles->title=$request->input('title');  
        $articles->description=$request->input('description');
        //data enter to the table in the database
        
        $articles->save();
        //save data in to the database

        return redirect('/')->with('info','Article saved successfully');
        //return successfull message 
        //inside the home page we have to flash a sessison message



    }
}
