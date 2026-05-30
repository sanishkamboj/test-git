<?php

final class DashboardService
{
    public function panels(): array
    {
        return [
            'summary' => [
                'title' => 'Summary',
                'refresh' => 'manual',
                'message' => 'Show the current support overview.',
            ],

            'risks' => [
                'title' => 'Risks',
                'refresh' => 'manual',
                'message' => 'List issues that need review.',
            ],

            'activity' => [
                'title' => 'Activity',
                'refresh' => 'manual',
                'message' => 'Show recent updates from the team.',
            ],
        ];
    }
}
