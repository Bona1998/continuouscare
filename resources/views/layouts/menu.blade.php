<li class="nav-item">
    <a href="{{ route('categories.index') }}"
       class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
        <p>Categories</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('services.index') }}"
       class="nav-link {{ Request::is('services*') ? 'active' : '' }}">
        <p>Services</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('abouts.index') }}"
       class="nav-link {{ Request::is('abouts*') ? 'active' : '' }}">
        <p>Abouts</p>
    </a>
</li>


