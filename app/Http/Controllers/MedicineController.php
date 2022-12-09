<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicine = Medicine::simplePaginate(5);
        return view('doctor.medicine.index', compact('medicine'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctor.medicine.create');
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
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required'],
            'stock' => ['required'],
        ];

        $data = $request->validate($rules);

        Medicine::create($data);


        return redirect()->route('medicine.index')
            ->with('success', 'Medicine succesfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicine = Medicine::where('id', $id)->first();
        return view('doctor.medicine.detail', compact('medicine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicine = Medicine::where('id', $id)->first();
        return view('doctor.medicine.edit', compact('medicine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required'],
            'stock' => ['required'],
        ];

        $data = $request->validate($rules);

        Medicine::where('id', $medicine->id)
            ->update($data);

        //if the data successfully updated, will return to main page
        return redirect()->route('medicine.index')
            ->with('success', 'Medicine Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicine = Medicine::find($id);

        $medicine->delete();
        return redirect()->route('medicine.index')
            ->with('success', 'Medicine Successfully Deleted');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;

        $medicine = Medicine::where('name', 'like', "%" . $keyword . "%")
            ->orWhere('price', 'like', "%" . $keyword . "%")
            ->orWhere('stock', 'like', "%" . $keyword . "%")
            ->simplePaginate(5);
        return view('doctor.medicine.search', ['medicine' => $medicine]);
    }
}
