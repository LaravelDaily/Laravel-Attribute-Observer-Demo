<?php

namespace App\AttributeObservers;

use App\Models\User;
use App\Mail\UserChangedEmail;
use Illuminate\Support\Facades\Mail;

class UserEmailObserver
{
    /**
     * Handle changes to the "id" field of User on "created" events.
     *
     * @param \App\Models\User $user
     * @param mixed $newValue The current value of the field
     * @param mixed $oldValue The previous value of the field
     * @return void
     */
    public function onEmailUpdated(User $user, mixed $newValue, mixed $oldValue)
    {
        Mail::to('admin@admin.com')
            ->send(new UserChangedEmail($user, $newValue, $oldValue));
    }
}
