<?php

class HumanResourceController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('hr.hrdashboard');
	}

	public function person()
	{
		return View::make('hr.register_person');
	}

	public function personOtherInfo()
	{
		return View::make('hr.person_other_information');
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


    public function positionShow()
    {
       return View::make('hr.positionAdd');
    }


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $position = new Position();
        $position->name = Input::get('position_name');
        $position->facility = Input::get('facility');
        $position->proposed_hiring_date = Input::get('proposed_hiring_date');
        $position->status = Input::get('position_status');
        $position->proposed_salary = Input::get('proposed_salary');
        $position->save();

        Session::flash('message', 'Successfully added!');
        return View::make('hr.positionAdd');

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
		//
	}


}
