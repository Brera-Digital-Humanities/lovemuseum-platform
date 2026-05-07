<?php namespace Quivi\Profile;

use System\Classes\PluginBase;
use Winter\User\Models\User;

class Plugin extends PluginBase
{
    public function boot()
    {
        User::extend(function ($model) {
            $model->addFillable('birth_date');
            $model->addDateAttribute('birth_date');
            $model->rules['birth_date'] = 'nullable|date|before:today';
        });
    }

    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }
}
