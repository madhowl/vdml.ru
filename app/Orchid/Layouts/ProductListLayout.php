<?php

namespace App\Orchid\Layouts;

use App\Models\Product;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;

class ProductListLayout extends Table
{
    /**
     * Name of columns to which http filter can be applied
     *
     * @var array
     */
    protected $allowedFilters = [
        'name',
    ];

    /**
     * Data source.
     *
     * @var string
     */
    public $target = 'products';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id', 'Id')
                ->sort(),
            TD::make('name', 'Наименование товара')
                ->sort()
                ->filter(TD::FILTER_TEXT)
                ->render(function (Product $product) {
                    return Link::make($product->name)
                        ->route('platform.product.edit', $product);
                }),
//            TD::make('price', 'Стоимость')
//                ->sort(),
            TD::make('category_id', 'Категория')
                ->render(function (Product $product){
                    return $product->presenter()->categoryName();
                })
                ->sort(),
            TD::make('image', 'Изображение товара')
                ->render(function (Product $product){
                    return "<img src='{$product->image}'
                              alt='sample'
                              class='d-block img-fluid img-thumbnail'
                              style='max-width: 250px'>";
            }),

           /* TD::make('created_at', 'Created')
                ->sort(),

            TD::make('updated_at', 'Last edit')
                ->sort(),*/

        ];
    }
}
