<?php

class AssignController extends \BaseController {

    protected $category=array();
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $this->select();
        $data= $this->category;
        return View::make('assignment')->with('content',$data);


	}

    /**
     * course category
     * @return mixed
     */


    public function select(){
        $data['course']=Course::orderby('parent')->where('parent','0')->take(2)->get();
        foreach($data['course'] as $db){
            $this->category[]=$db;
            $this->category($db->id);
        }

    }

    public function category($id,$str=null){
        $str=$str.'';
        global $cat;
        $data['course']=Course::orderby('parent')->where('parent',$id)->get();
        foreach($data['course'] as $db){
            $cat=array(
                'id'=>$db->id,
                'course'=>$str.$db->course,
                'parent'=>$db->parent
            );
            $this->category[]=$cat;
        }
    }


    /**
     * Assignment View
     */

    public function assignment_view(){
        $input=Input::all();
        print_r($input);

    }


    /**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		$input=Input::all();

        $data=Assignment::where('course',Input::get('course'))->where('year',Input::get('year'))->where('semester',Input::get('semester'))->orderby('subject')->get();
        return Redirect::back()->with('content',$data);


	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
