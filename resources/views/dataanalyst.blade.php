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
                        <h3>Data Analyst</h3>
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
                                    <a href="{{ route('dataanalyst') }}"><h4>Data Analyst</h4></a>
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
                            <p>We are looking for a skilled and detail-oriented Data Analyst to join our team. As a Data Analyst, you will be responsible for interpreting and analyzing large datasets to provide actionable insights that help drive business decisions. You will collaborate with different departments to gather requirements, develop reports, and communicate findings effectively. Your role will include collecting, cleaning, and analyzing data, creating data visualizations, and generating reports that highlight trends, patterns, and opportunities for improvement.</p>
                        </div>
                        <div class="single_wrap">
                            <h4>Responsibility</h4>
                            <ul>
                                <li>Collect, clean, and organize large sets of data from multiple sources.
                                </li>
                                <li>Analyze data to identify trends, patterns, and insights that can help guide business decisions.</li>
                                <li>Create reports and dashboards that provide clear visual representations of data findings.</li>
                                <li>Ensure data accuracy and integrity by performing regular data audits.</li>
                                <li>Work with stakeholders to understand business needs and translate them into data-driven solutions.
                                </li>
                            </ul>
                        </div>
                        <div class="single_wrap">
                            <h4>Qualifications</h4>
                            <ul>
                                <li>Bachelor’s degree in Data Science, Statistics, Computer Science, or related field.
                                </li>
                                <li>Proficiency in data analysis tools (Excel, SQL, Python, R).</li>
                                <li>Experience with data visualization tools (Tableau, Power BI, or similar).</li>
                                <li>Experience with reporting and dashboard creation.</li>
                                <li>Ability to manage large datasets and clean data for analysis.</li>
                            </ul>
                        </div>
                        <div class="single_wrap">
                            <h4>Benefits</h4>
                            <p>Data Analysts enjoy numerous benefits, including career growth opportunities in a field with increasing demand for skilled professionals. With the chance to work on impactful projects, they help guide business strategies through data-driven insights. Competitive salaries and flexible work options, such as remote roles, are commonly offered. The role provides continuous learning opportunities as new data tools and technologies emerge, allowing analysts to stay current in the field. By collaborating with cross-functional teams, Data Analysts directly influence business decisions, making their work essential and rewarding.
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
                                <li>Vacancy: <span>1 Position</span></li>
                                <li>Salary: <span>IDR 4M - IDR 20.0M/mo</span></li>
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
