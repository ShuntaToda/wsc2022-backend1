@include('header')
<div>
  <table class="table">
    <thead>
      <tr>
        <td>id</td>
        <td>title</td>
        <td>auther</td>
        <td>description</td>
        <td>thumbnail</td>
        <td>versions</td>
        <td>created_at</td>
        <td></td>
      </tr>
    </thead>
    @foreach ($games as $game)
    <tr>
      <td>{{ $game->id}}</td>
      <td>{{ $game->title}}</td>
      <td>{{ $game->getAuther($game->user_id)->name}}</td>
      <td>{{ $game->description}}</td>
      <td>{{ $game->thumbnail}}</td>
      <td>
        @foreach($game->getVersions($game->id) as $version)
        <div>{{$version->version}}</div>
        @endforeach        
      </td>
      <td>{{ $game->created_at}}</td>
      <td><a class="btn btn-outline-primary" href="{{route('admin.edit-game', $game->title)}}">edit</a></td>
    </tr>
    @endforeach
  </table>
</div>

@include('footer')