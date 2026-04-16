<form action="https://testcontact.orcasia.org/send_email.php" method="POST">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <input type="text" name="subject" placeholder="Subject" required>
    <textarea name="message" placeholder="Message" required></textarea>
    <input type="submit" value="Send">
    <?php
    $message = $_GET['message'] ?? ''; // Retrieve the message query parameter
    
    if ($message === 'success') {
        echo 'Message sent successfully!';
    } elseif ($message === 'error') {
        echo 'Error in sending the message. Please try again.';
    } else {
        echo 'Unexpected error occurred.';
    }
    ?>

</form>

<script>
    // Reset the form after a certain time period (optional)
    $(document).ready(function() {
        setTimeout(function() {
            $('.ajax-form')[0].reset();
        }, 1000); // Reset after 5 seconds (adjust the time as needed)
    });
</script>
