@include("header")
<div>
  <table class="table">
    <thead>
      <tr>
        <td>id</td>
        <td>name</td>
        <td>created_at</td>
        <td>last_login_time</td>
        <td></td>
      </tr>
    </thead>
    @foreach ($users as $user)
    <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->created_at }}</td>
      <td>{{ $user->last_login_time }}</td>
      <td><a class="btn btn-outline-primary" href="{{route('admin.edit-admin-user', $user->name)}}">edit</a></td>
    </tr>
    @endforeach
  </table>
</div>

@include("footer")