<header>
    <div class="container">
        <div class="logo-container">
            <img src="{{ URL::asset('/img/dc-logo.png') }}" alt="logo">

        </div>
        <ul>
            @foreach ($links as $link)
            @if ($link['status'] == true)
            <li>
                <a class="active" href="#">{{$link["text"]}}</a>
            </li>
            @else
            <li>
                <a href="#">{{$link["text"]}}</a>
            </li>
            @endif
            @endforeach
        </ul>
        <div class="nav_search">
            <div class="col-auto">
                <div class="input-group border-bottom border-primary border-3 pb-2">
                    <input type="text" class="form-control border-0" id="autoSizingInputGroup" placeholder="Search">
                    <div class="input-group-text border-0 bg-white"><i class="fa-solid fa-magnifying-glass"></i></div>
                </div>
                <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
            </div>
        </div>
    </div>
</header>