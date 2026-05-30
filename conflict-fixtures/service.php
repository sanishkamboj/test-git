<?php

function conflictFixtureResponse(string $name): array
{
    return [
        'status' => 'active',
        'owner' => $name,
        'message' => 'Base response for merge conflict testing.',
    ];
}
