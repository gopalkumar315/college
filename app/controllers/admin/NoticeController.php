<?php

class NoticeController extends \BaseController {

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
            return Redirect::to('admin/notice')->withInput()->withErrors($v->errors());
        }
        else
        {
            $data=new Notice();
            $data->title=Input::get('title');
            $data->description=Input::get('description');
            $data->notice_date=date("Y-m-d H:i:s");
            if($data->save())
            {
                return Redirect::to('admin/notice_list');
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
		$data=Notice::find($id);
        return View::make('admin.notice_view')->with('data',$data);
	}

    public function abc()
    {
        echo "dsfdsf";
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
        Notice::destroy($id);
        return Redirect::to('admin/notice_list');
	}


}
