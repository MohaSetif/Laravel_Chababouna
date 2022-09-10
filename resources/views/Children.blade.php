<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/ChildrenStyle.css">
    <link rel="icon" type="image/x-icon" href="/img/android-chrome-512x512.png">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    <title>المستوى التمهيدي و التحضيري</title>
</head>
<body>
<form action="childlog" method="POST" enctype="multipart/form-data">
<div class="table">
   @csrf
   <table id="userTable">
    <thead>
        <tr>
           <th>النشاط</th>
           <th>المقر</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <span>-التحضيري -2سـا</span>
                <input type="checkbox" value="تحضيري" name="inscripted_at">
                <br><br>
                <span>-التمهيدي -2سـا</span>
                <input type="checkbox" value="تمهيدي" name="inscripted_at">
            </td>
            <td>
                <span>-البشير الإبراهيمي -لعرارسة</span>
                <input type="checkbox" name="local" value="البشير-الإبراهيمي">
            </td>
        </tr>

        <tr>
            <td>
                <span>-التحضيري -نصف يوم</span>
                <input type="checkbox" value="تحضيري" name="inscripted_at">
                <br><br>
                <span>-التمهيدي -نصف يوم</span>
                <input type="checkbox" value="تمهيدي" name="inscripted_at">
            </td>
            <td>
                <span>-المتفوق الصغير -لعرارسة</span>
                <input type="checkbox" name="local" value="المتفوق-الصغير">
            </td>
        </tr>

        <tr>
            <td>
                <span>-التحضيري -2سـا</span>
                <input type="checkbox" value="تحضيري" name="inscripted_at">
                <br><br>
                <span>-التمهيدي -2سـا</span>
                <input type="checkbox" value="تمهيدي" name="inscripted_at">
            </td>
            <td>
                <span>-عائشة أم المؤمنين -ديرو</span>
                <input type="checkbox" name="local" value="عائشة-أم-المؤمنين">
            </td>
        </tr>

        <tr>
            <td>
                <span>-التحضيري -نصف يوم</span>
                <input type="checkbox" value="تحضيري" name="inscripted_at">
                <br><br>
                <span>-التمهيدي -2سـا</span>
                <input type="checkbox" value="تمهيدي" name="inscripted_at">
            </td>
            <td>
                <span>-العربي التبسي -السفاهة</span>
                <input type="checkbox" name="local" value="العربي-التبسي">
            </td>
        </tr>
    </tbody>
   </table>
</div>
<a href="سجلوا-أولادكم">سجل الآن</a>
</form>
</body>
</html>