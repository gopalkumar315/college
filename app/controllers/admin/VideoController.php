<?php

class VideoController extends \BaseController {

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
     * Create album
     *
     * @return Response
     */
     public function album()
     {
         $input=Input::all();
         $rule=array(
             'name'=>'required|min:3'
         );

         $v=Validator::make($input,$rule);
         if($v->fails())
         {
            return Redirect::back()->withInput()->withErrors($v->errors());
         }
         else
         {
             $data=new Video();
             $data->album_title=Input::get('name');
             $data->parent='0';
              if($data->save())
              {
                return Redirect::to('admin/video_album_list');
              }
         }
     }



    //add video with particular album
    public function video()
    {
        $input=Input::all();
        $rule=array(
            'album'=>'required',
            'title'=>'required|min:3',
            'link'=>'required|url'

        );
        $v=Validator::make($input,$rule);
        if($v->fails())
        {
            return Redirect::back()->withErrors($v->errors())->withInput();
        }
        else
        {
            $data=new Video();
            $data->parent=Input::get('album');
            $data->video_title=Input::get('title');

            $link=Input::get('link');
            $url = parse_url($link);
            parse_str($url['query'], $query);
            $data->link=$query['v'];
            if($data->save())
            {
                return Redirect::back()->with('success',"Video Uploaded, Upload Another Video");
            }
        }
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
    //Delete Album
	public function destroy($id)
	{
        Video::where('parent',$id)->delete();
        Video::destroy($id);
        return Redirect::back();
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    //only particular vide0
    public function video_del($id)
    {
        Video::destroy($id);
        return Redirect::back();
    }


}
