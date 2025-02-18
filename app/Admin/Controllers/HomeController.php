<?php

namespace App\Admin\Controllers;

use App\Admin\Demo;
use App\Admin\Metrics\Examples;
use App\Http\Controllers\Controller;
use Dcat\Admin\Http\Controllers\Dashboard;
use Dcat\Admin\Layout\Column;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->row('<h1>Form</h1>')
            ->row((new Demo())->form())
            ->row('<h1>Grid</h1>')
            ->row((new Demo())->grid());
    }
}
