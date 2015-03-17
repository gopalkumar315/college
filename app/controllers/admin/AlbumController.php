<?php

class AlbumController extends \BaseController
{
    public function validation()
    {
        $input=Input::all();
        $rule=array(
            'name'=>'required|min:3'
        );
        $message=array(
            'required'=>'This field is required',
            'min:3'=>'minimum five character is required'
        );

        $v=Validator::make($input,$rule,$message);
        return $v;
    }

    public function create()
    {
        $v=$this->validation();
        if($v->passes())
        {
            $data=new Album();
            $data->name=Input::get('name');
            $data->date=date("Y-m-d H:i:s");
            if($data->save())
            {
                return Redirect::to('admin/photo');
            }
        }
        else
        {
             return Redirect::to('admin/album')->withErrors($v->errors())->withInput();
        }
    }

    public function destroy($id)
    {
        $this->del_images($id);
        Album::destroy($id);
        Photo::where('album_id');
        return Redirect::back();
    }

    //deletion images from albums
    public function del_images($id)
    {
        $data=Photo::where('album_id',$id)->get();
        $des=public_path().'\gallery';
        foreach($data as $img)
        {
           File::delete($des.'\images\\'.$img->name);
           File::delete($des.'\thumbnail\\'.$img->name);
        }
        Photo::where('album_id',$id)->delete();
    }
}
