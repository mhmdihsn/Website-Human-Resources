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
                        <h3>Product Manager</h3>
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
                                    <a href="{{ route('productmanager') }}"><h4>Product Manager</h4></a>
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
                            <p>We are looking for a highly motivated and experienced Product Manager to join our team. As a Product Manager, you will be responsible for overseeing the development and lifecycle of our products from ideation to launch. You will work closely with cross-functional teams, including engineering, design, marketing, and sales, to define product vision, strategy, and roadmaps. Your role will include prioritizing features, gathering customer feedback, analyzing market trends, and ensuring that the product meets both business and user needs.</p>
                        </div>
                        <div class="single_wrap">
                            <h4>Responsibility</h4>
                            <ul>
                                <li>Define and communicate the product vision, strategy, and roadmap.<li>
                                <li>Work with cross-functional teams to deliver high-quality products on time.</li>
                                <li>Gather and analyze customer feedback, market trends, and competitors to inform product decisions.</li>
                                <li>Prioritize product features and improvements based on business goals and customer needs.</li>
                                <li>Manage product lifecycle, from concept to launch and iteration.
                                </li>
                            </ul>
                        </div>
                        <div class="single_wrap">
                            <h4>Qualifications</h4>
                            <ul>
                                <li>Bachelor’s degree in Business, Engineering, or a related field.
                                </li>
                                <li>Proven experience as a Product Manager or in a similar role.</li>
                                <li>Strong understanding of product development processes, including Agile or Scrum methodologies.</li>
                                <li>Experience with product management tools (Jira, Trello, or similar).</li>
                                <li>Ability to prioritize tasks and manage competing deadlines.</li>
                            </ul>
                        </div>
                        <div class="single_wrap">
                            <h4>Benefits</h4>
                            <p>Product Managers enjoy a range of benefits, including opportunities for career growth in a critical leadership role. The position provides the chance to work on innovative and high-impact products that shape the future of the company. With competitive salary potential, many Product Manager roles also offer flexible work options such as remote work. The role allows for continuous learning and development, as Product Managers work across different industries and adapt to evolving market trends. By collaborating with teams across the company, they influence key business strategies, making their work both fulfilling and influential.
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
                                <li>Published on: <span>14 Des, 2024</span></li>
                                <li>Vacancy: <span>1 Position</span></li>
                                <li>Salary: <span>IDR 7M - IDR 25.0M/mo</span></li>
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
