<ul class="header-action">
    <li class="search-item">
        <a class="action-item" href="page-search.html">
            <i class="zmdi zmdi-search icon"></i>
        </a>
    </li>
    <li class="currency-menu">
        <a class="action-item" href="#/"><i class="zmdi zmdi-lock-outline icon"></i></a>
        <ul class="currency-dropdown">
            <li class="currency">
                <a href="#/"><span class="current-currency">USD</span></a>
                <ul>
                    <li class="active"><a href="#/">Руб. - Российский рубль</a></li>
                    <li class="#/"><a href="#/">USD - US Dollar</a></li>
                </ul>
            </li>
            <li class="account">
                <a href="#/"><span class="current-account">My account</span></a>
                <ul>
                    <li><a href="login.html">Login</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="mini-cart">
        <a class="action-item" href="#/">
            <i class="zmdi zmdi-shopping-cart-plus icon"></i>
            <span class="cart-quantity">2</span>
        </a>
        <div class="mini-cart-dropdown">

            <livewire:cart />
            <div class="cart-total-money">
                <h5>Итого: <span class="money">159.00 руб.</span></h5>
            </div>
            <div class="cart-btn">
                <a href="cart.html">Посмотреть карзину</a>
                <a href="checkout.html">Оформить заказ</a>
            </div>
        </div>
    </li>
</ul>
