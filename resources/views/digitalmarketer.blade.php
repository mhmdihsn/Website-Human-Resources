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
                        <h3>Digital Marketer</h3>
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
                                    <a href="{{ route('digitalmarketer') }}"><h4>Digital Marketer</h4></a>
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
                            <p>A digital marketer is responsible for developing, implementing, and managing marketing campaigns that promote a company’s products or services online. This includes creating content, optimizing websites for SEO, managing social media accounts, running paid advertising campaigns, and analyzing data to measure performance and improve strategies. They collaborate with creative teams to produce engaging content, execute email marketing campaigns, and ensure brand consistency across all digital platforms. Proficiency in tools like Google Analytics, Google Ads, and social media platforms is essential, along with strong analytical, communication, and creative skills. The goal is to increase brand awareness, drive traffic, and generate leads or sales.</p>
                        </div>
                        <div class="single_wrap">
                            <h4>Responsibility</h4>
                            <ul>
                                <li>Develop, implement, and manage digital marketing strategies to meet business goals.
                                </li>
                                <li>Optimize website and content to improve search engine rankings.</li>
                                <li>Create, manage, and publish relevant content across digital platforms (blogs, social media, email).</li>
                                <li>Design and run paid advertising campaigns on social platforms.</li>
                            </ul>
                        </div>
                        <div class="single_wrap">
                            <h4>Qualifications</h4>
                            <ul>
                                <li>Bachelor’s degree in Marketing, Communications, or related fields.
                                </li>
                                <li>1-2 years of experience in digital marketing.</li>
                                <li>Familiarity with tools like Google Ads, Google Analytics, and SEO platforms (SEMrush, Ahrefs).</li>
                                <li>Strong analytical and data-driven decision-making skills.</li>
                            </ul>
                        </div>
                        <div class="single_wrap">
                            <h4>Benefits</h4>
                            <p>Digital marketing offers numerous benefits, including high demand for skilled professionals, career growth opportunities, and flexibility with remote work options. It allows for creative expression through content creation and campaign management while offering competitive salary potential. Digital marketers can work globally, continuously learning and adapting to new trends in a fast-evolving field. Additionally, the role provides the opportunity to make a direct impact on a company's growth and brand visibility.
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
                                <li>Published on: <span>12 Nov, 2024</span></li>
                                <li>Vacancy: <span>3 Position</span></li>
                                <li>Salary: <span>50k - 120k/y</span></li>
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
