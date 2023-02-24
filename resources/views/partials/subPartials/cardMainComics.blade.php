<a class="underline-none" href="{{ route('comics.show', ['comic' => $item['id']]) }}">
    <div class="mycard">
        <div class="position-relative mb-4">
            <div class="container-img">
                <img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}">
            </div>
            <a href="{{ route('comics.edit', ['comic' => $item['id']]) }}">
                <button type="button" class="btn btn-warning edit-button"><i class="fa-solid fa-pen-to-square"></i></button>
            </a>
            <a href="#">
                <button type="button" class="btn btn-danger delete-button"><i class="fa-solid fa-trash-can"></i></button>
            </a>
        </div>
        <h6>{{ $item['title'] }}</h6>
    </div>
</a>