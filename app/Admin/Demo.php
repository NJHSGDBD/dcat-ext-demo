<?php

namespace App\Admin;

use Dcat\Admin\Form;

class Demo
{
    public function form()
    {
        return Form::make(null, function (Form $form) {
            $form->column(6, function (Form $form) {
                $form->text('text');
                $form->textM('textM')->placeholder('Can input more text');
            });
            $form->column(6, function (Form $form) {
                $form->hasMany('items', function (Form\NestedForm $form) {
                    $form->textM('title')->noPadding();
                    $form->textM('name')->noPadding();
                })->useTable();
            });
        })->disableHeader()->disableFooter();
    }
}
