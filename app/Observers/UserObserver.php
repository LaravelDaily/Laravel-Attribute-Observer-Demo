<?php

namespace App\Observers;

use App\Models\User;
use App\Mail\UserChangedEmail;
use Illuminate\Support\Facades\Mail;

class UserObserver
{
    public function updated(User $user)
    {
        if ($user->wasChanged('email')) {
            Mail::to('admin@admin.com')
                ->send(new UserChangedEmail($user, $user->email, $user->getOriginal('email')));
        }
    }
}
