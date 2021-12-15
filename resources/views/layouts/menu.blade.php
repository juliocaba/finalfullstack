<li class="nav-item">
    <a href="{{ route('admin.socios.index') }}"
       class="nav-link {{ Request::is('admin/socios*') ? 'active' : '' }}"><i class="fas fa-users"></i>
        <p>Socios</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.comentarios.index') }}"
       class="nav-link {{ Request::is('admin/comentarios*') ? 'active' : '' }}"><i class="fas fa-clipboard"></i>
        <p>Comentarios</p>
    </a>
</li>

{{-- <li class="nav-item">
    <a href="{{ route('admin.comentarios.index') }}"
       class="nav-link {{ Request::is('admin/comentarios*') ? 'active' : '' }}">
        <p>Comentarios</p>
    </a>
</li> --}}


