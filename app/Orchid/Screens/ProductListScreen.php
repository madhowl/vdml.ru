<?php

namespace App\Orchid\Screens;

use App\Models\Product;
use App\Orchid\Layouts\ProductListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class  ProductListScreen extends Screen
{
    /**
 * Display header name.
 *
 * @var string
 */
    public $name = 'Товары';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = '';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'products' => Product::filters()->defaultSort('id')->paginate()
        ];
    }

    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('Добавить товар')
                ->icon('pencil')
                ->route('platform.product.edit')
        ];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [
            ProductListLayout::class
        ];
    }
}
