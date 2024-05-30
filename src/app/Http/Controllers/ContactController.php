<?php

namespace App\Http\Controllers;

use App\Http\Filters\ContactFilter;
use App\Http\Requests\ContactRequest;
use App\Http\Resources\Contact\ContactResource;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate(10);
        return view('notebook.index', compact('contacts'));
    }

    public function store(ContactRequest $request)
    {
        $contact = Contact::firstOrCreate($request->validated());
        return ContactResource::make($contact);
    }

    public function show(Contact $contact)
    {
        return ContactResource::make($contact);
    }

    public function update(ContactRequest $request, Contact $contact)
    {
        $contact->update($request->validated());

        return ContactResource::make($contact);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return response()->json(['message'=>'deleted']);
    }
}
