<?php

namespace App\Orchid\Presenters;

use Orchid\Support\Presenter;

class ProductPresenter extends Presenter
{
    public function categoryTitle(): string
    {
        return $this->entity->category->title;
    }
}
