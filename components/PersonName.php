<?php namespace Magiczne\Resume\Components;

use Cms\Classes\ComponentBase;
use Magiczne\Resume\Models\Settings;

class PersonName extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'magiczne.resume::lang.components.person_name.name',
            'description' => 'magiczne.resume::lang.components.person_name.description'
        ];
    }

    public function personName()
    {
        return Settings::get('name');
    }
}
