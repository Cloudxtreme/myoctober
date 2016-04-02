<?php namespace Sysdoc\BetaSignup\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Signups Back-end Controller
 */
class Signups extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Sysdoc.BetaSignup', 'betasignup', 'signups');
    }

    public function index(){
    $this->makeLists();
    $this->makeView('index');
    }

}
