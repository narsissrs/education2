<?php

namespace App\Http\Controllers;

use Illuminate\Http\request;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function read($id)
    {
        switch($id){
            case 1;
                return 'narges';
        break;
        default:
        return 'other';
        }
    }
    public function list()
    {   
        $students=[];
        
        $students[]=[ 
            'id'=>1,
            'name'=>'narges',
            'family'=>'raeis'
        ];
        return $students;
    }
    public function create(request $request)
    {
        $id=$request->id;
        $name=$request->name;
        $family=$request->family;
        $result='the student with id '. $id.' and name '. $name .' created!';

        return $result;
    }

}
