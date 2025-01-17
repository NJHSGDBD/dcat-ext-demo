<?php

namespace App\Admin;

use App\Models\User;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Models\Administrator;

class Demo
{
    public function form()
    {
        return Form::make(null, function (Form $form) {
            $form->block(4, function (Form\BlockForm $form) {
                $form->title('TextM');
                $form->text('text');
                $form->textM('textM')->placeholder('Can input more text');
            });
            $form->block(4, function (Form\BlockForm $form) {
                $form->title('SwitchM');
                $form->switch('switch');
                $form->switchM('switchM');
            });
            /*$form->block(12, function (Form\BlockForm $form) {
                $form->hasMany('items', function (Form\NestedForm $form) {
                    $form->textM('title')->noPadding();
                    $form->switchM('name')->noPadding();
                })->useTable();
            });*/
        })->disableHeader()->disableFooter();
    }

    public function grid()
    {
        return Grid::make(new Administrator(), function (Grid $grid) {
            $grid->column('editable')->editable();
            $grid->column('editableM')->editableM();
            $grid->column('switch')->switch();
            $grid->column('switchM')->switchM();
        })->disableRowSelector()->disableActions()->disablePagination()->disableToolbar();
    }
}
