<?php namespace Magiczne\Resume\Components;

use Cms\Classes\ComponentBase;
use Magiczne\Resume\Models\Education;
use Magiczne\Resume\Models\Experience;
use Magiczne\Resume\Models\Info;
use Magiczne\Resume\Models\Language;
use Magiczne\Resume\Models\Settings;
use Magiczne\Resume\Models\Social;

class Resume extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'magiczne.resume::lang.components.resume.name',
            'description' => 'magiczne.resume::lang.components.resume.description'
        ];
    }

    public function education()
    {
        return Education::orderBy('sort_order')->get();
    }

    public function experience()
    {
        return Experience::orderBy('sort_order')->get();
    }

    public function info()
    {
        return Info::orderBy('sort_order')->get();
    }

    public function languages()
    {
        return Language::orderBy('sort_order')->get();
    }

    public function settings(string $key)
    {
        return Settings::get($key);
    }

    public function socials()
    {
        return Social::orderBy('sort_order')->get();
    }
}
