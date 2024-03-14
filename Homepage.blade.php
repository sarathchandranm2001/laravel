<x-layout>
    <div class="container">
        <form action="register" method="post">
<div class="container">
    @csrf
<form>
<div class="mb-3">
    @error('name')
    {{$message}}
    @enderror
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input value="{{old('name')}}" type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  @error('name')
    {{$message}}
    @enderror
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input  value="{{old('name')}}" type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
  @error('name')
    {{$message}}
    @enderror
    <albel for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
  @error('name')
    {{$message}}
    @enderror
    <albel for="exampleInputPassword1" class="form-label">Retype Password</label>
    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</x-layout>