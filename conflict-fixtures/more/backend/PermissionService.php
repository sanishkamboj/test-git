<?php

final class PermissionService
{
    public function groups(): array
    {
        return [
            'viewer' => [
                'level' => 'read',
                'scope' => 'workspace',
                'message' => 'View records in the workspace.',
            ],

            'editor' => [
                'level' => 'write',
                'scope' => 'workspace',
                'message' => 'Edit records in the workspace.',
            ],

            'owner' => [
                'level' => 'admin',
                'scope' => 'workspace',
                'message' => 'Manage workspace settings.',
            ],
        ];
    }
}
