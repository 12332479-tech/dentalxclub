document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault();

    let fullname = document.getElementById("fullname").value.trim();

    if(fullname) {
      alert("Hey " + fullname + ", we will contact you as soon as possible!");
      this.submit();
    } else {
      alert("Please enter your full name.");
    }
  });
});
document.addEventListener("DOMContentLoaded", function() {
  const menuCheckbox = document.getElementById("check");
  const menuLinks = document.querySelectorAll("nav ul li a");

  menuLinks.forEach(link => {
    link.addEventListener("click", () => {
      
      if(menuCheckbox.checked) {
        menuCheckbox.checked = false;
      }
    });
  });
});
const check = document.getElementById('check');
const label = document.querySelector('.checkbtn');

check.addEventListener('change', () => {
  label.classList.add('bounce');
  setTimeout(() => {
    label.classList.remove('bounce');
  }, 300);
});

check.addEventListener('change', () => {
  label.style.transition = 'transform 0.5s ease';
  label.style.transform = check.checked ? 'rotate(360deg)' : 'rotate(0deg)';
});
const menu = document.querySelector('nav ul');

check.addEventListener('change', () => {
  if(check.checked) {
    menu.style.opacity = 0;
    menu.style.left = '0';
    setTimeout(() => {
      menu.style.opacity = 1;
      menu.style.transition = 'opacity 0.5s ease';
    }, 10);
  } else {
    menu.style.opacity = 0;
    setTimeout(() => {
      menu.style.left = '-100%';
    }, 500);
  }
});
check.addEventListener('change', () => {
  if('vibrate' in navigator) {
    navigator.vibrate(50); // vibrate for 50ms
  }
  
});

















