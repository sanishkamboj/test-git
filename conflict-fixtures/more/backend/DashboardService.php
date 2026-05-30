<?php

final class DashboardService
{
    public function panels(): array
    {
        return [
            'summary' => [
                'title' => 'Right summary',
                'refresh' => 'live',
                'message' => 'Right branch streams automated status summaries.',
            ],

            'risks' => [
                'title' => 'Right risks',
                'refresh' => 'live',
                'message' => 'Right branch predicts risks from automation signals.',
            ],

            'activity' => [
                'title' => 'Right activity',
                'refresh' => 'live',
                'message' => 'Right branch shows machine-generated timeline events.',
            ],
        ];
    }
}
