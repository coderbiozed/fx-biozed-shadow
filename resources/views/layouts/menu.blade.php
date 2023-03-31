<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('blogs.index') }}"
       class="nav-link {{ Request::is('blogs*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-blog"></i>
        <p>Blogs</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('brokerReviews.index') }}"
       class="nav-link {{ Request::is('brokerReviews*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-list-alt"></i>
        <p>Broker </p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('compares.index') }}"
       class="nav-link {{ Request::is('compares*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-window-restore"></i>
        <p>Compare details</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('faqs.index') }}"
       class="nav-link {{ Request::is('faqs*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-question-circle"></i>
        <p>Faq</p>
    </a>
</li>


 <li class="nav-item">
    <a href="{{ route('banners.index') }}"
       class="nav-link {{ Request::is('banners*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-image"></i>
        <p>Banners</p>
    </a>
</li> 

<li class="nav-item">
    <a href="{{ route('userReviews.index') }}"
       class="nav-link {{ Request::is('userReviews*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-star"></i>
        <p>User Reviews</p>
    </a>
</li> 


<li class="nav-item">
    <a href="{{ route('subscribers.index') }}"
       class="nav-link {{ Request::is('subscribers*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-user"></i>
        <p>Subscribers</p>
    </a>
</li>

{{-- <li class="nav-item">
    <a href="{{ URL::to('seo/dashboard') }}"
       class="nav-link {{ Request::is('seo/dashboard') ? 'active' : '' }}">
       <i class="nav-icon fas fa-ad"></i>
        <p>Seo Dashboard</p>
    </a>
</li> --}}

<li class="nav-item">
    <a href="{{ route('seos.index') }}"
       class="nav-link {{ Request::is('seos*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-file-code"></i>
        <p>Seo</p>
    </a>
</li>

{{-- <li class="nav-item">
    <a href="{{ route('analytics.index') }}"
       class="nav-link {{ Request::is('analytics*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-map"></i>
        <p>Analytics</p>
    </a>
</li> --}}

{{-- <li class="nav-item">
    <a href="{{ route('users') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-user-plus"></i>
        <p>Register</p>
    </a>
</li> --}}


<li class="nav-item">
    <a href="{{ route('traders.index') }}"
       class="nav-link {{ Request::is('traders*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-check-circle"></i>
        <p>Traders</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('bonuses.index') }}"
       class="nav-link {{ Request::is('bonuses*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-gift"></i>
        <p>Bonuses</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('contests.index') }}"
       class="nav-link {{ Request::is('contests*') ? 'active' : '' }}">
       <i class="nav-icon fas fa-gift"></i>
        <p>Contests</p>
    </a>
</li>


