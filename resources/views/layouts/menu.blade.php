
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>Users</span></a>
</li>
<li class="nav-item">
    <a href="{{ route('shorturls.index') }}"
       class="nav-link {{ Request::is('shorturls*') ? 'active' : '' }}">
        <p>Shorturls</p>
    </a>
</li>


