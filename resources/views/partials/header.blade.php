@php
    $menu = config('main_menu')
@endphp



<header class="header-menu">
    <div class="dc-container">
        <img src="/img/dc-logo.png" alt="">
        <div>
            <ul>
                @foreach ($menu as $item)
                <li>
                    <a href="">{{ $item['text'] }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

</header>

