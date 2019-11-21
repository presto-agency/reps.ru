<?php

namespace App\Http\Sections;

use AdminColumn;
use AdminColumnEditable;
use AdminDisplay;
use AdminDisplayFilter;
use AdminForm;
use AdminFormElement;
use App\Services\ServiceAssistants\PathHelper;
use Illuminate\Http\UploadedFile;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;

/**
 * Class UserGallery
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 * @property \App\Models\UserGallery $model
 *
 */
class UserGallery extends Section
{

    /**
     * @var bool
     */
    protected $checkAccess = false;
    /**
     * @var bool
     */
    protected $alias = false;

    /**
     * @return string
     */
    public function getIcon()
    {
        return parent::getIcon();
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return 'Галерея';
    }


    /**
     * @return \SleepingOwl\Admin\Display\DisplayDatatablesAsync
     * @throws \Exception
     */
    public function onDisplay()
    {
        $display = AdminDisplay::datatablesAsync()
            ->setDisplaySearch(false)
            ->setHtmlAttribute(
                'class',
                'table-info table-sm text-center'
            )
            ->with(['users'])
            ->paginate(10);
        $display->setFilters(
            AdminDisplayFilter::related('for_adults')
                ->setModel(\App\Models\UserGallery::class)
        );
        $display->setApply(
            function ($query) {
                $query->orderBy('id', 'desc');
            }
        );
        $display->setColumns(
            [
                AdminColumn::text('id', 'Id')->setWidth(50),
                AdminColumn::image(
                    function ($model) {
                        if ( ! empty($model->picture)
                            && PathHelper::checkFileExists(
                                $model->picture
                            )
                        ) {
                            return $model->picture;
                        } else {
                            return 'images/default/gallery/no-img.png';
                        }
                    }
                )->setLabel('Изображение')->setWidth(10),
                AdminColumn::relatedLink('users.name', 'Пользователь'),
                AdminColumn::text('sign', 'Подпись'),
                AdminColumnEditable::checkbox('for_adults')
                    ->setLabel('18+')
                    ->setWidth(50)
                    ->append(AdminColumn::filter('for_adults')),

                AdminColumn::custom(
                    'Рейтинг',
                    function ($model) {
                        $thumbsUp
                                = '<span style="font-size: 1em; color: green;"><i class="far fa-thumbs-up"></i></span>';
                        $equals = '<i class="fas fa-equals"></i>';
                        $thumbsDown
                                = '<span style="font-size: 1em; color: red;"><i class="far fa-thumbs-down"></i></span>';

                        return $thumbsUp.$model->positive_count.'<br/>'.$equals
                            .($model->positive_count - $model->negative_count)
                            .'<br/>'.$thumbsDown.$model->negative_count;
                    }
                )->setWidth(10),

                $comments_count = AdminColumn::count('comments', 'Коментарии')
                    ->setWidth(100),

            ]
        );

        $control    = $display->getColumns()->getControlColumn();
        $buttonShow = $this->show();
        $control->addButton($buttonShow);

        return $display;
    }

    /**
     * @param  int  $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        $display = AdminForm::panel();

        $display->setItems(
            [
                $picture = AdminColumn::image('picture', 'Изображение')
                    ->setImageWidth('450'),

                $sign = AdminFormElement::text('sign', 'Подпись')
                    ->setHtmlAttribute(
                        'placeholder',
                        'Подпись'
                    )
                    ->setHtmlAttribute('maxlength', '255')
                    ->setHtmlAttribute('minlength', '1')
                    ->setValidationRules([
                        'nullable', 'string', 'between:1,255',
                    ]),
            ]
        );

        return $display;
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        $display = AdminForm::panel();
        $display->setItems(
            [
                $picture = AdminFormElement::image('picture', 'Картинка')
                    ->setUploadPath(
                        function (
                            UploadedFile $file
                        ) {
                            return 'storage'
                                .PathHelper::checkUploadsFileAndPath(
                                    "/images/users/galleries"
                                );
                        }
                    )
                    ->setValidationRules(
                        [
                            'required',
                            'max:2048',
                        ]
                    ),
                $sign = AdminFormElement::text('sign', 'Подпись')
                    ->setHtmlAttribute(
                        'placeholder',
                        'Подпись'
                    )
                    ->setHtmlAttribute('maxlength', '255')
                    ->setHtmlAttribute('minlength', '1')
                    ->setValidationRules(
                        [
                            'nullable',
                            'string',
                            'between:1,255',
                        ]
                    ),
                $for_adults = AdminFormElement::checkbox('for_adults', '18+')
                    ->setDefaultValue(false),
            ]
        );

        return $display;
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

    /**
     * @return \SleepingOwl\Admin\Display\ControlLink
     */
    public function show()
    {

        $link = new \SleepingOwl\Admin\Display\ControlLink(
            function (
                \Illuminate\Database\Eloquent\Model $model
            ) {
                $url = asset('admin/user_galleries/show/'.$model->getKey());

                return $url;
            }, function (\Illuminate\Database\Eloquent\Model $model) {
            return 'Просмотреть';
        }, 50
        );
        $link->hideText();
        $link->setIcon('fa fa-eye');
        $link->setHtmlAttribute('class', 'btn-info');

        return $link;
    }

}
