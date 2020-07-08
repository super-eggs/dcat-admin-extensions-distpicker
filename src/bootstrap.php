<?php

// Register the extension.
Dcat\Admin\Admin::extend(Dcat\Admin\Extension\ChinaDistpicker\ChinaDistpicker::class);

Dcat\Admin\Grid\Filter::extend('distpicker', \Dcat\Admin\Extension\ChinaDistpicker\DistpickerFilter::class);
