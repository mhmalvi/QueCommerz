<div class="top-bar top-bar-v1">
    <div class="col-full">
        <ul id="menu-top-bar-left" class="nav justify-content-center">
            <li class="menu-item animate-dropdown">
                <a title="TechMarket eCommerce - Always free delivery" href="{{route('track')}}">Track Your Order</a>
            </li>
            <li class="menu-item animate-dropdown">
                <a title="Quality Guarantee of products" href="">Quality Guarantee of products</a>
            </li>
            <li class="menu-item animate-dropdown">
                <a title="Fast returnings program" href="">Fast returnings program</a>
            </li>
            <li class="menu-item animate-dropdown">
                @if(auth()->user())
                    <a title="Your Profile" href="{{ route('dashboard') }}">
                        <u>{{ auth()->user()->info->full_name }}</u>
                    </a>
                @else
                    <a title="Login / Register" href="{{ route('login') }}">Login / Register</a>
                @endif
            </li>
            @if(auth()->user())
            <li class="menu-item animate-dropdown">
                <a href="/logout" title="Logout">Logout</a>
            </li>
            @endif
        </ul>
        <!-- .nav -->
    </div>
    <!-- .col-full -->
</div>