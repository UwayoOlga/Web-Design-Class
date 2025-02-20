 
function handleLinkClick(event) {
    event.preventDefault();  

    const link = event.target;  
    const destination = link.href;  
 
    alert("Navigating to: " + destination);
 
}

 
const socialMediaLinks = document.querySelectorAll('.social-media-table a');

 
socialMediaLinks.forEach(link => {
    link.addEventListener('click', handleLinkClick);
});