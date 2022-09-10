<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/courses.css">
    <link rel="icon" type="image/x-icon" href="/img/android-chrome-512x512.png">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    <title>دروس الدعم</title>
</head>
<body>
<form action="CourseAdd" method="POST">
    @csrf
    <section>
    <div class="ImgBox">
        <img src="/img/chalkboard-mathematics-wallpaper-preview.jpg">
    </div>
    <div class="ContentBox">
        <div class="FormBox">
            <h2>دروس الدعم</h2>
                <div class="InputBox">
                    <span>:الاسم</span>
                    <input type="text" name="name" value="{{old('name')}}">
                    @error('name')
                        <div class="error">
                            <?php echo 'نسيت ملء الاسم'; ?>
                        </div>
                    @enderror
                    <span>:اللقب</span>
                    <input type="text" name="surname" value="{{old('surname')}}">
                    @error('surname')
                        <div class="error">
                            <?php echo 'نسيت ملء اللقب'; ?>
                        </div>
                    @enderror
                </div>
                <div class="InputBox">
                    <div class="checksex">
                    <span>:ذكر</span><input type="radio" name="sex" value="ذكر">
                    <span>:أنثى</span><input type="radio" name="sex" value="أنثى">
                    </div>
                    @error('sex')
                        <div class="error">
                            <?php echo 'نسيت أن تضع جنسك'; ?>
                        </div>
                    @enderror
                </div>

                <div class="InputBox">
                   <span>:المستوى الدراسي</span>
                   <select name="scholar_year">
                        <option>أولى ثانوي</option>
                        <option>ثانية ثانوي</option>
                        <option>ثالثة ثانوي</option>
                   </select>
                </div>

                <div class="InputBox1">
                    <div><input type="checkbox" name="local" value="الفرنسية"><span>اللغة الفرنسية في المتفوق الصغير -لعرارسة-</span></div>
                    <div><input type="checkbox" name="local" value="الرياضيات"><span>الرياضيات لجميع مستويات الثانوية في البشير الإبراهيمي -لعرارسة-</span></div>
                </div>
                
                <div class="InputBox">
                    <span>:رقم الهاتف</span>
                    <input type="text" name="tel" value="{{old('tel')}}">
                    @error('Tel')
                        <div class="error">
                            <?php echo 'نسيت ملء رقم الهاتف أو هو خاطئ'; ?>
                        </div>
                    @enderror
                </div>

                <div class="InputBox">
                    <span>:رقم هاتف الولي</span>
                    <input type="text" name="DadTel" value="{{old('DadTel')}}">
                    @error('Tel')
                        <div class="error">
                            <?php echo 'نسيت ملء رقم الهاتف أو هو خاطئ'; ?>
                        </div>
                    @enderror
                </div>
                <div class="InputBox">
                    <button type="submit">سجل الآن</button>
                </div>
            </div>
        </div>
    </form>
</section>
</form>
</body>
</html>