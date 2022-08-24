<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/BooksTable.css">
    <title>كتبنا</title>
</head>
<body>
<input type="text" name="SearchBar" id="SearchBar" onkeyup="return myFunction()" placeholder="ابحث...">
<div class="table">
<table id="userTable">
    <thead>
        <tr>
           <th>عدد النسخ</th>
           <th>الملاحظة</th>
           <th>عدد الأجزاء</th>
           <th>دار النشر</th>
           <th>التخريج</th>
           <th>التحقيق</th>
           <th>المؤلف</th>
           <th>العنوان</v>
           <th>التخصص</th>
           <th>تاريخ الإدخال</th>
           <th>الرقم</th>
        </tr>
    </thead>
    @foreach($books as $item)
    <tbody>
      <tr>
      <td>{{ $item->copies }}</td>
        <td>{{ $item->note }}</td>
        <td>{{ $item->parts }}</td>
        <td>{{ $item->publication }}</td>
        <td>{{ $item->documentation }}</td>
        <td>{{ $item->review }}</td>
        <td>{{ $item->writer_name }}</td>
        <td>{{ $item->title }}</td>
        <td>{{ $item->field }}</td>
        <td>{{ $item->insert_date }}</td>
        <td>{{ $item->id }}</td>
      </tr>
    </tbody>
    @endforeach
</table>
</div>

<script>
  function myFunction(){
    var input, filter, table, tr, td, cell, i, j;
  filter = document.getElementById("SearchBar").value.toLowerCase();
  table = document.getElementById("userTable");
  tr = table.getElementsByTagName("tr");
  for (i = 1; i < tr.length; i++) {
    tr[i].style.display = "none";
    const tdArray = tr[i].getElementsByTagName("td");
    for (var j = 0; j < tdArray.length; j++) {
      const cellValue = tdArray[j];
      if (cellValue && cellValue.innerText.toLowerCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
        break;
      }
    }
  }
  }
</script>


</body>
</html>