<main class="main-singleComic">
    @include('partials.subPartials.jumbotron')
    <section class="jumbotron-part">
        <div class="mycontainer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="current-series">
                            <div class="position-relative">
                                <img src="{{ $singleComic['thumb'] }}" alt="{{ $singleComic['title'] }}">
                                <div class="top-label text-uppercase">{{ $singleComic['type'] }}</div>
                                <div class="bottom-label w-100 text-center">VIEW GALLERY</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-strap"></div>
    </section>
    <section class="description-top">
        <div class="mycontainer">
            <div class="container-fluid">
                <div class="row gx-5">
                    <div class="col-8">
                        <div class="mycard">
                            <h2 class="text-uppercase">{{ $singleComic['title'] }}</h2>
                            <div class="d-flex w-100 mb-3">
                                <div class="price d-flex justify-content-between">
                                    <p class="m-0 fw-bold">U.S. Price: <span>{{ $singleComic['price'] }}</span></p>
                                    <p class="fw-bold m-0">AVAILABLE</p>
                                </div>
                                <div class="availability fw-bold">
                                    Check Availability
                                </div>
                            </div>
                            <div>
                                <p>{{ $singleComic['description'] }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mycard advertisement">
                            <div class="text-end fw-bold">ADVERTISEMENT</div>
                            <img src="{{ Vite::asset('resources/img/images/adv.jpg') }}" alt="Pubblicità">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features-middle border-top">
        <div class="mycontainer">
            <div class="container-fluid">
                <div class="row gx-5">
                    <div class="col-6">
                        <div class="mycard">
                            <h5 class="mt-4 pb-4 m-0 border-bottom">Talent</h5>
                            <div class="description d-flex py-2 border-bottom">
                                <p class="mykey m-0">Art by:</p>
                                <p class="myvalue m-0">{{ $singleComic['artists'] }}</p>
                            </div>
                            <div class="description d-flex py-2 border-bottom">
                                <p class="mykey m-0">Written by:</p>
                                <p class="myvalue m-0">{{ $singleComic['writers'] }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mycard">
                            <h5 class="mt-4 pb-4 m-0 border-bottom">Specs</h5>
                            <div class="description d-flex py-2 border-bottom">
                                <p class="mykey m-0">Series:</p>
                                <p class="myvalue m-0 text-uppercase">{{ $singleComic['series'] }}</p>
                            </div>
                            <div class="description d-flex py-2 border-bottom">
                                <p class="mykey m-0">U.S. Price:</p>
                                <p class="myvalue black m-0">{{ $singleComic['price'] }}</p>
                            </div>
                            <div class="description d-flex py-2 border-bottom">
                                <p class="mykey m-0">On Sale Date:</p>
                                <p class="myvalue black m-0">{{ date_format(new DateTimeImmutable($singleComic['sale_date']), 'M d Y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="icons-bottom border-top">
        <div class="mycontainer">
            <div class="container-fluid">
                <div class="row gx-0">
                    <div class="col-3 border-start border-end">
                        <div class="mycard d-flex justify-content-between">
                            <div class="fw-bold">{{ $icons[0]['title'] }}</div>
                            <div class="img">
                                <img src="{{ Vite::asset($icons[0]['url']) }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-3 border-start border-end">
                        <div class="mycard d-flex justify-content-between">
                            <div class="fw-bold">{{ $icons[2]['title'] }}</div>
                            <div class="img">
                                <img src="{{ Vite::asset($icons[2]['url']) }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-3 border-start border-end">
                        <div class="mycard d-flex justify-content-between">
                            <div class="fw-bold">{{ $icons[3]['title'] }}</div>
                            <div class="img">
                                <img src="{{ Vite::asset($icons[3]['url']) }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-3 border-start border-end">
                        <div class="mycard d-flex justify-content-between">
                            <div class="fw-bold">{{ $icons[1]['title'] }}</div>
                            <div class="img">
                                <img src="{{ Vite::asset($icons[1]['url']) }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>