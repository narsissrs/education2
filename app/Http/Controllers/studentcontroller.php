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
                return 'id=1';
        break;   
          case 2;
                  return 'id=3';
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
        $students[]=[ 
            'id'=>3,
            'name'=>'fateme',
            'family'=>'nasr'
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
?>