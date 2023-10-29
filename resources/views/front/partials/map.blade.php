<!-- cta__area start -->
<section class="cta__area">
    <div class="container">
        <div class="row gx-md-0">
            <div class="col-xl-5 col-lg-6">
                <div class="cta__wrapper black-bg pt-85 pb-80 pl-50">
                    <img class="shapes__1" src="{{ asset('assets/front/img/shape/line-12b.svg') }}" alt="Line">
                    <h2 class="section__title__one text-white mb-50">Her konuda bizimle iletişime geçin.
                    </h2>
                    <a href="{{ route('contact') }}" class="ht_btn"><span>İLETİŞİME GEÇ<img src="{{ asset('assets/front/img/icon/arrow1.svg') }}" alt=""></span></a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="map__area">
                    <iframe
                        src="{{ $_siteSetting->map }}"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">

                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cta__area end -->
