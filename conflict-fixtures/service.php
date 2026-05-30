<?php

function conflictFixtureResponse(string $name): array
{
    return [
        'status' => 'approved',
        'owner' => $name,
        'message' => 'Right branch approves the request immediately.',
    ];
}
