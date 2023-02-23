<main class="main-comics">
    @include('partials.subPartials.jumbotron')
    <section class="main-content">
        <div class="mycontainer">
            <div class="myrow">
                <div class="mycol">
                    <div class="mycard">
                        <div class="current-series">CURRENT SERIES</div>
                    </div>
                </div>
            </div>
            <div class="myrow px-4">
                @foreach ($comics as $item)   
                    <div class="mycol-sm">
                        <a class="underline-none" href="{{ route('single_comic', ['id' => $item['slug']]) }}">
                            @include('partials.subPartials.cardMainComics')
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="button">
                <button>LOAD MORE</button>
            </div>
        </div>
    </section>
    <section class="icon-services">
        <div class="mycontainer">
            <div class="myrow">
                @foreach ($icons as $item)
                    <div class="mycol-sm">
                        <div class="mycard">
                            <img src="{{ Vite::asset($item['url']) }}" alt="{{ $item['title'] }}">
                            <div>
                                <span>{{ $item['title'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>