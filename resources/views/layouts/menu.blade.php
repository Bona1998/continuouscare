





<li class="nav-item">
    <a href="{{ route('brifDescriptions.index') }}"
       class="nav-link {{ Request::is('brifDescriptions*') ? 'active' : '' }}">
        <p>Brif Descriptions</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('services.index') }}"
       class="nav-link {{ Request::is('services*') ? 'active' : '' }}">
        <p>Services</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('reviwes.index') }}"
       class="nav-link {{ Request::is('reviwes*') ? 'active' : '' }}">
        <p>Reviwes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('goals.index') }}"
       class="nav-link {{ Request::is('goals*') ? 'active' : '' }}">
        <p>Goals</p>
    </a>
</li>


