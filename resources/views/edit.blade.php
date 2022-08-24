<h1>Update now!</h1>
<form action="/edit" method="POST">
    @csrf
    <input type="text" name="id" value="{{$data['id']}}"><br><br>
    <input type="text" name="name" value="{{$data['name']}}"><br><br>
    <input type="text" name="age" value="{{$data['age']}}"><br><br>
    <input type="text" name="password" value="{{$data['password']}}"><br><br>
    <button type="submit">update</button>
</form>