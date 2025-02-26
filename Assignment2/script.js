
document.addEventListener('DOMContentLoaded', function() {
    
    const links = document.querySelectorAll('.social-table a');
  
    links.forEach(link => {
      
      if (localStorage.getItem('visited_' + link.href)) {
        link.style.color = 'purple';
        link.style.textDecoration = 'none';  
      } else {
        link.style.textDecoration = 'underline'; 
      }
  
      link.addEventListener('click', function() { 
        localStorage.setItem('visited_' + link.href, 'true');
        link.style.color = 'purple';
        link.style.textDecoration = 'none';  
      });
    });
  });