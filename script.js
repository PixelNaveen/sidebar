document.addEventListener("DOMContentLoaded", () => {
  const sidebarLinks = document.querySelectorAll(".sidebar-link");
  const bottomLinks = document.querySelectorAll(".bottom-link");
  const themeToggleBtn = document.getElementById("theme-toggle");
  const iconMoon = document.getElementById("icon-moon");
  const iconSun = document.getElementById("icon-sun");

  function setTheme(isDark) {
    document.body.classList.toggle("dark-theme", isDark);
    iconMoon.style.display = isDark ? "none" : "block";
    iconSun.style.display = isDark ? "block" : "none";
    localStorage.setItem("theme", isDark ? "dark" : "light");
  }

  // Initialize theme from localStorage
  const savedTheme = localStorage.getItem("theme");
  setTheme(savedTheme === "dark");

  themeToggleBtn.addEventListener("click", () => {
    const isDark = !document.body.classList.contains("dark-theme");
    setTheme(isDark);
  });

  document.addEventListener("DOMContentLoaded", () => {
    // ...existing JS...

    // Optional: Dropdown auto-close on click (helps on mobile and touch devices)
    document
      .querySelectorAll(".dropdown-menu .dropdown-item")
      .forEach((item) => {
        item.addEventListener("click", function () {
          const dropdown = this.closest(".dropdown");
          if (dropdown) {
            dropdown.classList.remove("show");
            dropdown.querySelector(".dropdown-menu").classList.remove("show");
          }
        });
      });
  });

  // Navigation active states
  function clearActive(links) {
    links.forEach((link) => link.classList.remove("active"));
  }

  sidebarLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      clearActive(sidebarLinks);
      clearActive(bottomLinks);
      link.classList.add("active");

      const text = link.textContent.trim().toLowerCase();
      bottomLinks.forEach((bLink) => {
        if (bLink.textContent.trim().toLowerCase() === text) {
          bLink.classList.add("active");
        }
      });
    });
  });

  bottomLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      clearActive(bottomLinks);
      clearActive(sidebarLinks);
      link.classList.add("active");

      const text = link.textContent.trim().toLowerCase();
      sidebarLinks.forEach((sLink) => {
        if (sLink.textContent.trim().toLowerCase() === text) {
          sLink.classList.add("active");
        }
      });
    });
  });
});
