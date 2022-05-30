<?php

namespace App\Orchid\Layouts;
use App\Models\Category;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;

class CategoryListLayout extends Table
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
    public $target = 'categories';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id', 'Id')
                ->sort(),
            TD::make('name', 'Название категории')
                ->sort()
                ->filter(TD::FILTER_TEXT)
                ->render(function (Category $category) {
                    return Link::make($category->name)
                        ->route('platform.category.edit', $category);
                }),
            TD::make('image', 'Изображение категории')
                ->render(function (Category $category){
                    return "<img src='{$category->image}'
                              alt='sample'
                              class='d-block img-fluid img-thumbnail'
                              style='max-width: 150px'>";
                }),
        ];
    }
}
