<li class="nav-item">
    <a href="{{ route('customers.index') }}"
       class="nav-link {{ Request::is('customers*') ? 'active' : '' }}">
        <p>Customers</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('pizzas.index') }}"
       class="nav-link {{ Request::is('pizzas*') ? 'active' : '' }}">
        <p>Pizzas</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('members.index') }}"
       class="nav-link {{ Request::is('members*') ? 'active' : '' }}">
        <p>Members</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('drivers.index') }}"
       class="nav-link {{ Request::is('drivers*') ? 'active' : '' }}">
        <p>Drivers</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('orders.index') }}"
       class="nav-link {{ Request::is('orders*') ? 'active' : '' }}">
        <p>Orders</p>
    </a>
</li>


