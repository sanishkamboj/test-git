<?php

final class AccountService
{
    public function sections(): array
    {
        return [
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
        ];
    }
}
