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


let homeMedia = document.getElementById('homeMedia');
if (homeMedia) {
  homeMedia.addEventListener('click', () => {
    homeMedia.classList.toggle('active');
  })

  if (window.innerWidth <= 421) {
    homeMedia.addEventListener('mouseleave', () => {
      homeMedia.classList.remove('active');
    })
  }
}

document.addEventListener('DOMContentLoaded', function () {
  var menuIcon = document.querySelector('.menu-icon');
  var closeIcon = document.querySelector('.close-icon');
  var menuItems = document.querySelector('.menu-items');
  menuIcon.addEventListener('click', function () {
    menuItems.style.display = 'block';
    menuIcon.style.display = 'none';
    closeIcon.style.display = 'block';
  });
  closeIcon.addEventListener('click', function () {
    menuItems.style.display = 'none';
    menuIcon.style.display = 'block';
    closeIcon.style.display = 'none';
  });

  document.addEventListener('click', function (event) {
    if ((!menuIcon.contains(event.target) && !menuItems.contains(event.target) && !closeIcon.contains(event.target))) {
      menuItems.style.display = 'none';
      menuIcon.style.display = 'block';
      closeIcon.style.display = 'none';
    }
  });
});

let goTop = document.querySelector(".goTop");
let footer = document.querySelector("footer");

goTop.addEventListener("click", () => {
  window.scrollTo(0, 0);
});

window.addEventListener("scroll", () => {
  if (window.scrollY >= 400) {
    goTop.style.display = "block";
  } else {
    goTop.style.display = "none";
  }
  if (window.scrollY >= footer.offsetTop - 600) {
    if (homeMedia && goTop) {
      goTop.style.display = "none";
      homeMedia.style.display = "none";
    }
  } else {
    if (homeMedia && goTop) {
      goTop.style.display = "block";
      homeMedia.style.display = "flex";
    }
  }
});


document.addEventListener("DOMContentLoaded", function () {
  const allLink = document.getElementById('all');
  const soldProject = document.getElementById('sold');
  const availableProject = document.getElementById('available');
  const projects = document.querySelectorAll('.projects');

  function hideAllProjects() {
    projects.forEach(function (project) {
      project.style.display = 'none';
    });
  }
  allLink.addEventListener('click', function () {
    hideAllProjects();
    projects.forEach(function (project) {
      project.style.display = 'block';
    });
    document.querySelector('.catu ul .active').classList.remove('active');
    this.parentElement.classList.add('active');
  });

  soldProject.addEventListener('click', function () {
    hideAllProjects();
    document.querySelectorAll('.sold').forEach(function (project) {
      project.style.display = 'block';
    });
    document.querySelector('.catu ul .active').classList.remove('active');
    this.parentElement.classList.add('active');
  });

  availableProject.addEventListener('click', function () {
    hideAllProjects();
    document.querySelectorAll('.available').forEach(function (project) {
      project.style.display = 'block';
    });
    document.querySelector('.catu ul .active').classList.remove('active');
    this.parentElement.classList.add('active');
  });
});



