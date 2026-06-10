<?php

class UserService
{
    public function createUser(array $data): array
    {
        $this->validateRequired($data, ['name', 'email', 'phone']);

        if ($this->emailExists($data['email'])) {
            throw new \RuntimeException("Email already registered");
        }

        return [
            'id' => uniqid(),
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'role' => 'viewer',
            'created_at' => date('Y-m-d'),
        ];
    }

    public function updateRole(string $userId, string $role): bool
    {
        $allowed = ['viewer', 'editor', 'admin'];
        if (!in_array($role, $allowed)) {
            throw new \InvalidArgumentException("Invalid role: $role");
        }
        return $this->db->update('users', $userId, ['role' => $role]);
    }

    private function emailExists(string $email): bool
    {
        return $this->db->exists('users', ['email' => $email]);
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
