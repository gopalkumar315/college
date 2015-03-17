<?php

class EventController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
     *valation of notice content
     *
     */

    public function validation()
    {
        //get all input
        $input=Input::ALl();

        //validation rule
        $rule=array(
            'title'=>'required|min:5',
            'description'=>'required'
        );

        //show Validation message
        $message=array(
            'required'=>'This field cannot be empty',
            'min:5'=>'minimum five character is required'
        );

        $v=Validator::make($input,$rule,$message);
        return $v;
    }

    /**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */


	public function store()
	{

				$v=$this->Validation();
        if($v->fails())
        {
            return Redirect::to('admin/event')->withInput()->withErrors($v->errors());
        }
        else
        {
            $data=new Events();
            $data->title=Input::get('title');
            $data->description=Input::get('description');
            $data->event_date=date("Y-m-d H:i:s");
            if($data->save())
            {
                return Redirect::to('admin/event_list');
            }
        }


	}



	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data=Events::find($id);
        return View::make('admin.event_view')->with('data',$data);
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
        Events::destroy($id);
        return Redirect::to('admin/event_list');
	}


}
