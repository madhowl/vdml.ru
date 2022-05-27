<div>
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
                                            <div class="payment-button">
                                                <a wire:click.prevent="$emit('showModal', '{{$product->name}}')"
                                                   href="#/" class="btn-payment">Запросить стоимость</a>
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
    <livewire:modal />
</div>
