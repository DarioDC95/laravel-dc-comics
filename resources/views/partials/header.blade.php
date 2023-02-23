<header>
    <div class="mycontainer">
        <div class="myrow">
            <div class="mycol-md">
                <img src="{{Vite::asset('resources/img/images/dc-logo.png')}}" alt="Logo Favicon">
            </div>
            <div class="mycol-lg">
                <nav>
                    <ul>
                        @foreach ($nav as $item)
                            <li class="{{ Route::currentRouteName() == $item['url'] ? 'active-select' : ''}}">
                                <a class="underline-none" href="{{ route::has($item['url']) ? route($item['url']) : '' }}">{{ $item['label'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>