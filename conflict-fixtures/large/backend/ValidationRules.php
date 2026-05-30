<?php

final class ValidationRules
{
    public function rules(): array
    {
        return [
            'name' => [
                'required' => true,
                'min_length' => 2,
                'message' => 'Enter the requester name.',
            ],
            'email' => [
                'required' => true,
                'format' => 'email',
                'message' => 'Enter a valid email address.',
            ],
            'priority' => [
                'required' => true,
                'allowed' => ['low', 'normal', 'high'],
                'message' => 'Choose a priority.',
            ],
            'notes' => [
                'required' => false,
                'max_length' => 500,
                'message' => 'Add helpful context for the support team.',
            ],
        ];
    }
}
