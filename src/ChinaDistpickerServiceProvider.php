<?php

namespace Dcat\Admin\Extension\ChinaDistpicker;

use Dcat\Admin\Form;
use Illuminate\Support\ServiceProvider;

class ChinaDistpickerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        $extension = ChinaDistpicker::make();


        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, ChinaDistpicker::NAME);
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/super-eggs/dcat-admin-extensions-distpicker')],
                'dcat-admin-extensions-distpicker'
            );
        }
        Form::extend('distpicker', \Dcat\Admin\Extension\ChinaDistpicker\Form\Distpicker::class);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }
}
