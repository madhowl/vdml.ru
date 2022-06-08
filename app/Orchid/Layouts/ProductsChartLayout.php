<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Chart;

class ProductsChartLayout extends Chart
{
    /**
     * Add a title to the Chart.
     *
     * @var string
     */
    protected $title = 'Добавление продуктов за месяц';

    /**
     * Available options:
     * 'bar', 'line',
     * 'pie', 'percentage'.
     *
     * @var string
     */
    protected $type = 'line';

    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the chart.
     *
     * @var string
     */
    protected $target = 'productChart';

    /**
     * Determines whether to display the export button.
     *
     * @var bool
     */
    protected $export = false;
    protected $lineOptions = [
        'spline'     => 1,
        'regionFill' => 1,
        'hideDots'   => 0,
        'hideLine'   => 0,
        'heatline'   => 0,
        'dotSize'    => 3,
    ];
    protected $colors = [
        '#2274A5',
        '#F75C03',
        '#F1C40F',
        '#D90368',
        '#00CC66',
    ];
}
