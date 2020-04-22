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
    
    
    public function list()
    {   
        $students=[];
        
        $students[]=[ 
            'id'=>1,
            'name'=>'fatemeh',
            'family'=>'nasr esf'
        ];
        $students[]=[ 
            'id'=>2,
            'name'=>'ali',
            'family'=>'ahmadi'
        ];
        $students[]=[ 
            'id'=>3,
            'name'=>'narsis',
            'family'=>'rs'
        ];
        $students[]=[ 
            'id'=>4,
            'name'=>'mina',
            'family'=>'hosseiny'
        ];
        return $students;
    }
    public function create(request $request)
    {
        $id=$request->id;
        $name=$request->name;
        $family=$request->family;
        $result='the student with id c'. $id.' and name '. $name .' created!';

        return $result;
    }


    //
}