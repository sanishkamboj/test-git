<?php

function conflictFixtureResponse(string $name): array
{
    return [
        'status' => 'queued',
        'owner' => $name,
        'message' => 'Left branch routes the request through the support queue.',
    ];
}
