<main class="main-content">


    <!--== Start Product Single Area Wrapper ==-->
    <section class="product-area product-single-area">
        <div class="container pt-60 pb-0">
            <div class="row">
                <div class="col-12">
                    <div class="product-single-item" data-margin-bottom="63">
                        <div class="row">
                            <div class="col-lg-6">
                                <!--== Start Product Thumbnail Area ==-->
                                <div class="product-thumb">
                                    <div class="zoom zoom-hover">
                                        <a class="lightbox-image" data-fancybox="gallery" href="{{$product->image}}">
                                            <img src="{{$product->image}}" alt="Image-HasTech">
                                        </a>
                                    </div>
                                </div>
                                <!--== End Product Thumbnail Area ==-->
                            </div>
                            <div class="col-lg-6">
                                <!--== Start Product Info Area ==-->
                                <div class="product-single-info">
                                    <h4 class="title">{{$product->name}}</h4>
                                    <div class="prices">
                                        <span class="price">{{$product->price}} руб.</span>
                                    </div>
                                    <p>{{$product->description}}</p>
                                    <div class="product-action-simple">
                                        <div class="product-quick-action">
                                            <div class="product-quick-qty">
                                                <div class="pro-qty">
                                                    <input type="text" id="quantity" title="Quantity" value="1">
                                                </div>
                                            </div>
                                            <a class="btn-product-add" href="/add-cart/{{$product->id}}">Add to cart</a>
                                        </div>
                                        <div class="payment-button">
                                            <a href="#/" class="btn-payment">Buy it now</a>
                                        </div>
                                        <div class="social-sharing">
                                            <span>Share:</span>
                                            <div class="social-icons">
                                                <a href="#/"><i class="fa fa-facebook"></i></a>
                                                <a href="#/"><i class="fa fa-twitter"></i></a>
                                                <a href="#/"><i class="fa fa-pinterest"></i></a>
                                                <a href="#/"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--== End Product Info Area ==-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--== End Product Single Area Wrapper ==-->


</main>
