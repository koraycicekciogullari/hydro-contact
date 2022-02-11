<?php

namespace Koraycicekciogullari\HydroContact\Observers;

use Koraycicekciogullari\HydroContact\Models\Contact;
use Koraycicekciogullari\HydroContact\Notifications\NewContact;
use Illuminate\Support\Facades\Notification;

class ContactObserver
{

    /**
     * @param Contact $contact
     */
    public function created(Contact $contact)
    {
        Notification::send($contact, new NewContact());
    }

    public function updated(Contact $contact)
    {
        //
    }

    public function deleted(Contact $contact)
    {
        //
    }

    public function restored(Contact $contact)
    {
        //
    }

    public function forceDeleted(Contact $contact)
    {
        //
    }
}
