<body id="page-top">
    <?php
    include './public/includes/client/header.php';
  ?>


    <!--/ Intro Skew Star /-->
    <div id="home" class="intro route bg-image" style="background-image: url(./public/accests/client/img/fpt-7.jpg)">
        <div class="overlay-itro"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <p class="display-6 color-d">Xin chào</p>
                    <h1 class="intro-title mb-4">Tôi là Huỳnh An Khương</h1>
                    <p class="intro-subtitle"><span class="text-slider-items">Sinh viên FPT Polytechnic,Web
                            Developer,Web
                            Designer,Back-end Developer</span><strong class="text-slider"></strong></p>
                    <p class="pt-3"><a style="background-color: #F3285F; color: #fff" class="btn btn js-scroll px-4"
                            href="#about" role="button">Tìm hiểu thêm</a></p>
                </div>
            </div>
        </div>
    </div>
    <!--/ Intro Skew End /-->

    <section id="about" class="about-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="about-img">
                                            <img src="./public/accests/client/img/avatar-3.png"
                                                class="img-fluid rounded b-shadow-a" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-7">
                                        <div class="about-info">
                                            <p><span class="title-s">Tên: </span> <span>Huỳnh An Khương</span></p>
                                            <p><span class="title-s">Chức vụ: </span> <span>Sinh viên - lập trình</span>
                                            </p>
                                            <p><span class="title-s">Email: </span>
                                                <span>khuonghapc06329@fpt.edu.vn</span>
                                            </p>
                                            <p><span class="title-s">Số điện thoại: </span> <span>(+84)
                                                    813-767-025</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-mf">
                                    <p class="title-s">Kĩ năng</p>

                                    <span><img style="width: 5%" src="./public/accests/client/img/html-icon.png" alt="">
                                        HTML</span> <span class="pull-right percentage">80%</span>
                                    <div class="progress">
                                        <div class="progress-bar html" role="progressbar" aria-valuenow="80"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <span><img style="width: 5%" src="./public/accests/client/img/css-icon.png" alt="">
                                        CSS3</span> <span class="pull-right percentage">60%</span>
                                    <div class="progress">
                                        <div class="progress-bar css" role="progressbar" aria-valuenow="60"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <span><img style="width: 5%" src="./public/accests/client/img/php-icon.png" alt="">
                                        PHP</span> <span class="pull-right percentage">70%</span>
                                    <div class="progress">
                                        <div class="progress-bar php" role="progressbar" aria-valuenow="70"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <span><img style="width: 5%" src="./public/accests/client/img/js-icon.png" alt="">
                                        JAVASCRIPT</span> <span class="pull-right percentage">30%</span>
                                    <div class="progress">
                                        <div class="progress-bar js" role="progressbar" aria-valuenow="30"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <span><img style="width: 5%" src="./public/accests/client/img/wordpress-icon.png"
                                            alt="">
                                        WORDPRESS</span> <span class="pull-right percentage">75%</span>
                                    <div class="progress">
                                        <div class="progress-bar js" role="progressbar" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <script>
                                // Function to animate progress bars
                                function animateProgressBar() {
                                    const progressBarElements = document.querySelectorAll('.progress-bar');

                                    progressBarElements.forEach(progressBar => {
                                        const targetWidth = parseInt(progressBar.getAttribute('aria-valuenow'));
                                        const currentWidth = parseInt(progressBar.style.width) || 0;

                                        if (currentWidth < targetWidth) {
                                            progressBar.style.width = (currentWidth + 1) + '%';
                                        }
                                    });
                                }

                                // Call the animation function every 50 milliseconds
                                setInterval(animateProgressBar, 50);
                                </script>
                            </div>
                            <div class="col-md-6">
                                <div class="about-me pt-4 pt-md-0">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            Giới thiệu về bản thân
                                        </h5>
                                    </div>
                                    <p class="lead">
                                        Xin chào, tôi là Huỳnh An Khương hiện tại tôi 20 tuổi, tôi đang học và làm việc
                                        tại trường Cao đẳng FPT Polytechnic Cần Thơ, và đang học chuyên ngành Lập trình
                                        Web
                                        - chuyên ngành hẹp Back-end, trong lĩnh vực web tôi là một người thích sự mới mẻ
                                        và sáng tạo, ngoài những hướng phân tích đi theo cấu trúc trên lớp, tôi còn tìm
                                        hiểu về cách triển khai
                                        cách xây dựng một cấu trúc cho riêng mình, ngoài ra tôi luôn chủ động cho các
                                        trường hợp khó khăn như khó hiểu các kiến thức khác.
                                    </p>
                                    <p class="lead">
                                        Sau quá trình học đã trải qua 4 kì học tương đương với 1 năm rưỡi tôi đã gần như
                                        nắm bắt được các kiến thức cơ bản nhất của một chặn đường
                                        lập trình
                                    </p>
                                    <p class="lead">
                                        Hiện tại tôi mong muốn là tôi sẽ học tốt được các môn trong các kì học còn lại
                                        để trở thành một lập trình viên
                                        và thực hiện được đam mê của tôi.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--/ Section Services Star /-->
    <section id="service" class="services-mf route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Công việc
                        </h3>
                        <p class="subtitle-a">
                            Dưới đây là tất cả dịch vụ của tôi
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="ion-monitor"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Thiết kế trang web</h2>
                            <p class="s-description text-center">
                                Thiết kế trang web sử dụng những kiến thức đã học và với sự sáng tạo độc đáo tôi sẽ
                                thiết kế cho bạn một trang web.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="ion-code-working"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Phát triển web</h2>
                            <p class="s-description text-center">
                                Tôi luôn sẵn sàng giúp bạn phát triển một trang web, để có thể phát triển một
                                cách tốt nhất và tối ưu hóa được trang web
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="ion-camera"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Thiết kế đáp ứng</h2>
                            <p class="s-description text-center">
                                Dựa vào nhu cầu của bạn tôi có thể thực hiện một cách hoàn thiện về cách thiết kế để cho
                                bạn một sản phẩm tốt.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Section Services End /-->

    <div class="section-counter paralax-mf bg-image"
        style="background-image: url(./public/accests/client/img/fpt-3.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
                        </div>
                        <div class="counter-num">
                            <p class="counter">100</p>
                            <span class="counter-text">CÔNG VIỆC HOÀN THÀNH</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
                        </div>
                        <div class="counter-num">
                            <p class="counter">1</p>
                            <span class="counter-text">NĂM KINH NGHIỆM</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="ion-ios-people"></i></span>
                        </div>
                        <div class="counter-num">
                            <p class="counter">550</p>
                            <span class="counter-text">TỔNG KHÁCH HÀNG</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
                        </div>
                        <div class="counter-num">
                            <p class="counter">4</p>
                            <span class="counter-text">GIẢI THƯỞNG</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/ Section Testimonials Star /-->
    <div class="testimonials paralax-mf bg-image" style="background-image: url(./public/accests/client/img/fpt-5.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 style="color: white;" class="title-a">
                            NGÔN NGỮ LẬP TRÌNH ĐÃ SỬ DỤNG
                        </h3>
                        <p class="descriptions">
                            Tất cả các ngôn ngữ lập trình đã học và sử dụng của tôi
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="testimonial-mf" class="owl-carousel owl-theme">
                        <div class="testimonial-box">
                            <div class="author-test">
                                <img src="./public/accests/client/img/html.png" alt="" class="b-shadow-a">
                                <span class="author">Ngôn ngữ lập trình HTML5</span>
                            </div>
                            <div class="content-test">
                                <p class="description lead">
                                    Mục đích: Định dạng và xây dựng cấu trúc nội dung của trang web.<br>
                                    Đặc điểm: Ngôn ngữ đánh dấu sử dụng các thẻ để định rõ các phần khác nhau trên trang
                                    web.
                                </p>
                                <span class="comit"><i class="fa fa-quote-right"></i></span>
                            </div>
                        </div>
                        <div class="testimonial-box">
                            <div class="author-test">
                                <img src="./public/accests/client/img/css.png" alt="" class="b-shadow-a">
                                <span class="author">Ngôn ngữ lập trình CSS3</span>
                            </div>
                            <div class="content-test">
                                <p class="description lead">
                                    Mục đích: Định dạng và trang trí giao diện của trang web, làm cho nó hấp dẫn
                                    hơn.<br>
                                    Đặc điểm: Ngôn ngữ kiểu tự động và có cấu trúc đồng bộ.
                                </p>
                                <span class="comit"><i class="fa fa-quote-right"></i></span>
                            </div>
                        </div>
                        <div class="testimonial-box">
                            <div class="author-test">
                                <img src="./public/accests/client/img/js.png" alt="" class="b-shadow-a">
                                <span class="author">Ngôn ngữ lập trình JAVASCRIPT</span>
                            </div>
                            <div class="content-test">
                                <p class="description lead">
                                    Mục đích: Dùng để xây dựng các trang web tương tác và ứng dụng web.<br>
                                    Đặc điểm: Ngôn ngữ kịch bản, thường chạy trên trình duyệt web.
                                </p>
                                <span class="comit"><i class="fa fa-quote-right"></i></span>
                            </div>
                        </div>
                        <div class="testimonial-box">
                            <div class="author-test">
                                <img src="./public/accests/client/img/php.png" alt="" class="b-shadow-a">
                                <span class="author">Ngôn ngữ lập trình PHP</span>
                            </div>
                            <div class="content-test">
                                <p class="description lead">
                                    Mục đích: Ngôn ngữ lập trình phía server, xử lý logic và tương tác với cơ sở dữ
                                    liệu.<br>
                                    Đặc điểm: Thường được tích hợp trong mã nguồn HTML.
                                </p>
                                <span class="comit"><i class="fa fa-quote-right"></i></span>
                            </div>
                        </div>
                        <div class="testimonial-box">
                            <div class="author-test">
                                <img src="./public/accests/client/img/mysql.png" alt="" class="b-shadow-a">
                                <span class="author">Hệ quản trị cơ sở dữ liệu MYSQL</span>
                            </div>
                            <div class="content-test">
                                <p class="description lead">
                                    Mục đích: Hệ quản trị cơ sở dữ liệu quan hệ, sử dụng để lưu trữ và truy xuất dữ
                                    liệu.<br>
                                    Đặc điểm: SQL (Structured Query Language) được sử dụng để thao tác với cơ sở dữ
                                    liệu.
                                </p>
                                <span class="comit"><i class="fa fa-quote-right"></i></span>
                            </div>
                        </div>
                        <div class="testimonial-box">
                            <div class="author-test">
                                <img src="./public/accests/client/img/wordpress.png" alt="" class="b-shadow-a">
                                <span class="author">hệ thống quản lý nội dung (CMS - Content Management System)</span>
                            </div>
                            <div class="content-test">
                                <p class="description lead">
                                    WordPress là một hệ thống quản lý nội dung (CMS) giúp người dùng tạo, chỉnh sửa, và
                                    quản lý nội dung trang web mà không cần kiến thức lập trình sâu.
                                </p>
                                <span class="comit"><i class="fa fa-quote-right"></i></span>
                            </div>
                        </div>
                        <div class="testimonial-box">
                            <div class="author-test">
                                <img src="./public/accests/client/img/c++.png" alt="" class="b-shadow-a">
                                <span class="author">Ngôn ngữ lập trình C/C++</span>
                            </div>
                            <div class="content-test">
                                <p class="description lead">
                                    Mục đích: Ngôn ngữ lập trình đa năng, được sử dụng trong phát triển phần mềm, game,
                                    và hệ thống nhúng.<br>
                                    Đặc điểm: Mạnh mẽ, hiệu suất cao, hỗ trợ đối tượng hóa.
                                </p>
                                <span class="comit"><i class="fa fa-quote-right"></i></span>
                            </div>
                        </div>
                        <div class="testimonial-box">
                            <div class="author-test">
                                <img src="./public/accests/client/img/java.png" alt="" class="b-shadow-a">
                                <span class="author">Ngôn ngữ lập trình JAVA</span>
                            </div>
                            <div class="content-test">
                                <p class="description lead">
                                    Mục đích: Ngôn ngữ lập trình đa nền tảng, sử dụng chủ yếu trong phát triển ứng dụng
                                    đa dạng.<br>
                                    Đặc điểm: Mạnh mẽ, đối tượng hướng và có thể chạy trên nhiều hệ điều hành.
                                </p>
                                <span class="comit"><i class="fa fa-quote-right"></i></span>
                            </div>
                        </div>
                        <div class="testimonial-box">
                            <div class="author-test">
                                <img src="./public/accests/client/img/nodejs.png" alt="" class="b-shadow-a">
                                <span class="author">Ngôn ngữ lập trình NODE JS</span>
                            </div>
                            <div class="content-test">
                                <p class="description lead">
                                    Mục đích: Framework phía server, sử dụng JavaScript để xây dựng ứng dụng web và
                                    API.<br>
                                    Đặc điểm: Non-blocking và event-driven để xử lý đồng thời nhiều kết nối.
                                </p>
                                <span class="comit"><i class="fa fa-quote-right"></i></span>
                            </div>
                        </div>
                        <div class="testimonial-box">
                            <div class="author-test">
                                <img src="./public/accests/client/img/bootstrap.png" alt="" class="b-shadow-a">
                                <span class="author">Framework BOOTRSTRAP 5</span>
                            </div>
                            <div class="content-test">
                                <p class="description lead">
                                    Mục đích: Framework CSS và JavaScript để phát triển giao diện web đẹp và
                                    responsively.<br>
                                    Đặc điểm: Cung cấp các component và utilities sẵn có, giúp tối ưu hóa quá trình phát
                                    triển.
                                </p>
                                <span class="comit"><i class="fa fa-quote-right"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/ Section Blog Star /-->
    <section id="blog" class="blog-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Bài viết
                        </h3>
                        <p class="subtitle-a">
                            Tất cả các bài viết mới nhất
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-blog">
                        <div class="card-img">
                            <a href="index.php?act=blog-single"><img src="./public/accests/client/img/ai.jpg" alt=""
                                    class="img-fluid"></a>
                        </div>
                        <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                    <h6 class="category">Công nghệ</h6>
                                </div>
                            </div>
                            <h3 class="card-title"><a href="index.php?act=blog-single"></a>Sự phát triển của trí tuệ
                                nhân tạo</h3>
                            <p class="card-description">
                                Hiện nay với sự phát triển của khoa học công nghệ thì sự xuất hiện của trí tuệ nhân tạo
                                AI là một điều là cho thế giới phải ngạc nhiên vì sự thông minh vượt trội của nó
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="post-author">
                                <a href="#">
                                    <img src="./public/accests/client/img/avatar-3.png" alt=""
                                        class="avatar rounded-circle">
                                    <span class="author">Huỳnh An Khương</span>
                                </a>
                            </div>
                            <div class="post-date">
                                <span class="ion-ios-clock-outline"></span> 10 phút
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-blog">
                        <div class="card-img">
                            <a href="index.php?act=blog-single"><img src="./public/accests/client/img/google.jpg" alt=""
                                    class="img-fluid"></a>
                        </div>
                        <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                    <h6 class="category">Internet</h6>
                                </div>
                            </div>
                            <h3 class="card-title"><a href="index.php?act=blog-single"></a>Google cho ra mắt sản phẩm
                                mới</h3>
                            <p class="card-description">
                                Google là một tập đoạn đội ngũ lớn, và mới đây Google đã cho ra mắt một sản phẩm mới với
                                các tính năng mạnh mẽ và vượt trội hơn các sản phẩm thế hệ trước.
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="post-author">
                                <a href="#">
                                    <img src="./public/accests/client/img/avatar-3.png" alt=""
                                        class="avatar rounded-circle">
                                    <span class="author">Huỳnh An Khương</span>
                                </a>
                            </div>
                            <div class="post-date">
                                <span class="ion-ios-clock-outline"></span> 10 phút
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-blog">
                        <div class="card-img">
                            <a href="index.php?act=blog-single"><img src="./public/accests/client/img/elon_musk.jpg"
                                    alt="" class="img-fluid"></a>
                        </div>
                        <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                    <h6 class="category">Khoa học</h6>
                                </div>
                            </div>
                            <h3 class="card-title"><a href="blog-single.html">Elon Musk người nắm bắt vũ trụ</a></h3>
                            <p class="card-description">
                                Nhà tỷ phú Elon Musk đã thực hiện các dự án khám phá vũ trụ bằng những thiết bị vô cùng
                                tiên tiến nhưng đôi khi vẫn có thể có nguy cơ thất bại làm cho nhà tỷ phú bị tổn thất
                                nặng nề.
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="post-author">
                                <a href="#">
                                    <img src="./public/accests/client/img/avatar-3.png" alt=""
                                        class="avatar rounded-circle">
                                    <span class="author">Huỳnh An Khương</span>
                                </a>
                            </div>
                            <div class="post-date">
                                <span class="ion-ios-clock-outline"></span> 10 phút
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Section Blog End /-->

    <!--/ Section Contact-Footer Star /-->
    <section class="paralax-mf footer-paralax bg-image sect-mt4 route"
        style="background-image: url(./public/accests/client/img/fpt-3.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-mf">
                        <div id="contact" class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            Gửi ý kiến đến chúng tôi
                                        </h5>
                                    </div>
                                    <div>
                                        <form action="" method="post" role="form" class="contactForm">
                                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                                            <div id="errormessage"></div>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" id="name"
                                                            placeholder="Tên của bạn" data-rule="minlen:4"
                                                            data-msg="Please enter at least 4 chars" />
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" id="email"
                                                            placeholder="Email của bạn" data-rule="email"
                                                            data-msg="Please enter a valid email" />
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="subject"
                                                            id="subject" placeholder="Chủ đề" data-rule="minlen:4"
                                                            data-msg="Please enter at least 8 chars of subject" />
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" rows="5"
                                                            data-rule="required"
                                                            data-msg="Please write something for us"
                                                            placeholder="Lời nhắn"></textarea>
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit"
                                                        class="button button-a button-big button-rouded">Gửi ý
                                                        kiến</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="title-box-2 pt-4 pt-md-0">
                                        <h5 class="title-left">
                                            Liên lạc
                                        </h5>
                                    </div>
                                    <div class="more-info">
                                        <p class="lead">
                                            Nếu bạn có bất kỳ ý kiến nào hoặc cần liên hệ với chúng tôi thì hãy liên lạc
                                            với các thông tin bên dưới để tôi có thể hỗ trợ bạn một cách nhanh chóng và
                                            thuận tiện nhất. Chân thành cảm ơn !
                                            <!DOCTYPE html>
                                            <html lang="en">

                                            <head>
                                                <meta charset="UTF-8">
                                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                                <title>Document</title>
                                            </head>

                                            <body>

                                            </body>

                                            </html>
                                        </p>
                                        <ul class="list-ico">
                                            <li><span class="ion-ios-location"></span>Toà nhà FPT Polytechnic, Đ. Số 22,
                                                Thường Thạnh, Cái Răng, Cần Thơ, Việt Nam</li>
                                            <li><span class="ion-ios-telephone"></span> (+84) 813-767-025</li>
                                            <li><span class="ion-email"></span> khuonghapc06329@fpt.edu.vn</li>
                                        </ul>
                                    </div>
                                    <div class="socials">
                                        <ul>
                                            <li><a href="https://www.facebook.com/khuong.huynhan.7"><span
                                                        class="ico-circle"><i
                                                            class="ion-social-facebook"></i></span></a></li>
                                            <li><a href="https://github.com/khuonghapc06329"><span class="ico-circle"><i
                                                            class="ion-social-github"></i></span></a></li>
                                            <!-- <li><a href=""><span class="ico-circle"><i
                                                            class="ion-social-drive"></i></span></a></li>
                                            <li><a href=""><span class="ico-circle"><i
                                                            class="ion-social-pinterest"></i></span></a></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
          include './public/includes/client/footer.php';
        ?>
    </section>
    <!--/ Section Contact-footer End /-->

    <!-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div> -->

</body>