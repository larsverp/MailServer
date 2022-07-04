<?php

namespace App\Http\Controllers;

use App\Http\Requests\BaseEmailRequest;
use App\Mail\guestManagerInvitationSend;
use Illuminate\Support\Facades\Mail;

class guestManager extends Controller
{
    public function invitationSend(BaseEmailRequest $baseEmailRequest)
    {
        // TODO: Implement clever way of being able to send to multiple recipients.
        Mail::to($baseEmailRequest->recipients[0])->send(new guestManagerInvitationSend($baseEmailRequest->subject, $baseEmailRequest->body));
    }
}
