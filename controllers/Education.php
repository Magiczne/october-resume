<?php namespace Magiczne\Resume\Controllers;

use Backend\Behaviors\FormController;
use Backend\Behaviors\ListController;
use Backend\Behaviors\ReorderController;
use Backend\Classes\Controller;
use BackendMenu;

class Education extends Controller
{
    public $implement = [
        FormController::class,
        ListController::class,
        ReorderController::class
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'magiczne.resume.manage-resume'
    ];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Magiczne.Resume', 'resume', 'education');
    }
}
