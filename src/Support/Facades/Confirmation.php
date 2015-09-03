<?php

namespace Daylight\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Daylight\Auth\Accounts\ConfirmationBroker
 */
class Confirmation extends Facade
{
    /**
     * Constant representing a successfully sent confirmation.
     *
     * @var string
     */
    const CONFIRMATION_LINK_SENT = 'confirmations.sent';

    /**
     * Constant representing a successfully account confirmation.
     *
     * @var string
     */
    const ACCOUNT_CONFIRMATION = 'confirmations.verified';

    /**
     * Constant representing the user not found response.
     *
     * @var string
     */
    const INVALID_USER = 'confirmations.user';

    /**
     * Constant representing an invalid token.
     *
     * @var string
     */
    const INVALID_TOKEN = 'confirmations.token';

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'auth.confirmation';
    }
}
