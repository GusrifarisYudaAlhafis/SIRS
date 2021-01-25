<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrescriptionRequest;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Prescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|void
     */
    public function index()
    {
        if (Auth::user()->roles !== 'PHARMACIST') {
            return abort(403, 'Anda Tidak Punya Hak Akses');
        }
        $data = Prescription::paginate(10);

        return view('prescriptions.index', [
            'item' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PrescriptionRequest  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|void
     */
    public function store(PrescriptionRequest $request)
    {
        if (Auth::user()->roles !== 'DOCTOR') {
            return abort(403, 'Anda Tidak Punya Hak Akses');
        }
        $data = $request->all();
        Prescription::create($data);
        $doctor = Doctor::paginate(10);
        Alert::success('Berhasil', 'Data berhasil ditambah');

        return view('checks.index', [
            'item' => $doctor,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|void
     */
    public function show($id)
    {
        if (Auth::user()->roles !== 'PHARMACIST') {
            return abort(403, 'Anda Tidak Punya Hak Akses');
        }
        $prescription = Prescription::where('patient_id', $id)->get();

        return view('prescriptions.show', [
            'item' => $prescription,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|void
     */
    public function edit($id)
    {
        if (Auth::user()->roles !== 'DOCTOR') {
            return abort(403, 'Anda Tidak Punya Hak Akses');
        }
        $data = Patient::where('id', $id)->get();

        return view('prescriptions.edit', [
            'item' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prescription $prescription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prescription $prescription)
    {
        //
    }
}
