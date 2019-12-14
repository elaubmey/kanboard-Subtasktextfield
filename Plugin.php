<?php

namespace Kanboard\Plugin\SubtaskTextfield;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;
use Kanboard\Model\TaskModel;
use Kanboard\Model\SubtaskModel;


class Plugin extends Base
{
    public function initialize()
    {
        //Forms
        $this->template->hook->attach('template:subtask:form:edit', 'SubtaskTextfield:subtask/form');
        
        //Task Details
        $this->template->hook->attach('template:subtask:table:header:before-timetracking', 'SubtaskTextfield:subtask/table_header');
        $this->template->hook->attach('template:subtask:table:rows', 'SubtaskTextfield:subtask/table_rows');

        //Board Tooltip
        $this->template->hook->attach('template:board:tooltip:subtasks:header:before-assignee', 'SubtaskTextfield:subtask/table_header');
        $this->template->hook->attach('template:board:tooltip:subtasks:rows', 'SubtaskTextfield:subtask/table_rows');
    }
    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        return 'SubtaskTextfield';
    }

    public function getPluginDescription()
    {
        return t('Add a textfield after creation a subtask');
    }

    public function getPluginAuthor()
    {
        return 'Eric Laubmeyer';
    }

    public function getPluginVersion()
    {
        return '1.1.0';
    }

    public function getPluginHomepage()
    {
        return '';
    }
}
