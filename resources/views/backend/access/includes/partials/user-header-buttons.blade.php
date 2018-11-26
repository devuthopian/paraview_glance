
<div class="btn-group">
  <button type="button" class="btn btn-primary"> <a  style="color:white;" href="{{route('admin.access.user.create')}}">Add new user</a>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="{{route('admin.access.user.index')}}"><i class="fa fa-list-ul"></i> List</a></li>
    @permission('create-user')
    <li><a href="{{route('admin.access.user.create')}}"><i class="fa fa-plus"></i> Add new</a></li>
    @endauth
    @permission('view-deactive-user')
    <li><a href="{{route('admin.access.user.deactivated')}}"><i class="fa fa-square"></i> Deactivated Users</a></li>
    @endauth
    @permission('view-deleted-user')
    <li><a href="{{route('admin.access.user.deleted')}}"><i class="fa fa-trash"></i> Deleted Users</a></li>
    @endauth
  </ul>
</div>