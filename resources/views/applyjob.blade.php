<div class="apply_job_form white-bg" id="applyJobForm">
    <h4>Apply for the Job</h4>

    <form action="{{ route('applyjob.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <div class="input_field">
                    <input type="text" name="name" placeholder="Your name" value="{{ old('name') }}">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="input_field">
                    <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="input_field">
                    <input type="number" name="phone" placeholder="Telephone Number" value="{{ old('phone') }}">
                    @error('phone')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="input_field">
                    <select class="form-select" name="position">
                        <option value="">Select Position</option>
                        <option value="Software Engineer" {{ old('position') == 'Software Engineer' ? 'selected' : '' }}>Software Engineer</option>
                        <option value="Digital Marketer" {{ old('position') == 'Mobile Developer' ? 'selected' : '' }}>Digital Marketer</option>
                        <option value="Web Developer" {{ old('position') == 'Web Developer' ? 'selected' : '' }}>Web Developer</option>
                        <option value="UI/UX Designer" {{ old('position') == 'Web Developer' ? 'selected' : '' }}>UI/UX Designer</option>
                        <option value="Data Analyst" {{ old('position') == 'Data Analyst' ? 'selected' : '' }}>Data Analyst</option>
                        <option value="Product Manager" {{ old('position') == 'Visual Designer' ? 'selected' : '' }}>Product Manager</option>
                    </select>
                    @error('position')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="col-md-12">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" id="inputGroupFileAddon03">
                            <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="custom-file">
                        <input type="file"
                               class="custom-file-input"
                               id="inputGroupFile03"
                               name="cv"
                               aria-describedby="inputGroupFileAddon03"
                               onchange="updateFileName(this)">
                        <label class="custom-file-label" id="cvLabel" for="inputGroupFile03">Upload CV ( Format File PDF/DOC/DOCX )</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-4">
                <div class="submit_btn">
                    <button class="boxed-btn3 w-100" type="submit">Apply Now</button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Success Message after applying for the job -->
<div class="success-message" id="successMessage" style="display: none;">
    <h4>Your application has been submitted successfully!</h4>
    <img src="{{ asset('images/success-icon.png') }}" alt="Success Icon">
</div>

<!-- JavaScript -->
<script>
    // Update CV file name dynamically
    function updateFileName(input) {
        const fileName = input.files[0]?.name || "Upload CV";
        document.getElementById("cvLabel").textContent = fileName;
    }

    // Handle form submission with AJAX
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('jobApplicationForm');
        form.addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent default form submission

            const formData = new FormData(form);

            fetch('{{ route('applyjob.store') }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                }
            })
            .then(async (response) => {
                // Handle validation errors (422)
                if (response.status === 422) {
                    const errors = await response.json();
                    showValidationErrors(errors.errors);
                    throw new Error('Validation failed');
                }
                return response.json();
            })
            .then(data => {
                if (data.status === 'success') {
                    // Hide form and show success message
                    document.getElementById('applyJobForm').style.display = 'none';
                    document.getElementById('successMessage').style.display = 'block';
                } else {
                    alert(data.message || 'Failed to submit the application. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });

        // Show validation errors
        function showValidationErrors(errors) {
            // Clear previous errors
            document.querySelectorAll('.text-danger').forEach(el => el.textContent = '');

            // Display new errors
            if (errors.name) document.querySelector('.error-name').textContent = errors.name[0];
            if (errors.email) document.querySelector('.error-email').textContent = errors.email[0];
            if (errors.phone) document.querySelector('.error-phone').textContent = errors.phone[0];
            if (errors.position) document.querySelector('.error-position').textContent = errors.position[0];
            if (errors.cv) document.querySelector('.error-cv').textContent = errors.cv[0];
        }
    });
</script>
