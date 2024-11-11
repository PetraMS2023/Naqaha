let links = document.querySelectorAll('.link')


links.forEach((e) => {
  e.addEventListener('click', () => {
    links.forEach((e) => { e.classList.remove('active') })
    e.classList.add('active')
  })
})

let drop = document.querySelectorAll('.drop');

drop.forEach((e) => {
  e.addEventListener('click', () => {
    e.classList.toggle('active');
  })
})


document.addEventListener("DOMContentLoaded", function() {
  let goTop = document.querySelector(".goTop");
  let footer = document.querySelector("footer");
  let homeMedia = document.querySelector(".homeMedia");

  goTop.addEventListener("click", () => {
    window.scrollTo(0, 0);
  });

  window.addEventListener("scroll", () => {
    if (window.scrollY >= 400) {
      goTop.style.display = "block";
    } else {
      goTop.style.display = "none";
    }
    if (footer && window.scrollY >= footer.offsetTop - 600) {
      if (homeMedia) {
        goTop.style.display = "none";
        homeMedia.style.display = "none";
      }
    } else {
      if (homeMedia) {
        goTop.style.display = "flex";
        homeMedia.style.display = "flex";
      }
    }
  });
});



function toggleMenu() {
  var close = document.getElementById("closeicon");
  var menuItems = document.getElementById("menuItems");
  if (menuItems.style.display === "none" || menuItems.style.display === "") {
      menuItems.style.display = "block";
      close.style.display = "block";
  } else {
      menuItems.style.display = "none";
      close.style.display = "none";
  }
}

// Start Faqs
let faqs = document.querySelectorAll(".faq");

faqs.forEach((e) => {
  e.addEventListener("click", () => {
    faqs.forEach((el) => {
      el !== e ? el.classList.remove("active") : "";
    });
    e.classList.toggle('active');
  });
});

// End Faqs


// Input

document.getElementById('fileInput').addEventListener('change', function(event) {
  const files = event.target.files;
  const prImgs = document.getElementById('prImgs');

  for (let i = 0; i < files.length; i++) {
      const file = files[i];
      const reader = new FileReader();

      reader.onload = function(e) {
          const div = document.createElement('div');
          div.className = 'pImg oneImg';

          const img = document.createElement('img');
          img.src = e.target.result;
          img.alt = file.name;

          const icon = document.createElement('i');
          icon.className = 'fa fa-trash-can';
          icon.setAttribute('data-name', file.name);
          icon.onclick = function() {
              removeImg(div);
          };

          div.appendChild(img);
          div.appendChild(icon);
          prImgs.appendChild(div);
      };

      reader.readAsDataURL(file);
  }
});

function removeImg(element) {
  element.remove();
}



// 
function toggleMenu() {
  var close = document.getElementById("closeicon");
  var menuItems = document.getElementById("menuItems");
  if (menuItems.style.display === "none" || menuItems.style.display === "") {
      menuItems.style.display = "block";
      close.style.display = "block";
  } else {
      menuItems.style.display = "none";
      close.style.display = "none";
  }
}
