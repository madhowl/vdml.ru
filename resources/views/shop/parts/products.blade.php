<div class="product-header-wrap d-md-flex justify-content-md-between align-items-center">
    <div class="grid-list-option">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link" id="nav-grid-tab" data-bs-toggle="tab" data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid" aria-selected="false"><i class="fa fa-th"></i></button>
                <button class="nav-link active" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="true"><i class="fa fa-th-list"></i></button>
            </div>
        </nav>
    </div>
    <div class="nav-short-area d-md-flex align-items-center">
        <p class="show-product">Showing 1 - 18 of 33 result</p>
        <div class="toolbar-shorter">
            <label for="SortBy">Sort by</label>
            <select id="SortBy" class="form-select" aria-label="Sort by">
                <option value="manual">Featured</option>
                <option value="best-selling">Best Selling</option>
                <option value="title-ascending" selected>Alphabetically, A-Z</option>
                <option value="title-descending">Alphabetically, Z-A</option>
                <option value="price-ascending">Price, low to high</option>
                <option value="price-descending">Price, high to low</option>
                <option value="created-descending">Date, new to old</option>
                <option value="created-ascending">Date, old to new</option>
            </select>
        </div>
    </div>
</div>
<div class="product-body-wrap">
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-4">
                    <!--== Start Shop Item ==-->
                    <div class="product-item">
                        <div class="inner-content">
                            <div class="product-thumb">
                                <a href="/product/{{$product->id}}">
                                    <img class="w-100" src="{{$product->image}}" alt="Image-HasTech">
                                </a>
                                <div class="product-action">
                                    <div class="addto-wrap">
                                        <a class="add-cart" href="cart.html">
                                            <i class="zmdi zmdi-shopping-cart-plus icon"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-desc">
                                <div class="product-info">
                                    <h4 class="title"><a href="/product/{{$product->id}}">
                                            {{$product->name}}</a></h4>
                                    <div class="prices">
                                        <span class="price">{{$product->price}} руб.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--== End Shop Item ==-->

                </div>
                @endforeach
            </div>

        </div>
        <div class="tab-pane fade show active" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
            <div class="row">
                @foreach($products as $product )
                    <div class="col-12">
                        <!--== Start Shop Item ==-->
                        <div class="product-item product-item-list">
                            <div class="inner-content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="product-thumb">
                                            <a href="/product/{{$product->id}}">
                                                <img class="w-100" src="{{$product->image}}" alt="Image-HasTech">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="product-desc">
                                            <div class="product-info">
                                                <h4 class="title"><a href="/product/{{$product->id}}"> {{$product->name}}</a></h4>
                                                <div class="prices">
                                                    <span class="price">{{$product->price}} руб.</span>
                                                </div>
                                                <p>{{$product->description}}</p>
                                                <div class="product-action">
                                                    <div class="addto-wrap">
                                                        <a class="add-cart" href="cart.html">
                                                            <i class="zmdi zmdi-shopping-cart-plus icon"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Shop Item ==-->
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <!--== Start Pagination Wrap ==-->
    <div class="row">
        <div class="col-12">
            <div class="pagination-content-wrap border-top">

                {{ $products->links()}}
            </div>
        </div>
    </div>
    <!--== End Pagination Wrap ==-->
</div>
