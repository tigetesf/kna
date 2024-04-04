// Optional JavaScript for client-side validation

document.getElementById("registrationForm").addEventListener("submit", function(event) {
    const form = event.target;
    if (!form.checkValidity()) {
      event.preventDefault();
      event.stopPropagation();
    }
    form.classList.add('was-validated');
    
  });
  
  




