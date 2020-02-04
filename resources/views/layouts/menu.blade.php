@if(Auth::user()->type == \App\User::ADMIN)
<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{!! route('categories.index') !!}"><i class="fa fa-edit"></i><span>Categories</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('parlors*') ? 'active' : '' }}">
    <a href="{!! route('parlors.index') !!}"><i class="fa fa-edit"></i><span>Parlors</span></a>
</li>

<li class="{{ Request::is('packages*') ? 'active' : '' }}">
    <a href="{!! route('packages.index') !!}"><i class="fa fa-edit"></i><span>Packages</span></a>
</li>

<li class="{{ Request::is('galleries*') ? 'active' : '' }}">
    <a href="{!! route('galleries.index') !!}"><i class="fa fa-edit"></i><span>Galleries</span></a>
</li>
@endif

<li class="{{ Request::is('bookings*') ? 'active' : '' }}">
    <a href="{!! route('bookings.index') !!}"><i class="fa fa-edit"></i><span>Bookings</span></a>
</li>
