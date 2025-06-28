document.addEventListener('DOMContentLoaded', function() {
    const teamMembers = document.querySelectorAll('.teammember');

    teamMembers.forEach(member => {
        member.addEventListener('mouseenter', function() {
            // Change the background color of the image
            const img = member.querySelector('.teamimage img');
            if (img) {
                img.style.backgroundColor = '#add8e6'; // Soft blue background
            }

            // Show the links
            const links = member.querySelectorAll('.social a');
            links.forEach(link => {
                link.style.opacity = '1';
                link.style.display = 'inline'; // Show link
            });
        });

        member.addEventListener('mouseleave', function() {
            // Revert the background color of the image
            const img = member.querySelector('.teamimage img');
            if (img) {
                img.style.backgroundColor = ''; // Remove the background color
            }

            // Hide the links
            const links = member.querySelectorAll('.social a');
            links.forEach(link => {
                link.style.opacity = '0';
                link.style.display = 'none'; // Hide link
            });
        });
    });
});