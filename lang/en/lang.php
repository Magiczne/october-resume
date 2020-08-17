<?php

return [
    'components' => [
        'resume' => [
            'name' => 'Resume',
            'description' => 'Display your resume'
        ]
    ],
    'fields' => [
        'content' => 'Content',
        'description' => 'Description',
        'icon' => 'Icon',
        'language' => 'Language',
        'mail' => 'Mail',
        'social_name' => 'Social network',
        'time_period' => 'Time period',
        'title' => 'Title',
        'url' => 'URL',
        'value' => 'Value'
    ],
    'form' => [
        'edit' => 'Edit',
        'preview' => 'Preview'
    ],
    'menu' => [
        'education' => 'Education',
        'experience' => 'Experience',
        'info' => 'Info',
        'languages' => 'Languages',
        'socials' => 'Socials'
    ],
    'messages' => [
        'created' => 'New entry has been created',
        'deleted' => 'Entry has been deleted',
        'updated' => 'Entry has been updated'
    ],
    'plugin' => [
        'name' => 'Resume',
        'description' => 'Add resume to your website'
    ],
    'permissions' => [
        'manage-resume' => 'Manage resume'
    ],
    'settings' => [
        'fields' => [
            'name' => 'Name',
            'comment' => 'Type your name here. It will be displayed in the CV'
        ],
        'gdpr' => [
            'label' => 'Consent to the processing of personal data',
            'comments' => 'Enter the consent text. It will be displayed in the CV'
        ]
    ]
];
