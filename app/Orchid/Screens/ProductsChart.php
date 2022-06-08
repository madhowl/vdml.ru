<?php

namespace App\Orchid\Screens;

use App\Models\Product;
use App\Orchid\Layouts\Examples\ChartBarExample;
use App\Orchid\Layouts\Examples\ChartLineExample;
use App\Orchid\Layouts\ProductsChartLayout;
use App\Orchid\Layouts\PruductInCategoryChartsLayout;
use Carbon\Carbon;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class ProductsChart extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        $start = Carbon::now()->subDay(50);
        $end = Carbon::now()->subDay(1);
        return [
            'productChart' => [
                Product::whereNotNull('updated_at')->countByDays(startDate:null, stopDate:null, dateColumn:'updated_at')->toChart('product edit')
            ],
            'productInCategory' => Product::countForGroup('category_id')->toChart(),
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Статистика по товарам';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::columns([
                ProductsChartLayout::class,
                PruductInCategoryChartsLayout::class,
            ]),
        ];
    }
}
