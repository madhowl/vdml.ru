@extends('audesk.layout')

@section('title')
    @include('audesk.parts.title',['page_title'=>session()->get('page_title')])
@endsection

@section('content')
    <!-- Contact Area -->
    <section class="contact-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-item contact-left">
                        <h3>Интернет-Маркет оборудования ВЛАДМЕТАЛЛ</h3>
                        <p>Любую информацию Вы можете узнать связавшись с нами по указанным ниже контактам:
                            </p>
                        <ul>
                            <li>
                                <i class='bx bx-location-plus'></i>
                                Адрес: Приморский Край, г. Владивосток, Толстого 30 офис 303
                            </li>
                            <li>
                                <i class='bx bx-mail-send'></i>
                                <a href="mailto:vdml@list.ru">
                                    vdml@list.ru (Основной)
                                </a>
                            </li>
                            <li>
                                <i class='bx bx-mail-send'></i>
                                <a href="mailto:manager-vdml@list.ru">
                                    manager-vdml@list.ru (Отдел продаж)
                                </a>
                            </li>
                            <li>
                                <i class='bx bx-phone-call'></i>
                                <a href="tel:+74232078752">
                                    8(423)207-87-52 (директор)
                                </a>
                            </li>
                            <li>
                                <i class='bx bx-phone-call'></i>
                                <a href="tel:+79502902950">
                                    8(950)290-29-50 (отдел продаж)  Можно на WatsUpp!!
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-item contact-right">
                        <h3>Мы на яндекс карте:</h3>
                        <div style="position:relative;overflow:hidden;">
                            <a href="https://yandex.ru/maps/org/vladmetall/1944765470/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Владметалл</a>
                            <a href="https://yandex.ru/maps/75/vladivostok/category/food_processing_equipment/184106814/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Пищевое оборудование во Владивостоке</a><a href="https://yandex.ru/maps/75/vladivostok/category/laundry_and_dry_cleaning_equipment/184106736/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:28px;">Оборудование для химчисток и прачечных во Владивостоке</a>
                            <iframe src="https://yandex.ru/map-widget/v1/-/CCUJ54WFGC" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

@endsection
