<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{

    public function index()
    {
        $persons = Person::all();

        return view('persons.persons', [
            'persons' => $persons
        ]);
    }


    public function create()
    {
        return view('persons.createperson');
    }

    public function show()
    {
        // return view('persons.createperson');
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        Person::create($request->all());

        return redirect('/users');
    }

    public function edit($id)
    {
        $person = Person::find($id);

        return view('persons.editperson', compact('person'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        $person = Person::find($id);

        $person->update($request->all());

        return redirect('/');
    }

    public function destroy($id)
    {
        $id = Person::find($id);
        $id->delete();

        return redirect('/');
    }
}
