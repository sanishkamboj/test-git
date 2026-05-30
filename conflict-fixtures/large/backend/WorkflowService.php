<?php

final class WorkflowService
{
    public function buildState(array $ticket): array
    {
        $header = [
            'title' => 'Base Workflow',
            'status' => 'draft',
            'owner' => 'operations',
            'priority' => 'normal',
        ];

        $intake = [
            'step' => 'intake',
            'queue' => 'general',
            'sla_hours' => 24,
            'message' => 'Collect the first report and confirm the customer account.',
        ];

        $triage = [
            'step' => 'triage',
            'queue' => 'general',
            'severity' => 'medium',
            'message' => 'Review the report and assign the next responder.',
        ];

        $response = [
            'step' => 'response',
            'queue' => 'general',
            'channel' => 'email',
            'message' => 'Send the prepared response after approval.',
        ];

        $followUp = [
            'step' => 'follow-up',
            'queue' => 'general',
            'due_days' => 3,
            'message' => 'Check whether the customer needs more help.',
        ];

        return [
            'ticket' => $ticket,
            'header' => $header,
            'intake' => $intake,
            'triage' => $triage,
            'response' => $response,
            'follow_up' => $followUp,
        ];
    }
}
