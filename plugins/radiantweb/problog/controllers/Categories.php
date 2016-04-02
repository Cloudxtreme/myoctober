<?php namespace Radiantweb\Problog\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

class Categories extends Controller
{
    public $requiredPermissions = ['radiantweb.problog.access_problog_posts'];

    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Radiantweb.Problog', 'problog', 'categories');
    }
}