<?php namespace Magiczne\Resume;

use Magiczne\Resume\Components\Resume;
use Magiczne\Resume\Models\Settings;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            Resume::class => 'Resume'
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label' => 'magiczne.resume::lang.plugin.name',
                'description' => 'magiczne.resume::lang.plugin.description',
                'icon' => 'icon-id-card',
                'category' => 'magiczne.resume::lang.plugin.name',
                'class' => Settings::class,
                'order' => 400,
                'permissions' => [
                    'magiczne.resume.manage-resume'
                ]
            ]
        ];
    }
}
