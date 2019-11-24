<li class="nav-item start" id="people-mm">
  <a href="javascript:;" class="nav-link nav-toggle">
    <i class="icon-home"></i>
    <span class="title">People</span>
    <span class="arrow"></span>
  </a>

  <ul class="sub-menu">
    <li class="nav-item start" id="user-sm">
      <a href="{{ route('user.index') }}" class="nav-link ">
        <i class="icon-bar-chart"></i>
        <span class="title">View Admins</span>
      </a>
    </li>
    <li class="nav-item start" id="user--create-sm">
      <a href="{{ route('user.create') }}" class="nav-link ">
        <i class="icon-bar-chart"></i>
        <span class="title">Add New Admin</span>
      </a>
    </li>
    <li class="nav-item start" id="user-types-sm">
      <a href="{{ route('user-type.index') }}" class="nav-link ">
        <i class="icon-bar-chart"></i>
        <span class="title">User Types</span>
      </a>
    </li>
    <li class="nav-item start" id="user-priority-level-sm">
      <a href="{{ route('user-priority-level.index') }}" class="nav-link ">
        <i class="icon-bar-chart"></i>
        <span class="title">User Priority Settings</span>
      </a>
    </li>
  </ul>
</li>
