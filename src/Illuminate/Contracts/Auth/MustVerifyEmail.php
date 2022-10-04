<?php

namespace Illuminate\Contracts\Auth;

interface MustVerifyEmail
{
    /**
     * Determine if the user has verified their email address.
     *
     * @return bool
     */
    public function hasVerifiedEmail(): bool;

    /**
     * Mark the given user's email as verified.
     *
     * @return bool
     */
    public function markEmailAsVerified(): bool;

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification(): void;

    /**
     * Get the email address that should be used for verification.
     *
     * @return string
     */
    public function getEmailForVerification(): string;
}
