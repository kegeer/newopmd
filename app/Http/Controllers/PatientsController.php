<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientStoreRequest;
use App\Models\Patient;
use App\Models\Result;
use function foo\func;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function index()
    {
        $patients = Patient::orderBy('created_at', 'desc')->paginate(8);
        return view('patients.index', compact('patients'));

    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(PatientStoreRequest $request)
    {

        $data = $request->only(['name', 'gender', 'number', 'card_id', 'case_num']);
        $patient = Patient::create($data);

        return response()->json([
            'created' => true,
            'id' => $patient->id
        ]);

    }

    public function show($id)
    {
        $patient = Patient::with('results')->findOrFail($id);
        return view('patients.show', compact('patient'));
    }

    public function edit($id)
    {
        $patient = Patient::with('results')->findOrFail($id);
        return view('patients.edit', compact('invoice'));
    }

    public function update(Request $request, $id)
    {
        $patient = Patient::findOrFail($id);
        return response()->json([
            'updated' => true,
            'id' => $patient->id
        ]);
    }

    public function destroy ($id)
    {
        $patient = Patient::findOrFaile($id);
        Result::where('patient_id', $id->id)->delete();
        $patient->delete();
        return redirect()->route('patients.index');
    }

}
