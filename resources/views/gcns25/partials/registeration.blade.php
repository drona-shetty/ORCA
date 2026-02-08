<style>
    /* Modal overlay */
    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 1000;
    }

    /* Modal box */
    .modal {
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        width: 800px;
        /* wider modal */
        max-width: 95%;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        animation: fadeIn 0.3s ease-in-out;
        position: relative;
    }

    .modal h2 {
        margin-top: 0;
        text-transform: uppercase;
        font-weight: 900;
        letter-spacing: -0.5px;
    }

    /* Close button */
    .close-btn {
        position: absolute;
        top: 12px;
        right: 15px;
        font-size: 24px;
        font-weight: bold;
        color: #555;
        cursor: pointer;
    }

    .close-btn:hover {
        color: #000;
    }

    /* Form layout */
    form {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        /* 2 columns */
        gap: 20px;
    }

    /* Full width for large fields */
    .full-width {
        grid-column: span 2;
    }

    label {
        font-weight: 600;
        margin-bottom: 6px;
        display: block;
        color: #333;
    }

    input,
    textarea {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
        outline: none;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    input:focus,
    textarea:focus {
        border-color: #007bff;
        box-shadow: 0 0 4px rgba(0, 123, 255, 0.4);
    }

    textarea {
        resize: vertical;
        min-height: 80px;
    }

    button[type="submit"] {
        margin-inline: auto;
        display: flex;
        grid-column: span 2;
        text-align: center;
    }

    .full-width.note {
        color: red;
    }

    .radio-box {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 5px 10px;
        border: 2px solid #ccc;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
        background: #fff;
        font-size: 14px;
        font-weight: 500;
        color: #333;
    }

    .radio-box-group {
        display: flex;
        gap: 12px;
        margin-top: 10px;
        flex-wrap: nowrap;
    }

    .radio-box:hover {
        border-color: #dc3545;
        /* red border on hover */
        background: #fff5f5;
        /* light red background */
    }

    .radio-box input[type="radio"] {
        display: none;
        /* hide default radio */
    }

    .radio-box input[type="radio"]:checked+span {
        color: #dc3545;
        /* red text */
        font-weight: 600;
    }

    .radio-box input[type="radio"]:checked~span::before {
        content: "✔ ";
        color: #dc3545;
        /* red tick */
        font-weight: bold;
    }

    .radio-box:has(input[type="radio"]:checked) {
        border-color: #dc3545;
        /* red border */
        background: #ffe6e6;
        /* soft red bg */
    }

    /* Animation */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<!-- jQuery (for modal open/close) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Open Button -->
<button id="openModalBtn">Open Registration Form</button>

<!-- Modal -->
<div id="modalOverlay" class="modal-overlay">
    <div class="modal">
        <span class="close-btn" id="closeModalBtn">&times;</span>
        <h2 style="margin-bottom:15px; text-align:center; color:var(--orca-red);">Registrations for GCNS are now closed</h2>
       <!-- <form method="POST" action="{{ route('scheduleRegistration') }}">
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
                <label for="city">Current Location (City):</label>
                <input id="city" type="text" name="city" required>
            </div>
            <div>
                <label for="organization">Institution Affiliated:</label>
                <input id="organization" type="text" name="organization" required>
            </div>
            <div>
                <label for="occupation">Current Designation:</label>
                <input id="occupation" type="text" name="occupation" required>
            </div>
            <div>
                <label>How did you come to know about GCNS 2025?</label>
                <div class="radio-box-group">
                    <label class="radio-box">
                        <input type="radio" name="description" value="Twitter" required>
                        <span>Twitter</span>
                    </label>
                    <label class="radio-box">
                        <input type="radio" name="description" value="LinkedIn">
                        <span>LinkedIn</span>
                    </label>
                    <label class="radio-box">
                        <input type="radio" name="description" value="Website">
                        <span>Website</span>
                    </label>
                    <label class="radio-box">
                        <input type="radio" name="description" value="Peers">
                        <span>Peers</span>
                    </label>
                </div>
            </div>

            <div class="full-width note">
                <p>
                    <strong>*Kindly note that the registration is only for Day 1 (23rd September 2025).
                        Due to the overwhelming response to past GCNS editions, only selected participants will be
                        contacted.
                        We request you not to email us regarding registration status, as we will not be able to respond
                        individually.</strong>
                </p>
            </div>
            <button type="submit" class="rdf-button-1">Register</button>
        </form> -->
    </div>
</div>

<script>
    $(function() {
        $("#openModalBtn").on("click", function() {
            $("#modalOverlay").fadeIn().css("display", "flex");
        });
        $("#closeModalBtn").on("click", function() {
            $("#modalOverlay").fadeOut();
        });
        $(document).on("click", function(e) {
            if ($(e.target).is("#modalOverlay")) {
                $("#modalOverlay").fadeOut();
            }
        });
    });
</script>
