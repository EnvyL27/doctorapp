<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient = User::paginate(3);
        return view('doctor.patient.index', compact('patient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctor.patient.create');
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
            'phone' => ['required', 'string', 'max:20'],
            'address' => ['required', 'string', 'max:20'],
            'age' => ['required'],
            'profile' => ['image'],
            'username' => ['required', 'string', 'max:20'],
            'password' => ['required', 'string', 'min:8'],
        ];

        $data = $request->validate($rules);

        $file_name = $request->file('profile')->getClientOriginalName();
        if ($request->file('profile')) {
            $data['profile'] = $request->file('profile')->storeAs('images/profil', $file_name);
        }
        $data['password'] = Hash::make($data['password']);

        User::create($data);


        return redirect()->route('patient.index')
            ->with('success', 'Patient succesfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = User::where('id', $id)->first();
        return view('doctor.patient.detail', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = User::where('id', $id)->first();
        return view('doctor.patient.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $patient)
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'address' => ['required', 'string', 'max:20'],
            'age' => ['required'],
            'profile' => ['image'],
            'username' => ['required', 'string', 'max:20'],
            'password' => ['required', 'string', 'min:8'],
        ];

        $data = $request->validate($rules);


        if ($request->file('profile')) {
            if ($request->oldProfile) {
                Storage::delete($request->oldProfile);
            }
            $data['profile'] = $request->file('profile')->store('images/profil');
        }
        User::where('id', $patient->id)
            ->update($data);

        //if the data successfully updated, will return to main page
        return redirect()->route('patient.index')
            ->with('success', 'Patient Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = User::find($id);
        if ($patient->profile && file_exists(storage_path('app/public/' . $patient->profile))) {
            Storage::delete('public/' . $patient->profile);
        }

        $patient->delete();
        return redirect()->route('patient.index')
            ->with('success', 'Patient Successfully Deleted');
    }
}
