<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LecterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lecters = Lecter::all();
        return view('lecters.index', compact('lecters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lecters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validation($request->all());
        $newLecter = new Lecter();
        $newLecter->fill($data);
        $newLecter->save();
        return redirect()->route('lecters.show', $newLecter->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lecter = Lecter::findOrFail($id);
        return view('lecters.show', compact('lecter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecter $lecter)
    {
        return view('lecters.edit', compact('lecter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lecter $lecter)
    {
        $formData = $this->validation($request->all());;
        $lecter->update($formData);
        return redirect()->route('lecters.show', $lecter->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecter $lecter)
    {
        $lecter->delete();
        return redirect()->route('lecters.index');
    }

    private function validation($data)
    {
        $validationResult = Validator::make($data, [
            'childrenName' => 'required|min:2|max:100',
            'childrenSurname' => 'required|min:2|max:100',
            'adress' => 'required|min:5|max:150',
            'city' => 'required|max:100',
            'arrivalDate' => 'required|date||date_format:Y-m-d',
            'present' => 'required|max:350',
            'rating' => 'required',
        ], [
            'childrenName.required' => 'Il nome è obbligatorio',
            'childrenName.min' => 'Il nome deve essere di minimo :min caratteri',
            'childrenName.max' => 'Il nome deve essere di massimo :max caratteri',
            'childrenSurname.required' => 'Il cognome è obbligatorio',
            'childrenSurname.min' => 'Il cognome deve essere di minimo :min caratteri',
            'childrenSurname.max' => 'Il cognome deve essere di massimo :max caratteri',
            'adress.required' => 'Indirizzo  obbligatorio',
            'adress.min' => 'Indirizzo deve essere di minimo :min caratteri',
            'adress.max' => 'Indirizzo deve essere di massimo :max caratteri',
            'city.required' => 'La città è obbligatoria',
            'city.max' => 'La città deve essere di massimo :max caratteri',
            'arrivalDate.required' => 'La data è obbligatoria',
            'arrivalDate.date_format' => 'Formato della data sbagliato',
            'present.required' => 'Il regalo è obbligatorio',
            'present.max' => 'Il regalo deve essere di massimo :max caratteri',
            'rating.required' => 'Il rating è obbligatorio',
        ])->validate();
        return $validationResult;
    }
}
