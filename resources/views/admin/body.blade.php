<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                    <div class="card-body py-0 px-0 px-sm-3">
                        <!-- Optional Content -->
                    </div>
                </div>
            </div>
        </div>
{{-- 
        <div class="row">
            <!-- Existing Cards -->
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">$12.34</h3>
                                    <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success">
                                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Potential growth</h6>
                    </div>
                </div>
            </div>
            <!-- Other cards here... -->
        </div>

        <!-- Chart Section -->
        <canvas id="myChart" width="400" height="200"></canvas>

    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const data = @json($data);
        new Chart(ctx, {
            type: 'bar', // Ganti dengan 'line', 'pie', dll sesuai kebutuhan
            data: data,
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script> --}}
        <!-- End Chart Section -->

        <!-- Footer -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">
                    Copyright © bootstrapdash.com 2021
                </span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                    Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com
                </span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
