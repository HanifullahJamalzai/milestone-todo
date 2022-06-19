<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('home')}}">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('todos') }}">
          <i class="bi bi-menu-button-wide"></i><span>Todos</span><i class="ms-auto"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('todos.create')}}">
          <i class="bi bi-menu-button-wide"></i><span>Create Todos</span><i class="ms-auto"></i>
        </a>
      </li>
     
      
      <!-- End Components Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

    </ul>

  </aside>