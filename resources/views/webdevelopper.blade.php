<!doctype html>
<html class="no-js" lang="zxx">

@include('head')

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

<!-- header-start -->
@include('header')
<!-- header-end -->

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Web Developer</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <div class="job_details_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="job_details_header">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/svg_icon/1.svg" alt="">
                                </div>
                                <div class="jobs_conetent">
                                    <a href="{{ route('webdevelopper') }}"><h4>Web Developer</h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i> Jakarta, INA</p>
                                        </div>
                                        <div class="location">
                                            <p> <i class="fa fa-clock-o"></i> Full-time</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                {{-- <div class="apply_now">
                                    <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="descript_wrap white-bg">
                        <div class="single_wrap">
                            <h4>Job description</h4>
                            <p>We are seeking a talented and experienced Web Developer to join our dynamic team. As a Web Developer, you will be responsible for developing and maintaining both the front-end and back-end components of our web applications. You will collaborate closely with designers, product managers, and other developers to create high-quality, scalable, and user-friendly software solutions. Your role will include developing responsive user interfaces, writing server-side logic, managing databases, and ensuring seamless integration of various technologies across the stack.</p>
                        </div>
                        <div class="single_wrap">
                            <h4>Responsibility</h4>
                            <ul>
                                <li>Design, develop, and maintain both the front-end and back-end of web applications.
                                </li>
                                <li>Collaboration and Communication</li>
                                <li>Database Management</li>
                                <li>Testing and Debugging</li>
                            </ul>
                        </div>
                        <div class="single_wrap">
                            <h4>Qualifications</h4>
                            <ul>
                                <li>Bachelor’s degree in Computer Science or related field.
                                </li>
                                <li>Strong knowledge of front-end technologies (HTML, CSS, JavaScript, React/Angular).</li>
                                <li>Proficiency in back-end programming languages (Node.js, Python, Java, PHP).</li>
                                <li>Experience with databases (MySQL, MongoDB) and version control (Git).</li>
                                <li>Excellent problem-solving and debugging skills.</li>
                            </ul>
                        </div>
                        <div class="single_wrap">
                            <h4>Benefits</h4>
                            <p>This role offers a perfect blend of creative and technical challenges, with the chance to develop a diverse skill set in both programming and design. Enjoy competitive salary potential, flexibility with remote work options, and the opportunity to collaborate with talented teams across various industries, including tech, healthcare, and more. Keep your skills sharp and stay ahead of the curve with continuous learning and development opportunities. Ready to make an impact? Apply today and join us!
                            </p>
                        </div>
                    </div>
                    @include('applyjob')
                </div>
                <div class="col-lg-4">
                    <div class="job_sumary">
                        <div class="summery_header">
                            <h3>Job Summery</h3>
                        </div>
                        <div class="job_content">
                            <ul>
                                <li>Published on: <span>12 Des, 2024</span></li>
                                <li>Vacancy: <span>3 Position</span></li>
                                <li>Salary: <span>Rp 7.000.000 - Rp 10.000.000/M</span></li>
                                <li>Location: <span>Jakarta, INA</span></li>
                                <li>Job Nature: <span> Full-time</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer start -->
    @include('footer')
    <!--/ footer end  -->

    <!-- link that opens popup -->
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script>
        function updateFileName(input) {
            const fileName = input.files[0]?.name || "Upload CV"; // Ambil nama file atau kembalikan placeholder default
            const label = document.getElementById("cvLabel");
            label.textContent = fileName; // Ubah teks pada label
        }
    </script>


    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>



    <script src="js/main.js"></script>
</body>

</html>
