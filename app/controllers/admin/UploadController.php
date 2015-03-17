<?php

class UploadController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('admin.upload');
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
		$input=Input::all();
        $rule=array(
            'title'=>'required',
            'file'=>'required'
        );
        $message=array(
            'required'=>'This field is required'
        );
        $v=Validator::make($input,$rule,$message);

        if($v->fails()){
            return Redirect::back()->withInput()->withErrors($v->errors());
        }
        else{

            $des=public_path();
            $file=Input::file('file');
            //randome
            $str=Str::random(30);
            //generate filename with extension
            $filename=str_replace(' ','',Input::get('title')).$str.'.'.$file->getClientOriginalExtension();
            //file upload
            $file->move($des.'\upload\\',$filename);

            //save into database
            $data=new Upload();
            $data->title=Input::get('title');
            $data->file=$filename;
            $data->uploaded_date=date("Y-m-d H:i:s");
            $data->save();
            //redirect back to that page
            return Redirect::back()->with('message','File Uploaded');
        }
	}

    /**
     * uploaded file View File
     */

    public function view()
    {
          $data=Upload::orderBy('id','desc')->simplePaginate(17);
          return View::make('admin.upload_view')->with('content',$data);
    }

    /**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
		Upload::destroy($id);
        return Redirect::back()->with('message','Data Deleted');
	}


}
