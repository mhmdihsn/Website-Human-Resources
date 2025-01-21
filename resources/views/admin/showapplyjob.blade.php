<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Apply Job</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <link rel="stylesheet" href="admin/assets/css2/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/logo-mini.png" />

    <style>
        .status {
            color: white;
            padding: 6px 12px;
            border-radius: 4px;
        }
        .status-pending {
            background-color: orange;
        }
        .status-accepted {
            background-color: green;
        }
        .status-canceled {
            background-color: red;
        }
        .action-button {
            transition: opacity 0.3s ease;
        }
        .action-button.disabled {
            opacity: 0.5;
            pointer-events: none;
        }

        .loading-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            text-align: center;
            padding-top: 20%;
        }

        .loading-spinner {
            display: inline-block;
            width: 50px;
            height: 50px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
        }

         /* Added style for filter bar text color */
         #position-filter, #status-filter, #reset-filters-btn {
            color: black; /* Set text color to black */
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        .filters {
        display: flex;
        gap: 10px;
        margin-bottom: 15px;
        align-items: center;
        }

    </style>

  </head>
  <body>
    <!-- Loading overlay -->
    <div id="loading-overlay" class="loading-overlay">
        <div class="loading-spinner"></div>
        <div>Loading...</div>
    </div>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
            <div>
                <div class="filters">
                    <select id="position-filter">
                        <option value="">Select Position</option>
                        <option value="Software Engineer">Software Engineer</option>
                        <option value="Digital Marketer">Digital Marketer</option>
                        <option value="Web Developer">Web Developer</option>
                        <option value="UI/UX Designer">UI/UX Designer</option>
                        <option value="Visual Designer">Visual Designer</option>
                        <option value="Data Analyst">Data Analyst</option>
                        <option value="Product Manager">Product Manager</option>
                    </select>
                    <select id="status-filter">
                        <option value="">Filter by Status</option>
                        <option value="Pending">Pending</option>
                        <option value="Accepted">Accepted</option>
                        <option value="Canceled">Canceled</option>
                    </select>
                </div>
                <button id="reset-filters-btn" class="btn btn-secondary">Reset Filters</button>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Position</th>
                            <th>CV</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $apply)
                        <tr data-position="{{ $apply->position }}" data-status="{{ $apply->status }}">
                            <td>{{$apply->name}}</td>
                            <td>{{$apply->email}}</td>
                            <td>{{$apply->phone}}</td>
                            <td>{{$apply->position}}</td>
                            <td>
                                @if ($apply->cv)
                                        <a href="{{ asset('storage/' . $apply->cv) }}" target="_blank">View</a>
                                    @else
                                        No Proof Uploaded
                                    @endif
                            </td>
                            <td>
                                <span id="status-{{$apply->id}}" class="status {{ $apply->status === 'Accepted' ? 'status-accepted' : ($apply->status === 'Rejected' ? 'status-canceled' : 'status-pending') }}">
                                    {{$apply->status}}
                                </span>
                            </td>
                            <td>
                                @if($apply->status === 'pending')
                                    <button id="accept-btn-{{$apply->id}}" class="btn btn-success action-button accept-btn" data-id="{{ $apply->id }}">Accept</button>
                                    <button id="cancel-btn-{{$apply->id}}" class="btn btn-danger action-button cancel-btn" data-id="{{ $apply->id }}">Reject</button>
                                @else
                                    <button class="btn btn-success action-button disabled">Accept</button>
                                    <button class="btn btn-danger action-button disabled">Cancel</button>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

    <script>
        function updateStatus(id, action) {
            const statusElement = document.getElementById(`status-${id}`);
            const acceptButton = document.getElementById(`accept-btn-${id}`);
            const cancelButton = document.getElementById(`cancel-btn-${id}`); // Fixed this line
            const loadingOverlay = document.getElementById('loading-overlay');
            const url = action === 'accept' ? `/applyjob/accept/${id}` : `/applyjob/cancel/${id}`;

            // Show loading overlay and disable buttons
            loadingOverlay.style.display = 'block';
            acceptButton.disabled = true;
            cancelButton.disabled = true;

            fetch(url, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    if (action === 'accept') {
                        statusElement.textContent = 'Accepted';
                        statusElement.className = 'status status-accepted';
                    } else if (action === 'cancel') {
                        statusElement.textContent = 'Rejected';
                        statusElement.className = 'status status-canceled';
                    }

                    // Disable action buttons after status update
                    acceptButton.disabled = true;
                    cancelButton.disabled = true;
                } else {
                    console.error('Error:', data);
                    alert('Failed to update status. Please try again.');
                }
            }).catch(error => {
                console.error('Error:', error);
                alert('An error occurred while processing your request.');
            })
            .finally(() => {
                // Hide loading overlay
                loadingOverlay.style.display = 'none';
            });
        }

        function filterApplyjob() {
        const positionFilter = document.getElementById('position-filter').value.toLowerCase();
        const statusFilter = document.getElementById('status-filter').value.toLowerCase();

        document.querySelectorAll('tbody tr').forEach(function(row) {
            const position = row.getAttribute('data-position').toLowerCase(); // memastikan data position dalam huruf kecil
            const status = row.getAttribute('data-status').toLowerCase(); // memastikan data status dalam huruf kecil

            const positionMatch = !positionFilter || position.includes(positionFilter);  // Gunakan .includes() untuk pencocokan lebih fleksibel
            const statusMatch = !statusFilter || status.includes(statusFilter);  // Gunakan .includes() untuk pencocokan lebih fleksibel

            if (positionMatch && statusMatch) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
            });
        }

        function resetFilters() {
            document.getElementById('position-filter').value = '';
            document.getElementById('status-filter').value = '';
            filterApplyjob();  // Memanggil kembali filterApplyjob untuk memperbarui tampilan tabel
        }


        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.accept-btn').forEach(function(button) {
                button.addEventListener('click', function() {
                    const applyjobId = this.getAttribute('data-id');
                    updateStatus(applyjobId, 'accept');
                });
            });

            document.querySelectorAll('.cancel-btn').forEach(function(button) {
                button.addEventListener('click', function() {
                    const applyjobId = this.getAttribute('data-id');
                    updateStatus(applyjobId, 'cancel');
                });
            });

            document.getElementById('position-filter').addEventListener('change', filterApplyjob);
            document.getElementById('status-filter').addEventListener('change', filterApplyjob);
            document.getElementById('reset-filters-btn').addEventListener('click', resetFilters);
        });
    </script>

  </body>
</html>
