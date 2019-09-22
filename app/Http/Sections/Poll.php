<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use AdminNavigation;
use AdminColumnEditable;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;

/**
 * Class Poll
 *
 * @property \App\Models\Poll $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Poll extends Section implements Initializable
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $alias;


    /**
     *
     */
    public function initialize()
    {

        $page = AdminNavigation::getPages()->findById('parent-general');
        $page->addPage(
            $this->makePage(200)->setIcon('fa fa-lightbulb-o')
        );
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $display = AdminDisplay::datatablesAsync();
        $display->setDatatableAttributes(['bInfo' => false]);
        $display->setHtmlAttribute('class', 'table-info table-hover text-center');
        $display->setDisplaySearch(true);
        $display->paginate(5);
        $display->setApply(function ($query) {
            $query->orderBy('created_at', 'desc');
        });
        $display->setColumns([
            $id = AdminColumn::text('id', 'Id')->setWidth('100px'),
            $question = AdminColumn::text('question', 'Title')->setWidth('100px'),
            $active = AdminColumn::custom('Active<br/>', function ($active) {
                return $active->active ? '<i class="fa fa-check"></i>' : '<i class="fa fa-minus"></i>';
            })->setWidth('100px'),
            $count_answer = AdminColumn::text('count_answer', 'Answers')->setWidth('100px'),
            $for_login = AdminColumnEditable::checkbox('for_login', 'For login only')
               ->setWidth('100px'),
        ]);

        return $display;
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        $display = AdminForm::panel();

        $display->setItems([
            $question = AdminFormElement::text('question', 'Question')
                ->setValidationRules(['required', 'string', 'max:255']),
            $active = AdminFormElement::checkbox('active', 'Active'),
            $forLogin = AdminFormElement::radio('for_login', 'Who can see')
                ->setOptions(['0' => 'For login only', '1' => 'For all']),

        ]);

        return $display;
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {

        return $this->onEdit(null);
//        return view('admin.pollMod');
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        // remove if unused
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
