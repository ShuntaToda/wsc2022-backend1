@include('header')

<div>
  <form action="{{ route('admin.edit-admin-user', $user->name) }}" method="POST">
    @csrf
    <table>
      <tr>
        <td>id</td>
        <td>{{ $user->id }}</td>
      </tr>
      <tr>
        <td>name</td>
        <td>{{ $user->name }}</td>
      </tr>
      <tr>
        <td>created_at</td>
        <td>{{ $user->created_at }}</td>
      </tr>
      <tr>
        <td>last_login_time</td>
        <td>{{ $user->last_login_time }}</td>
      </tr>
      <tr>
        <td>block</td>
        <td><input type="checkbox" name="block" {{$user->block ? "checked" : ''}}></td>
      </tr>
    </table>
    <button type="submit" class="btn btn-primary">submit</button>
  </form>
</div>

@include('footer')