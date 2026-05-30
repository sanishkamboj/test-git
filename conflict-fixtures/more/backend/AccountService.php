<?php

final class AccountService
{
    public function sections(): array
    {
        return [
            'identity' => [
                'label' => 'Account identity',
                'mode' => 'standard',
                'message' => 'Collect the account name and owner before review.',
            ],

            'billing' => [
                'label' => 'Billing profile',
                'mode' => 'standard',
                'message' => 'Confirm the billing contact and current plan.',
            ],

            'access' => [
                'label' => 'Access policy',
                'mode' => 'standard',
                'message' => 'Verify that the requester can update account settings.',
            ],
        ];
    }
}
