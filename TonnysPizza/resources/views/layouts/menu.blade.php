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


