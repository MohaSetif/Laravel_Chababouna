<!DOCTYPE html>
<html dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الصفحة الرئيسية | جمعية شبابنا العلمية الثقافية</title>
    <link rel="icon" type="image/x-icon" href="/img/android-chrome-512x512.png">
    <link rel="stylesheet" href="/css/StyleSlide.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

    <header>
      <div class="Logo"><img src="/img/IMG_20220701_112957-removebg-preview.png"></div>
      <div class="menu-btn"></div>
      <div class="navigation">
        <div class="navigation-items">
          @if(session('name') == NULL)
          <a href="التسجيل">سجل الآن</a>
          @else 
            <div class="dropdown">
               <button class="dropbtn">{{session('name')}}</button>
               <div class="dropdown-content">
                <a href="/logout">الخروج من الصفحة</a>
               </div>
            </div>
          @endif
        </div>
      </div>
    </header>

    <section class="home">
      <video class="video-slide" src="/vid/production ID_4755514.mp4" autoplay muted loop></video>
      <video class="video-slide" src="/vid/pexels-cottonbro-9290078.mp4" autoplay muted loop></video>
      <video class="video-slide" src="/vid/pexels-assad-tanoli-5788681.mp4" autoplay muted loop></video>
      <video class="video-slide" src="/vid/Video Inside A Library.mp4" autoplay muted loop></video>
      <video class="video-slide active" src="/vid/214180c8.mp4" autoplay muted loop></video>
      <div class="content">
        <h1>من إنجازاتنا</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="content">
        <h1>نشاطاتنـا</h1>
        <div class="cards">
         <div class="row">

         
          <div class="Sec1">
          <span>العلمية</span>
          <div class="card">
          <div class="card_img"><img src="/img/_MG_2262.jpg"></div>
            <div class="card_content">
                <h3>دائمة</h3>
                  <li>التعليم القرآني</li>
                  <li>أحكام الترتيل</li>
                  <li>القسم التحضيري</li>
                  <li>محو الأمية</li>
                  <li>المكتبة</li>
            </div>
          </div>  

          <div class="card">
          <div class="card_img"><img src="/img/_MG_2976.jpg"></div>
            <div class="card_content">
              <h3>موسمية</h3>
                <li>دورات في تحفيظ القرآن</li>
                <li>دورات في تحفيظ الأربعين النووية</li>
                <li>دورات في أحكام الترتيل</li>
                <li>تكوين الحجاج</li>
                <li>مخيمات صيفية</li>
                <li>إحياء المناسبات الدينية</li>
            </div>
          </div>
        </div>

        <div class="Sec2">
        <span>الاجتماعية</span>
        <div class="card">
          <div class="card_img"><img src="/img/184954225_2290659561067963_6053501625868536699_n.jpg"></div>
            <div class="card_content">
                <h3>دائمة</h3>
                  <li>قفة شهرية</li>
                  <li>تغسيل الموتى و تجهيزهم</li>
                  <li>الجنائز</li>
                  <li>الأفراح و الأعراس</li>
                  <li>تجهيزات و وسائل (طاولات، كراسي، صحون...)</li>
          </div>
        </div>  

        <div class="card">
          <div class="card_img"><img src="/img/received_2247674025457714.jpeg"></div>
            <div class="card_content">
              <h3>موسمية</h3>
                <li>مركز الإفطار</li>
                <li>قفة شهر رمضان</li>
                <li>كسوة العيد</li>
                <li>كبش العيد</li>
                <li>تجهيز العرائس</li>
            </div>
          </div>
        </div>


        <div class="Sec3">
        <span>الصحية</span>
          <div class="card">
          <div class="card_img"><img src="/img/280550530_2607785796022003_3738530076327582304_n.jpg"></div>
            <div class="card_content">
                <h3>دائمة</h3>
                  <li>سيارة إسعاف</li>
                  <li>توزيع الماء يوميا</li>
                  <li>تقديم وجبتي الغداء و العشاء بالمستشفى</li>
                  <li>إمداد المعدات: كراسي، أسرة، قارورات أوكسجين، مولدات أوكسجين</li>
                  <li>ورشة للرسم و الفنون التشكيلية</li>
            </div>
          </div>  

          <div class="card">
          <div class="card_img"><img src="/img/279383055_2593709427429640_5527744589639820437_n.jpg"></div>
            <div class="card_content">
              <h3>موسمية</h3>
                <li>تقديم وجبات ساخنة محمولة طيلة شهر رمضان</li>
                <li>تجهيز المستشفى</li>
            </div>
          </div>
        </div>

          </div>
        </div>           
      </div>

      <div class="content">
        <h1>مدرستـنا</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="content">
        <h1>مكــتبـتـنـا</h1>
        <p>جمعيتنا مهتمة بجمع الكتب، و كلما ساهم الناس بالتبرع بالكتب كلما كبرت مكتبتنا، و الكتب التي نمتلكها من مختلف التخصصات. يمكنكم أن تتبرعوا بأية كتب أو استلامها خلال شهر، و أن يترك المستلم رقم هاتفه. للمزيد من المعلومات حول مكتبتنا اضغطوا الزر الذي في الأسفل.</p>
        <a href="/مكتبتنا">كتــبـنــا</a>
      </div>
      <div class="content active">
        <h1>صـفحــتـنا</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="media-icons">
        <a href="https://www.facebook.com/chababouna.setif" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/chababouna_setif_19/" target="_blank"><i class="fab fa-instagram"></i></a>
      </div>
      <div class="user-icons">
        <a href="https://www.google.com/maps/place/%D9%85%D9%82%D8%B1+%D8%AC%D9%85%D8%B9%D9%8A%D8%A9+%D8%B4%D8%A8%D8%A7%D8%A8%D9%86%D8%A7+%D8%B3%D8%B7%D9%8A%D9%81%E2%80%AD/@36.202689,5.4121435,17z/data=!3m1!4b1!4m5!3m4!1s0x12f315958517f2e7:0x9a592b6588f73c9b!8m2!3d36.2026847!4d5.4143322" target="_blank"><i class='fa fa-map-marker'></i></a>
        <a href="tel:+213661667501" aria-label="Call" data-hover="0661 66 75 01" class="hoveritem"><i class="fa fa-phone"></i></a>
      </div>


      <div class="slider-navigation">
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn active"></div>
      </div>

    </section>
    

    <script type="text/javascript">
    //Javacript for responsive navigation menu
    const menuBtn = document.querySelector(".menu-btn");
    const navigation = document.querySelector(".navigation");

    menuBtn.addEventListener("click", () => {
      menuBtn.classList.toggle("active");
      navigation.classList.toggle("active");
    });

    //Javacript for video slider navigation
    const btns = document.querySelectorAll(".nav-btn");
    const slides = document.querySelectorAll(".video-slide");
    const contents = document.querySelectorAll(".content");

    var sliderNav = function(manual){
      btns.forEach((btn) => {
        btn.classList.remove("active");
      });

      slides.forEach((slide) => {
        slide.classList.remove("active");
      });

      contents.forEach((content) => {
        content.classList.remove("active");
      });

      btns[manual].classList.add("active");
      slides[manual].classList.add("active");
      contents[manual].classList.add("active");
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        sliderNav(i);
      });
    });
    </script>

  </body>
</html>
