@extends('audesk.layout')

@section('title')

@endsection

@section('content')
    <!-- Banner -->
    <div class="banner-area banner-area-two">
        <div class="banner-img">
            <img src="assets/img/home-one/banner-car-two.png" alt="Banner">
            <img src="{{asset('/image/790x580.png')}}" alt="Banner">
        </div>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="banner-text">
                        <h1>ООО "ВЛАДМЕТАЛЛ"</h1>
                        <p>Наша компания занимается специализированными поставками высокотехнологичного оборудования для пищевых производств различных отраслей промышленности. </p><p> Основными направлениями нашей компании является оборудование для выдува ПЭТ бутылок, оборудование розлива питьевой газированной воды, напитков, широкая линейка фасовочно-упаковочного оборудования, оборудование для пищевых производств, цехов и многое другое.</p>

                        <div class="cmn-btn">
                            <a class="banner-btn-left" href="{{route ('catalog')}}">
                                <i class='bx bx-meteor'></i>
                                Перейти в каталог
                            </a>
                            <a class="banner-btn-right" href="tel:+79502902950">
                                <i class='bx bx-phone-call' ></i>
                                8(950)290-29-50 (отдел продаж)
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Address -->
    <div class="address-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="address-item">
                        <i class='bx bxs-paper-plane'></i>
                        <h3>Адрес: </h3>
                        <span>Владивосток, Толстого 30 офис 303</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="address-item">
                        <i class='bx bxs-phone-call'></i>
                        <h3>Позвоните нам</h3>
                        <a href="tel:+0755543332322">8(423)207-87-52</a>
                        <a href="tel:+0525543452892">8(950)290-29-50</a>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="address-item address-one">
                        <i class='bx bxs-time-five'></i>
                        <h3>Время работы</h3>
                        <span>Ежедневно</span>
                        <span>с 10:00 до 18.00 </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Address -->
    <!-- Quality -->
    <section class="quality-area quality-area-two">
        <div class="quality-img">
            <img src="assets/img/home-one/quality-shape.png" alt="Quality">
            <img src="assets/img/home-one/quality-shape.png" alt="Quality">
            <img src="{{asset('/image/450x550.png')}}" alt="Quality">
        </div>
        <div class="container">
            <div class="quality-content">
                <div class="section-title">
                    <h2>Качественная работа – наш главный приоритет</h2>
                    <p>  В зависимости от Ваших потребностей, мы подберём наиболее соответствующее по техническим характеристикам и наиболее приемлемое по цене оборудование. </p>
                    <p>Мы специализируется как на поставках комплексных линий, так и на продаже отдельных технологических единиц оборудования. </p>

                </div>
                <div class="cmn-btn">
                    <a class="banner-btn-left" href="about.html">
                        Read More
                    </a>
                </div>
                <img src="assets/img/home-one/tyre.png" alt="Quality">
            </div>
        </div>
    </section>
    <!-- End Quality -->
    <!-- Parts -->
    <section class="parts-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Новинки</span>
                <h2>Мы рекомендуем</h2>
            </div>
            <div class="row">
                @foreach($rand_products as $item)
                <div class="col-sm-6 col-lg-3">
                    <div class="parts-item">
                        <div class="parts-top">
                            <img src="{{$item->image}}" alt="Parts">
                        </div>
                        <h3>{{$item->name}}</h3>
                        <div class="cmn-btn">
                            <a class="banner-btn-left" href="cart.html">
                                Подробнее
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="parts-view">
                <a href="{{route ('catalog')}}">Перейти в каталог</a>
            </div>
        </div>
    </section>
    <!-- End Parts -->

    <!-- Feature -->
    <div class="feature-area">
        <div class="feature-shape">
            <img src="assets/img/home-one/feature-shape.png" alt="Feature">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="feature-img">
                        <img src="{{asset('/image/pererabotka-selhozproduktsii.jpg')}}" alt="Feature">
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="feature-content">
                        <h2>Наши особенности</h2>
                        <ul>
                            <li>
                                <i class='bx bx-box'></i>
                                <h3>Надежная и качественная работа</h3>
                                <p>Покупая в нашей компании, Вы заключаете договор с Российской компанией, имеете полный пакет официальных документов. </p>
                            </li>
                            <li>
                                <i class='bx bxs-truck'></i>
                                <h3>Качественное предоставление услуг</h3>
                                <p>Оборудование сопровождается на всём сроке эксплуатации</p>
                            </li>
                            <li>
                                <i class='bx bx-money'></i>
                                <h3>Только проверенные производители</h3>
                                <p>Мы осуществим поставку любых запасных частей и техническую поддержку</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Feature -->


    <!-- Pricing -->
    <section class="pricing-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Отзывы</span>
                <h2>Что о нас говорят</h2>
            </div>

        </div>
    </section>
    <!-- End Pricing -->


    <!-- Review -->
    <div class="review-area">
        <div class="review-shape">
            <img src="assets/img/home-one/review/review-shape.png" alt="Review">
        </div>
        <div class="video-wrap">
            <a href="https://www.youtube.com/watch?v=aqz-KE-bpKQ" class="popup-youtube">
                <i class='bx bx-play'></i>
            </a>
        </div>
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-lg-6 ptb-100">
                    <div class="review-slider owl-theme owl-carousel">
                        <div class="review-item">
                            <i class='bx bxs-quote-right'></i>
                            <p>Выражаем благодарность всем сотрудникам ООО «Владметалл» за качественно выполненную работу по производству и поставке аппарата выдува Пэт-тары, всё поставлено в срок.</p>
                            <div class="review-inner">
                                <img src="{{asset('/image/avatar/1.jpg')}}" alt="Review">
                                <h3>Милованов Василий Николаевич</h3>
                                <span>Генеральный директор ООО «Заозёрный», Камчатский край, Россия</span>
                            </div>
                        </div>
                        <div class="review-item">
                            <i class='bx bxs-quote-right'></i>
                            <p> Выражаю благодарность всему коллективу ООО «Владметалл» за качественный подбор и своевременную поставку оборудования для переработки молока и производства сыров и масла. </p>
                            <p>Опираясь на наш опыт сотрудничества, готов рекомендовать ООО «Владметалл» как надежную и компетентную в своей области компанию. </p>
                            <div class="review-inner">
                                <img src="{{asset('/image/avatar/2.jpg')}}" alt="Review">
                                <h3>Охлынин Сергей Владимирович</h3>
                                <span>Индивидуальный предприниматель, Тверская область, Россия</span>
                            </div>
                        </div>
                        <div class="review-item">
                            <i class='bx bxs-quote-right'></i>
                            <p>ЗАО «Авангард» выражает свою благодарность всему коллективу ООО «Владметалл» за качественный подбор и своевременную поставку за своевременную поставку и монтаж Модульного молочного цеха  </p>
                            <p>Особо хочется отметить оперативную реакцию Сервисного центра, на возникающие вопросы и их решение.  </p>
                            <div class="review-inner">
                                <img src="{{asset('/image/avatar/3.jpg')}}" alt="Review">
                                <h3>Кушкин Сергей Александрович</h3>
                                <span>Генеральный директор ЗАО «Авангард», Красноярский край, Россия</span>
                            </div>
                        </div>
                        <div class="review-item">
                            <i class='bx bxs-quote-right'></i>
                            <p>ООО «ЕвроЛайн» выражает свою благодарность всем сотрудникам ООО «Владметалл» за подбор и поставку оборудования для переработки рыбы, выполненные в самые сжатые сроки согласно условиям договора. </p>
                            <p>ООО «ЕвроЛайн» будет рекомендовать ООО «Владметалл» как ответственную, надежную и компетентную компанию. </p>
                            <div class="review-inner">
                                <img src="{{asset('/image/avatar/4.jpg')}}" alt="Review">
                                <h3>Анатолий Иванович Мохов</h3>
                                <span>Исполнительный директор ООО «ЕвроЛайн», Сахалинская область, Россия</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="review-bg">
                        <img src="assets/img/home-one/review/review-right.jpg" alt="Review">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Review -->
    <!-- Address -->
    <section class="pricing-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Видео</span>
                <h2>Наше новое видео</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <iframe  src="https://www.youtube.com/embed/W66Ny1J0Qfk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <iframe  src="https://www.youtube.com/embed/i_1eGmYW-b4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <iframe  src="https://www.youtube.com/embed/2XGHHO66veg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <div class="address-area">
        <div class="container">


        </div>
    </div>
    <!-- End Address -->





@endsection
