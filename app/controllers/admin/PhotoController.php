<?php

class PhotoController extends \BaseController
{
    public function validation()
    {
        $input=Input::all();

        $rule=array(
            'album'=>'required',
            'file'=>'required'
        );

        $v=Validator::make($input,$rule);
        return $v;
    }

    public function store()
    {
        $v=$this->validation();
        if($v->fails())
        {
          return Redirect::to('admin/photo')->withErrors($v->errors());
        }
        else
        {

          $files=Input::file('file');
          $des=public_path().'\gallery';
          foreach($files as $file){

            //file new name with extention
            $filename =Str::random(20) .'.'. $file->getClientOriginalExtension();

            //thumbnail
            Image::make($file->getRealPath())->resize(200,200)->save($des.'\thumbnail\\'.$filename);

            //upload file
            $file->move($des.'\images\\', $filename);
            //controller
            $data=new Photo();
            $data->name=$filename;
            $data->album_id=Input::get('album');

            $data->save();

          }
          // for loop close
          $id=Input::get('album');
          return Redirect::to('admin/photo_list/'.$id);

        }
    }

    public function show($id)
    {
        $data=Photo::orderBy('id','desc')->where('album_id',$id)->simplePaginate(17);
        $album=Album::find($id);
        return View::make('admin/photo_list')->with('content',$data)->with('album',$album);
    }

    public function destroy($id)
    {
        $data=Photo::find($id);
        Photo::destroy($id);
        //delete from folder
        $des=public_path().'\gallery';
        File::delete($des.'\images\\'.$data->name);
        File::delete($des.'\thumbnail\\'.$data->name);
        return Redirect::back();
    }
}
