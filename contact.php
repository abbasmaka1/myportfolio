
<html>
<head>

<style>
/* Reset some default styles */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

/* Container styling */
.container {
    max-width: 300px; /* Compact width */
    margin: 30px auto; /* Centered margin */
    padding: 20px; /* Padding */
    background: #ffffff;
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    font-family: 'Montserrat', sans-serif;
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth hover effects */
}

.container:hover {
    transform: translateY(-5px); /* Lift effect on hover */
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2); /* Enhanced shadow on hover */
}

/* Heading styling */
h3 {
    text-align: center;
    margin-bottom: 30px; /* Increased margin for spacing */
    color: #1a1a1a; /* Color */
    font-size: 1.8rem; /* Font size */
    font-weight: 600;
    text-transform: capitalize;
    letter-spacing: 0.5px;
    position: relative; /* For glowing underline effect */
}

/* Glowing underline effect for heading */
h3::after {
    content: '';
    display: block;
    width: 50%; /* Width of the underline */
    height: 3px; /* Height of the underline */
    background: rgba(255, 204, 0, 0.6); /* Yellow color for underline */
    margin: 10px auto 0; /* Centered with margin on top */
    border-radius: 5px; /* Rounded edges */
    box-shadow: 0 0 8px rgba(255, 204, 0, 0.8); /* Glow effect */
}

/* Label styling */
.form-group {
    margin-bottom: 15px; /* Spacing */
}

.form-group label {
    font-weight: 600;
    color: #333; /* Label color */
    display: block;
    position: relative; /* For glowing underline effect */
}

/* Glowing underline effect for labels */
.form-group label::after {
    content: '';
    display: block;
    width: 40%; /* Shortened width for the underline */
    height: 2px; /* Height of the underline */
    background: rgba(255, 204, 0, 0.4); /* Yellow color */
    margin-top: 2px; /* Closer spacing to the label */
    border-radius: 5px; /* Rounded edges */
    opacity: 0; /* Start invisible */
    transition: opacity 0.3s ease; /* Smooth transition for visibility */
}

.form-group label:hover::after {
    opacity: 1; /* Show underline on hover */
}

/* Input field styling */
.form-control {
    width: 100%;
    padding: 12px; /* Padding */
    border: 2px solid #ccc; /* Thicker border */
    border-radius: 20px; /* Curved edges */
    transition: all 0.4s ease; /* Smooth transitions */
    transform: scale(0.95); /* Initial smaller size */
}

.form-control:focus {
    border-color: #ffcc00; /* Yellow on focus */
    box-shadow: 0 0 12px rgba(255, 204, 0, 0.5); /* Softer glow effect */
    outline: none; /* Remove default outline */
    transform: scale(1.05); /* Gentle expansion on focus */
}

/* Button styling */
.btn {
    display: inline-block;
    font-size: 1rem;
    padding: 10px; /* Padding */
    border: none;
    border-radius: 6px; /* Rounded button edges */
    cursor: pointer;
    transition: all 0.3s ease; /* Smooth transition */
    width: calc(48% - 5px); /* Adjusted width for spacing */
    margin-bottom: 10px; /* Space between buttons */
}

.btn-success {
    background-color: #28a745; /* Green for success */
    color: #fff; /* Button text color */
}

.btn-danger {
    background-color: #dc3545; /* Red for danger */
    color: #fff; /* Button text color */
}

/* Button hover effects */
.btn-success:hover {
    background-color: #218838; /* Darker green on hover */
    transform: scale(1.05); /* Scale effect */
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2); /* Shadow */
}

.btn-danger:hover {
    background-color: #c82333; /* Darker red on hover */
    transform: scale(1.05); /* Scale effect */
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2); /* Shadow */
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .container {
        padding: 15px; /* Padding for smaller screens */
    }

    .btn {
        width: 100%; /* Full-width buttons */
        margin-bottom: 10px; /* Space between buttons */
    }
}

.social-links {
    display: flex; /* Align items in a row */
    justify-content: center; /* Center the items */
    margin-top: 20px; /* Space above the icons */
}

.social-icon {
    margin: 0 15px; /* Increased space between icons */
    font-size: 32px; /* Larger size for icons */
    color: #333; /* Default icon color */
    transition: transform 0.2s, color 0.2s; /* Smooth scaling and color transition */
}

.social-icon:hover {
    transform: scale(1.1); /* Scale up on hover */
    color: #ffcc00; /* Change color on hover */
}



</style>


    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- custom css file -->
    <link rel="stylesheet" href="css/style.css" /></head>
<body>




<div class="container">
        <h3>contact form</h3>
        <form action="form-process.php" method="POST">
            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="text" name="firstname" id="firstname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" id="lastname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" id="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <input type="text" name="message" id="message" class="form-control" required>
            </div>
            <div class="form-group">
        <button class="btn btn-success" type="submit">Submit</button>
        <button class="btn btn-danger" type="reset">Reset</button>
    </div>
        </form>
    </div>
    <div class="social-links">
    <a href="https://www.linkedin.com" target="_blank" class="social-icon">
        <i class="fab fa-linkedin"></i> <!-- LinkedIn Icon -->
    </a>
    <a href="0331-2624579" target="_blank" class="social-icon">
        <i class="fab fa-whatsapp"></i> <!-- WhatsApp Icon -->
    </a>
    <a href="abbasmaka22@gmail.com" class="social-icon">
        <i class="fas fa-envelope"></i> <!-- Email Icon -->
    </a>
</div>
</body>

</html>