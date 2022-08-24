<h1>Members' list: </h1>
<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Age</td>
        <td>Password</td>
        <td>Operation</td>
    </tr>
    @foreach($members as $member)
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['age']}}</td>
        <td>{{$member['password']}}</td>
        <td>
            <a href="{{'delete/'.$member['id']}}">delete</a>
            <a href="{{'edit/'.$member['id']}}">update</a>
        </td>
    </tr>
    @endforeach
</table>

<span>
    {{$members->links()}}
</span>

<style>
    .w-5{
        display: none;
    }
</style>