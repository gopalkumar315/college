<?php

class AssignmentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //assignment
        $data['trade']=Course::where('parent','!=','0')->distinct()->get(array('course'));
        $data['subject']=Subject::distinct()->get(array('subject'));
        return View::make('admin.assignment')->with('trade',$data['trade'])->with('subject',$data['subject']);
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

    public function validation()
    {
        $input=Input::all();
        $rule=array(
            'course'=>'required',
            'year'=>'required',
            'file'=>'required|mimes:pdf,docx,doc'
        );

        $v=Validator::make($input,$rule);
        return $v;

    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$v=$this->validation();
        if($v->fails())
        {
            return Redirect::back()->withErrors($v->errors());
        }
        else
        {
            $year=Input::get('year');
            $semester=$this->sem($year);
            $file=Input::file('file');
            $course=Input::get('course');
            $subject=Input::get('subject');

            //assignment number find automaticallly using funtion given below and explained
            $assign_no=Assignment::where('course',$course)->where('semester',$semester)->where('subject',$subject)->where('year',$year)->count();
            $assign_no=$this->assignment_no($assign_no+1);

            $filename=$course.'_'.$year.'_'.$semester.'_assignment_'.$assign_no.'.'.$file->getClientOriginalExtension();
            Input::file('file')->move('assignment',$filename);

            $data=new Assignment();
            $data->semester=$semester;
            $data->course=$course;
            $data->year=$year;
            $data->file=$filename;
            $data->assignment_no=$assign_no;
            $data->signature=Input::get('signature');
            $data->subject=Input::get('subject');
            $data->submission=Input::get('submission');
            $data->updated=date('Y-m-d');
            if($data->save())
            {
                return Redirect::back()->with('message','Assignment Issued');
            }


        }
	}

    /**
     *
     * find semester
    */

    public function sem($year)
    {
        $year=$year.'-06-01';
        $date1 = date(strtotime($year));
        $date2 = date(strtotime('now'));

        $difference = $date2 - $date1;

//       echo $difference;
        $months = floor($difference / 86400/30);
        if($months==0||$months<=6)
        {
            return "First";
        }
        elseif($months>6 && $months<=12 )
        {
            return "Second";
        }
        elseif($months>12 && $months<=18 )
        {
            return "Third";
        }
        elseif($months>18 && $months<=24 )
        {
            return "Fourth";
        }
        elseif($months>24 && $months<=30 )
        {
            return "Fifth";
        }
        elseif($months>30 && $months<=36 )
        {
            return "Sixth";
        }
        elseif($months>36 && $months<=42 )
        {
            return "Seventh";
        }
        elseif($months>42 && $months<=48 )
        {
            return "Eighth";
        }
        else
        {
            return "Unknown Year Entered";
        }
    }

    public function assignment_no($num)
    {
        switch($num)
        {
            case 1:
                return 'First';
                break;

            case 2:
                return 'Second';
                break;

            case 3:
                return 'Third';
                break;

            case 4:
                return 'Fourth';
                break;

            case 5:
                return 'Fifth';
                break;
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
		Assignment::destroy($id);
        return Redirect::to('admin/assignment_select');

	}


}
