<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contacts.edit', compact('contact'));
    }

    public function show($id)
    {
        $contact = Contact::find($id);
        return view('contacts.show', compact('contact'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contactNumber = preg_replace('/[^0-9]/', '', $request->contact);
        $request->merge([
            'contact' => $contactNumber,
        ]);
        $rules = [
            'name' => 'required|max:255|min:5',
            'contact' => 'required|min:10|max:10',
            'email' => 'required|email|unique:contacts,email',
        ];
        if($request->validate($rules)){
            $contact = Contact::create($request);
            if($contact){
                return redirect()->back()->with('success', 'Contact created with success!');
            } else {
                return redirect()->back()->with('danger', 'Not possible create this Contact! Try again.');
            }
        }
        
        return redirect()->back()->with('danger', 'Not possible create this Contact! Try again.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rules = [ 
            'name' => 'required|max:255|min:5',
            'contact' => 'required|min:9|max:9',
            'email' => 'required|email|unique:contacts,email',
        ];

        if($request->validate($rules)){
            $contact = Contact::updateContact($request);

            if($contact) {
                return redirect()->back()->with('success', 'Contact updated with success!');
            } else {
                return redirect()->back()->with('danger', 'Not possible update this Contact! Try again.');
            }
        }
        return redirect()->back()->with('danger', 'Not possible update this Contact! Try again.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $contact
     * @return \Illuminate\Http\Response
     */
    public function delete($contact_id)
    {
        $contact = Contact::find($contact_id);
        if ($contact) {
            $contact->delete();
            return redirect()->back()->with('success', 'Contact deleted with success!');
        }
        return redirect()->back()->with('danger', 'Contact not found, try again!');
    }

    public function onlyDigits($data) {
        return preg_replace('/[^0-9]/', '', $data);    
    }
}
