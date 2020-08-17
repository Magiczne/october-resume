<?php namespace Magiczne\Resume\Models;

use Model;
use RainLab\Translate\Behaviors\TranslatableModel;
use System\Behaviors\SettingsModel;

class Settings extends Model
{
    public $implement = [
        SettingsModel::class,
        TranslatableModel::class
    ];

    public $settingsCode = 'magiczne_resume_settings';

    public $settingsFields = 'fields.yaml';

    public $translatable = [
        'name', 'gdpr'
    ];
}
