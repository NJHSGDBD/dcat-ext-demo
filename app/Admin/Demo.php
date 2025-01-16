<?php

namespace App\Admin;

use Dcat\Admin\Form;

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
            $form->block(12, function (Form\BlockForm $form) {
                $form->hasMany('items', function (Form\NestedForm $form) {
                    $form->textM('title')->noPadding();
                    $form->switchM('name')->noPadding();
                })->useTable();
            });
        })->disableHeader()->disableFooter();
    }
}
