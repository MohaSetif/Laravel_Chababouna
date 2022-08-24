<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/LoginStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    <title>صفحة التسجيل</title>
</head>
<body>
<form action="التسجيل" method="POST">
    @csrf
    <section>
    <div class="ImgBox">
        <img src="/img/10051f000001gsrxu99A6.jpg">
    </div>
    <div class="ContentBox">
        <div class="FormBox">
            <h2>صفحة التسجيل</h2>
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
                    <span>:اسم الولي</span>
                    <input type="text" name="Dadname" value="{{old('Dadname')}}">
                    @error('Dadname')
                        <div class="error">
                            <?php echo 'نسيت ملء اسم الولي'; ?>
                        </div>
                    @enderror
                    <span>:المهنة</span>
                    <input type="text" name="DadJob" value="{{old('DadJob')}}">
                    @error('DadJob')
                        <div class="error">
                            <?php echo 'نسيت ملء مهنة الولي'; ?>
                        </div>
                    @enderror
                </div>
                <div class="InputBox">
                    <span>:تاريخ الميلاد</span>
                    <select name="day">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                    </select>
                    <select name="month">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                    <div class="YearBox">
                        <input type="number" name="year" value="{{old('year')}}">
                        @error('year')
                        <div class="error">
                            <?php echo 'نسيت ملء سنة الميلاد'; ?>
                        </div>
                    @enderror
                    </div>
                </div>
                <div class="InputBox">
                    <span>:مكان الميلاد</span>
                    <input type="text" name="place" value="{{old('place')}}">
                    @error('place')
                        <div class="error">
                            <?php echo 'نسيت ملء مكان الميلاد'; ?>
                        </div>
                    @enderror
                    <span>:العنوان</span>
                    <input type="text" name="residence" value="{{old('residence')}}">
                    @error('residence')
                        <div class="error">
                            <?php echo 'نسيت ملء مكان الإقامة'; ?>
                        </div>
                    @enderror
                </div>
                <div class="InputBox">
                   <span>:المستوى الدراسي</span>
                   <select name="scholar_year">
                        <option>التحضيري</option>
                        <option>الابتدائي</option>
                        <option>المتوسطي</option>
                        <option>الثانوي</option>
                        <option>الجامعي</option>
                        <option>خيار آخر</option>
                   </select>
                </div>
                <div class="InputBox">
                    <span>:رقم الهاتف</span>
                    <input type="text" name="Tel" value="{{old('Tel')}}">
                    @error('Tel')
                        <div class="error">
                            <?php echo 'نسيت ملء رقم الهاتف أو هو خاطئ'; ?>
                        </div>
                    @enderror
                </div>
                <div class="InputBox">
                    <button type="submit">سجل الآن</button>
                    <a href="صفحة-الدخول">مسجل من قبل؟</a>
                </div>
            </div>
        </div>
    </form>
</section>
</form>
</body>
</html>