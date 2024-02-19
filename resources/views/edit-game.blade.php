@include('header')

<div>
  <form action="{{ route('admin.edit-game', $game->title) }}" method="POST">
    @csrf
    <table>
      <tr>
        <td>id</td>
        <td>{{ $game->id }}</td>
      </tr>
      <tr>
        <td>title</td>
        <td>{{ $game->title }}</td>
      </tr>
      <tr>
        <td>description</td>
        <td>{{ $game->description }}</td>
      </tr>
      <tr>
        <td>thumbnail</td>
        <td>{{ $game->thumbnail }}</td>
      </tr>
      <tr>
        <td>created_at</td>
        <td>{{ $game->created_at }}</td>
      </tr>
      <tr>
        <td>auther</td>
        <td>{{ $game->getAuther($game->id)->name }}</td>
      </tr>
      <tr>
        <td>deleted</td>
        <td><input type="checkbox" name="deleted" {{$game->deleted ? "checked" : ''}}></td>
      </tr>
    </table>
    <button type="submit" class="btn btn-primary">submit</button>
  </form>
</div>

@include('footer')