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
                        <h3>UI/UX Designer</h3>
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
                                    <a href="{{ route('uiux') }}"><h4>UI/UX Designer</h4></a>
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
                            <p>We are looking for a talented and creative UI/UX Designer to join our team. As a UI/UX Designer, you will be responsible for creating intuitive, engaging, and visually appealing user interfaces for our digital products. You will collaborate with product managers, developers, and other stakeholders to deliver seamless and user-centered designs. Your role will involve conducting user research, creating wireframes and prototypes, and ensuring a smooth user experience across web and mobile platforms.</p>
                        </div>
                        <div class="single_wrap">
                            <h4>Responsibility</h4>
                            <ul>
                                <li>Conduct user research and gather feedback to understand user needs and pain points.
                                </li>
                                <li>Design user interfaces that are visually appealing, intuitive, and aligned with the brand.</li>
                                <li>Create wireframes, prototypes, and high-fidelity mockups for web and mobile applications.</li>
                                <li>Work closely with developers to ensure the implementation of designs meets user needs and business goals.</li>
                                <li>Collaborate with the product team to define user flows, information architecture, and interaction design.
                                </li>
                            </ul>
                        </div>
                        <div class="single_wrap">
                            <h4>Qualifications</h4>
                            <ul>
                                <li>Bachelor’s degree in Graphic Design, Interaction Design, or related field.
                                </li>
                                <li>Strong experience with design tools (Adobe XD, Sketch, Figma, or similar).</li>
                                <li>Solid understanding of UI/UX principles, user-centered design, and best practices.</li>
                                <li>Experience in designing for both web and mobile platforms.</li>
                                <li>Strong problem-solving skills and attention to detail.</li>
                            </ul>
                        </div>
                        <div class="single_wrap">
                            <h4>Benefits</h4>
                            <p>UI/UX Designers enjoy a range of benefits, including opportunities for career advancement in the rapidly growing design field. They have the chance to work on innovative and creative projects, shaping the user experience of products that people use daily. With competitive salary potential, many UI/UX roles also offer flexible work options, such as remote work. Additionally, the role provides the opportunity for continuous learning and development as design trends evolve, keeping professionals engaged and up-to-date. Collaboration with cross-functional teams allows designers to have a direct impact on the final product, making their work both fulfilling and influential.
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
                                <li>Published on: <span>13 Des, 2024</span></li>
                                <li>Vacancy: <span>2 Position</span></li>
                                <li>Salary: <span>IDR 5.8M - IDR 15.0M/mo</span></li>
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
