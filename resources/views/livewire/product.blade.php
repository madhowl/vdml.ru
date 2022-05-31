<div>

    <div class="service-details-item">
        <div class="service-details-img">
            <img src="{{$product->image}}" alt="{{$product->name}}">
            <h3>{{$product->name}}</h3>
            <div class="product-action-simple">
                <div class="cmn-btn">
                    <a wire:click.prevent="$emit('showModal', '{{$product->name}}')"
                       href="/" class="banner-btn-left">
                        <i class="bx bx-meteor"></i>
                        Запросить стоимость
                    </a>
                </div>
                <p>&nbsp;</p>
            </div>
            {!! $product->short_description!!}
            {!! $product->description!!}
            <div class="product-action-simple">
                <p>&nbsp;</p>
                <div class="cmn-btn">
                    <a wire:click.prevent="$emit('showModal', '{{$product->name}}')"
                       href="/" class="banner-btn-left">
                        <i class="bx bx-meteor"></i>
                        Запросить стоимость
                    </a>
                </div>
                <p>&nbsp;</p>
            </div>
        </div>
    </div>
    <livewire:modal />
</div>
