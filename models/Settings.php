<?php namespace Magiczne\Resume\Models;

use Model;

class Settings extends Model
{
    public $implement = [
        'System.Behaviors.SettingsModel',
        '@RainLab.Translate.Behaviors.TranslatableModel'
    ];

    public $settingsCode = 'magiczne_resume_settings';

    public $settingsFields = 'fields.yaml';

    public $translatable = [
        'name', 'gdpr'
    ];
}
