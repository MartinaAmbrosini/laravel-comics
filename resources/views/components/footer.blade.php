<footer>
    <section class="features">
        <div class="container">
            @foreach ($features as $feature)
            <div class="feat">
                <div class="img-container">
                    <img src="{{ URL::asset($feature['image']) }}">
                </div>
                <div class="feat-text">
                    {{ $feature['text'] }}
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <section class="site-info">
        <div class="container">
            <div class="col">
                <h2>DC COMICS</h2>
                <ul>
                    <li><a href="#">Characters</a></li>
                    <li><a href="#">Comics</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">TV</a></li>
                    <li><a href="#">Games</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">News</a></li>
                </ul>

                <h2>SHOP</h2>
                <ul>
                    <li><a href="#">Shop DC</a></li>
                    <li><a href="#">Shop DC Collectibles</a></li>
                </ul>
            </div>

            <div class="col">
                <h2>DC</h2>
                <ul>
                    <li><a href="#">Terms Of Use</a></li>
                    <li><a href="#">Privacy policy (New)</a></li>
                    <li><a href="#">Ad Choices</a></li>
                    <li><a href="#">Advertising</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Subscriptors</a></li>
                    <li><a href="#">Talent Workshops</a></li>
                    <li><a href="#">CPSC Certificates</a></li>
                    <li><a href="#">Rating</a></li>
                    <li><a href="#">Shop Help</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

            <div class="col">
                <h2>SITES</h2>
                <ul>
                    <li><a href="#">DC</a></li>
                    <li><a href="#">MAD Magazine</a></li>
                    <li><a href="#">DC Kids</a></li>
                    <li><a href="#">DC Universe</a></li>
                    <li><a href="#">DC Power Visa</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="info-social">
        <div class="container">
            <a class="button" href="#">SIGN-UP NOW!</a>
            <ul>
                <li>
                    <h2>FOLLOW US</h2>
                </li>
                <li><a href="#">
                        <img src="{{ URL::asset('/img/footer-facebook.png') }}" alt="facebook">
                    </a></li>
                <li><a href="#">
                        <img src="{{ URL::asset('/img/footer-twitter.png') }}" alt="twitter">
                    </a></li>
                <li><a href="#">
                        <img src="{{ URL::asset('/img/footer-youtube.png') }}" alt="youtube">
                    </a></li>
                <li><a href="#">
                        <img src="{{ URL::asset('/img/footer-pinterest.png') }}" alt="pinterest">
                    </a></li>
                <li><a href="#">
                        <img src="{{ URL::asset('/img/footer-periscope.png') }}" alt="periscope">
                    </a></li>
            </ul>
        </div>
    </section>
</footer>