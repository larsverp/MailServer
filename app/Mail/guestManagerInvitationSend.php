<?php

namespace App\Mail;

class guestManagerInvitationSend extends BaseMail
{
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.guestManager.invitationSend');
    }
}
