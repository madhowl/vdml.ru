<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Chart;

class PruductInCategoryChartsLayout extends Chart
{
    /**
     * Add a title to the Chart.
     *
     * @var string
     */
    protected $title = 'Продукты по Категориям';

    /**
     * Available options:
     * 'bar', 'line',
     * 'pie', 'percentage'.
     *
     * @var string
     */
    protected $type = 'pie';

    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the chart.
     *
     * @var string
     */
    protected $target = 'productInCategory';

    /**
     * Determines whether to display the export button.
     *
     * @var bool
     */
    protected $export = false;
}
