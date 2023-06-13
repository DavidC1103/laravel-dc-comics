@php
    $menu = config('menu_footer');
    $menuCta = config('menu_cta');
@endphp


<footer>
    <div class="footer-middle">

        <div class="dc-container">
          <div class="footer-middle-menu">
              @foreach ($menu as $key => $menu_bot )
              <div class="dc-me">

                        <h4>{{$key}}</h4>
                        <ul class="p-0">
                            @foreach ($menu_bot as $item )
                                <li>
                                    <a href="">{{ $item['text'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                </div>
            @endforeach
        </div>
         <img src="/img/dc-logo-bg.png" alt="">
      </div>
    </div>
    <div class="footer-bottom">
      <div class="dc-container">
          <button>SIGN-UP NOW!</button>
          <div class="follow-us-flex">
              <h4>FOLLOW US</h4>
              <img src="/img/footer-facebook.png" alt="">
              <img src="/img/footer-youtube.png" alt="">
              <img src="/img/footer-twitter.png" alt="">
              <img src="/img/footer-pinterest.png" alt="">
              <img src="/img/footer-periscope.png" alt="">
          </div>
      </div>





</footer>
