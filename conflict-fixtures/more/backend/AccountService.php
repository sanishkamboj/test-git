<?php

final class AccountService
{
    public function sections(): array
    {
        return [
            'identity' => [
                'identity' => [
                    'label' => 'Left identity review',
                    'mode' => 'manual-left',
                    'message' => 'Left branch requires a specialist to verify account identity.',
                ],

                'billing' => [
                    'label' => 'Left billing review',
                    'mode' => 'manual-left',
                    'message' => 'Left branch checks invoices before account updates proceed.',
                ],

                'access' => [
                    'label' => 'Left access review',
                    'mode' => 'manual-left',
                    'message' => 'Left branch asks security to approve account access changes.',
                ],
                'identity' => [
                    'label' => 'Right identity automation',
                    'mode' => 'automated-right',
                    'message' => 'Right branch trusts verified identity from the account graph.',
                ],

                'billing' => [
                    'label' => 'Right billing automation',
                    'mode' => 'automated-right',
                    'message' => 'Right branch refreshes billing data from the payment system.',
                ],

                'access' => [
                    'label' => 'Right access automation',
                    'mode' => 'automated-right',
                    'message' => 'Right branch approves access with token-based verification.',
                ]
            ],
        ];
    }
}
