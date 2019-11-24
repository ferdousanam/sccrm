<li class="nav-item start" id="dev-forms-mm">
  <a href="javascript:;" class="nav-link nav-toggle">
    <i class="icon-home"></i>
    <span class="title">Developer Forms</span>
    <span class="arrow"></span>
  </a>

  <ul class="sub-menu">
    <li class="nav-item start" id="project-details-sm">
      <a href="{{route('project-details.index')}}" class="nav-link ">
        <i class="icon-bar-chart"></i>
        <span class="title">Project Details</span>
      </a>
    </li>
    <li class="nav-item start" id="main-menus-sm">
      <a href="{{ route('main-menu.index') }}" class="nav-link ">
        <i class="icon-bar-chart"></i>
        <span class="title">Main Menu Link</span>
      </a>
    </li>
    <li class="nav-item start" id="sub-menus-sm">
      <a href="{{ route('sub-menu.index') }}" class="nav-link ">
        <i class="icon-bar-chart"></i>
        <span class="title">Sub Menu Link</span>
      </a>
    </li>
    <li class="nav-item start" id="priority-sm">
      <a href="{{ route('user-type.create') }}" class="nav-link ">
        <i class="icon-bar-chart"></i>
        <span class="title">Priority</span>
      </a>
    </li>
  </ul>
</li>
