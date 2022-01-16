<?php

namespace Koraycicekciogullari\HydroContact\Controllers;

use App\Http\Controllers\Controller;
use Koraycicekciogullari\HydroContact\Models\Contact;
use Koraycicekciogullari\HydroContact\Resources\ContactCollection;
use Koraycicekciogullari\HydroContact\Resources\ContactResource;

class ContactController extends Controller
{

    public function __construct()
    {
        $this->middleware('role_or_permission:admin|root|contact index')->only(['index']);
        $this->middleware('role_or_permission:admin|root|contact show')->only(['show']);
        $this->middleware('role_or_permission:admin|root|contact destroy')->only(['destroy']);
    }

    /**
     * @return ContactCollection
     */
    public function index(): ContactCollection
    {
        return new ContactCollection(Contact::orderByDesc('id')->paginate());
    }

    /**
     * @param Contact $contact
     * @return ContactResource
     */
    public function show(Contact $contact): ContactResource
    {
        if(!$contact->is_read){
            $contact->is_read = 1;
            $contact->update();
        }
        return new ContactResource($contact);
    }

    /**
     * @param Contact $contact
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
    }
}
