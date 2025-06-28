// document.addEventListener("DOMContentLoaded", function() {
//     document.body.classList.add("loaded");
// });

// window.addEventListener("beforeunload", function() {
//     window.location.href = "opening.html";
// });
document.addEventListener("DOMContentLoaded", function() {
    // Check if the session variable for the user's name is set
    var userName = "<?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : ''; ?>";
    
    // If the user's name is set, replace the "Sign in" and "Log in" buttons with the user's name
    if (userName) {
        var userContainer = document.getElementById('user_name_container');
        userContainer.textContent = userName;
    }
});
