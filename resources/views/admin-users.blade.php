@include("header")

<div>
  <table class="table">
    <thead>
      <tr>
        <td>id</td>
        <td>name</td>
        <td>created_at</td>
        <td>last_login_time</td>
      </tr>
    </thead>
    @foreach ($admins as $admin)
    <tr>
      <td>{{ $admin->id }}</td>
      <td>{{ $admin->name }}</td>
      <td>{{ $admin->created_at }}</td>
      <td>{{ $admin->last_login_time }}</td>
    </tr>
    @endforeach
  </table>
</div>

@include("footer")