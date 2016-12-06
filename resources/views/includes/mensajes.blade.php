@if(count($errors) > 0)
  <ul>
    @foreach($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </ul>
@endif
@if(Session::has('message'))
  {{Session::get('message')}}
@endif
