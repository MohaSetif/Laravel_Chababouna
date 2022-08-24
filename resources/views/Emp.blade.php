<h1>Add Emp</h1>
<form action="add" method="Post">
    @csrf
    <input type="text" name="nom" placeholder="Nom"><br><br>
    <input type="text" name="prenom" placeholder="Prenom"><br><br>
    <input type="text" name="adr" placeholder="Adr"><br><br>
    <input type="text" name="email" placeholder="Email"><br><br>
    <button type="submit">Login</button>
</form>