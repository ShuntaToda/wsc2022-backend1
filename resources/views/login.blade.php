@include('header')

<div class="container">
  <form action="{{route('login')}}" method="POST">
    @csrf
    <div class="">
      <label for="">name</label>
      <input class="" type="text" name="name">
    </div>
    <div class="">
      <label for="">password</label>
      <input class="" type="password" name="password">
    </div>
    @if(session("message"))
    <div class="text-danger">{{ session("message") }}</div>
    @endif
    <button type="submit" class="">submit</button>
  </form>
</div>
admin
admin

@include('footer')