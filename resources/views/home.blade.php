@include("header")

<div>
  <div>
    <a href="{{route('admin.admin-users')}}">List admin users</a>
  </div>
  <div>
    <a href="{{route('admin.users')}}">Manage platform users</a>
  </div>
  <div>
    <a href="{{route('admin.games')}}">Manage games</a>
  </div>

</div>
@include("footer")