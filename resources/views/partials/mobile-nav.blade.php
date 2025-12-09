<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler">
            <i class="fa fa-times-circle"></i>
        </span>
        <div class="logo-box">
            <a href="{{ route('home') }}" aria-label="logo image">
                <img src="{{ asset('assets/images/resources/mobile-nav-logo.png') }}" alt="" />
            </a>
        </div>
        <div class="mobile-nav-search-box">
            <form class="search-form" action="#">
                <input placeholder="Keyword" type="text" />
                <button type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
        <div class="mobile-nav__container"></div>
        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:info@example.com">info@example.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:123456789">444 000 777 66</a>
            </li>
        </ul>
        <div class="mobile-nav__social">
            <a href="#" class="fab fa-facebook-square"></a>
            <a href="#" class="fab fa-instagram"></a>
        </div>
    </div>
</div>