<?php

final class AnalyticsService
{
    public function cards(): array
    {
        return [
            'volume' => [
                'metric' => 'requests',
                'window' => 'daily',
                'message' => 'Count requests received today.',
            ],

            'quality' => [
                'metric' => 'reviews',
                'window' => 'daily',
                'message' => 'Track reviews completed today.',
            ],

            'response' => [
                'metric' => 'responses',
                'window' => 'daily',
                'message' => 'Measure responses sent today.',
            ],
        ];
    }
}
