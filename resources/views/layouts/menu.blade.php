<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('docs*') ? 'active' : '' }}">
    <a href="{{ route('docs.index') }}"><i class="fa fa-edit"></i><span>Docs</span></a>
</li>

<li class="{{ Request::is('testimonials*') ? 'active' : '' }}">
    <a href="{{ route('testimonials.index') }}"><i class="fa fa-edit"></i><span>Testimonials</span></a>
</li>

<li class="{{ Request::is('whitePapers*') ? 'active' : '' }}">
    <a href="{{ route('whitePapers.index') }}"><i class="fa fa-edit"></i><span>White Papers</span></a>
</li>

<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{{ route('products.index') }}"><i class="fa fa-edit"></i><span>Products</span></a>
</li>

