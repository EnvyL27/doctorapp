<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\Record;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $record = Record::simplePaginate(3);
        return view('doctor.record.index', compact('record'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $medicine = Medicine::all(); //get data from class table
        // $catalog = Catalog::all();
        return view('doctor.record.create', compact('user', 'medicine'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'user_id' => ['required'],
            'disease' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string'],
            'medicine1' => ['required'],
            'medicine2' => [''],
            'medicine3' => [''],
            'medicine4' => [''],
        ];

        $data = $request->validate($rules);

        Record::create($data);

        return redirect()->route('record.index')
            ->with('success', 'medical record succesfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $record = Record::where('id', $id)->first();
        return view('doctor.record.detail', compact('record'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all();
        $medicine = Medicine::all();
        $record = Record::where('id', $id)->first();
        return view('doctor.record.edit', compact('record', 'user', 'medicine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Record $record)
    {
        $rules = [
            'user_id' => ['required'],
            'disease' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string'],
            'medicine1' => ['required'],
            'medicine2' => [''],
            'medicine3' => [''],
            'medicine4' => [''],
        ];

        $data = $request->validate($rules);

        Record::where('id', $record->id)
            ->update($data);

        //if the data successfully updated, will return to main page
        return redirect()->route('record.index')
            ->with('success', 'Medical Record Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Record::find($id);
        $record->delete();
        return redirect()->route('record.index')
            ->with('success', 'Record Successfully Deleted');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;

        // $record = Record::

        $record = Record::Where('disease', 'like', "%" . $keyword . "%")
            ->orWhere('description', 'like', "%" . $keyword . "%")
            ->orwhereHas('user', function ($q) use ($keyword) {
                $q->where('name', 'like', '%' . $keyword . '%');
            })
            ->orwhereHas('medicine_1', function ($q) use ($keyword) {
                $q->where('name', 'like', '%' . $keyword . '%');
            })
            ->orwhereHas('medicine_2', function ($q) use ($keyword) {
                $q->where('name', 'like', '%' . $keyword . '%');
            })
            ->orwhereHas('medicine_3', function ($q) use ($keyword) {
                $q->where('name', 'like', '%' . $keyword . '%');
            })
            ->orwhereHas('medicine_4', function ($q) use ($keyword) {
                $q->where('name', 'like', '%' . $keyword . '%');
            })
            // ->orWhere('age', 'like', "%" . $keyword . "%")
            // ->orWhere('username', 'like', "%" . $keyword . "%")
            ->simplePaginate(3);

        return view('doctor.record.search', ['record' => $record]);
        // return view('doctor.record.search', compact('record'))
        //     ->with('i', (request()->input('page', 1) - 1) * 3);
    }
}
