@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{ route('scheduleRegistration') }}">
    @csrf
    <div>
        <label for="fname">First Name:</label>
        <input id="fname" type="text" name="fname" required>
    </div>
    <div>
        <label for="lname">Last Name:</label>
        <input id="lname" type="text" name="lname" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input id="email" type="email" name="email" required>
    </div>
    <div>
        <label for="phonenumber">Phone Number:</label>
        <input id="phonenumber" type="number" name="phonenumber" required>
    </div>
    <div>
        <label for="occupation">Occupation:</label>
        <input id="occupation" type="text" name="occupation" required>
    </div>
    <div>
        <label for="organization">Organization:</label>
        <input id="organization" type="text" name="organization" required>
    </div>
    <?php $scheduleData = App\Models\Event\Schedule::orderBy('id', 'asc')->get();
    $counter = 0; ?>
    @foreach ($scheduleData as $schedule)
        <input type="radio" name="schedule" value="{{ $schedule->id }}" {{ $counter == '0' ? 'checked' : '' }}>
        {{ $schedule->title }}
        <?php $counter++; ?>
    @endforeach
    <button type="submit">Register</button>
</form>

<!-- Modal-->
<style>
    .radiobtn input[type=checkbox] {
        display: none;
    }

    .radiobtn .checked {
        border: none;
        outline: 2px solid white;
    }
</style>
<div id="lgx-modal-map" class="modal fade lgx-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <div class="lgx-registration-form-box">
                    <div id="loader" class="spinner-border text-primary" role="status" style="display: none;">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <h3 class="title">Registrations for ORCA's GCNS 2024 are now closed.</h3>
                    <!-- <p style="color:white;     text-align: left;">
                        Note:<br>
<br>1. Please apply only once, and do not fill multiple forms.
<br>2. Applicants who apply multiple times will not be considered at all.
<br>3. Selecting a session does not guarantee placement in that if slots are filled, however it will be referenced as first priority of applicant.
                    </p>
                    <br>
                    <form method="POST" action="{{ route('scheduleRegistration') }}" id="myRegisterForm">
                        @csrf
                        <div class="lgx-registration-form">
                            <div class="form-group">
                                <input type="text" class="wpcf7-form-control form-control" id="fname"
                                    name="fname" placeholder="First Name" required>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="wpcf7-form-control form-control" id="lname"
                                    name="lname" placeholder="Last Name" required>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <input type="email" class="wpcf7-form-control form-control" id="email"
                                    name="email" placeholder="Your E-mail ..." required>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="wpcf7-form-control form-control" id="phonenumber"
                                    name="phonenumber" placeholder="Mobile Number ..." max="10" required>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="wpcf7-form-control form-control" id="occupation"
                                    name="occupation" placeholder="Occupation" required>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <input type="text" class="wpcf7-form-control form-control" id="organization"
                                    name="organization" placeholder="Current Organisation" required>
                                <span class="text-danger"></span>
                            </div>
                            <br>
                            <p style="color: white;">Registering for Session:</p>
                            <br>
                            <div class="form-group dspflex">
                                <div class="form-check radiobtn mr">
                                    <input class="form-check-input" type="checkbox" name="schedule[]" id="1"
                                        value="1">
                                    <label for="1">Session I</label>
                                </div>
                                <div class="form-check radiobtn mr">
                                    <input class="form-check-input" type="checkbox" name="schedule[]" id="2"
                                        value="2">
                                    <label for="2">Session II</label>
                                </div>
                                <div class="form-check radiobtn mr">
                                    <input class="form-check-input" type="checkbox" name="schedule[]" id="3"
                                        value="3">
                                    <label class="" for="3">Session III</label>
                                </div>
                                <div class="form-check radiobtn mr">
                                    <input class="form-check-input" type="checkbox" name="schedule[]" id="4"
                                        value="4">
                                    <label for="4">Session IV</label>
                                </div>
                                <span class="text-danger"></span>
                            </div>

                            <button type="button" class="btn btn-primarywpcf7-form-control wpcf7-submit lgx-submit"
                                onclick="submitRegisterForm()">Register Now</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> <!-- //.Modal-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.radiobtn label').on('click', function() {
            if ($(this).hasClass('checked')) {
                $(this).removeClass('checked')
            } else {
                $(this).addClass('checked')
            }
        })
    })

    function submitRegisterForm() {
        var form = document.getElementById('myRegisterForm');
        var formData = new FormData(form);
        var loader = document.getElementById('loader');
        loader.style.display = 'block';

        fetch(form.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                loader.style.display = 'none';
                if (data.data.length == 0) {
                    // Handle success, e.g., close the modal, show success message, etc.
                    $('#lgx-modal-map').modal('hide');
                    $('#successModal').modal('show');
                    form.reset();
                } else {
                    // Handle validation errors
                    var errors = data.data;
                    console.log("errors", errors)
                    Object.keys(errors).forEach(function(key) {
                        var errorField = document.getElementById(key);
                        var errorMessage = errors[key];
                        console.log("errorField", errorField, "errorMessage", errorMessage)
                        errorField.classList.add('is-invalid');
                        errorField.nextElementSibling.innerText = errorMessage;
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }
</script>
