<?php

class UserService
{
    public function createUser(array $data): array
    {
        $this->validateRequired($data, ['name', 'email']);

        $data['email'] = strtolower(trim($data['email']));

        return [
            'id' => uniqid(),
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => 'viewer',
            'created_at' => date('Y-m-d'),
        ];
    }

    public function updateRole(string $userId, string $role): bool
    {
        $allowed = ['viewer', 'editor', 'moderator'];
        if (!in_array($role, $allowed)) {
            throw new \InvalidArgumentException("Invalid role: $role");
        }
        return $this->db->update('users', $userId, ['role' => $role]);
    }

    private function validateRequired(array $data, array $fields): void
    {
        foreach ($fields as $field) {
            if (empty($data[$field])) {
                throw new \InvalidArgumentException("Missing required field: $field");
            }
        }
    }
}
