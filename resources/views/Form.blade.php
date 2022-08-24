<h1>Form</h1>
<form action="add" method="post">
    @csrf
    <input type="text" name="id" placeholder="Your id pls"> <br><br>
    <input type="text" name="name" placeholder="Your name pls"> <br><br>
    <input type="number" name="age" placeholder="Your age pls"><br><br>
    <input type="password" name="password" placeholder="Your password pls"><br><br>
    <button type="submit">Sign in</button>
</form>