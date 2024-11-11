document.addEventListener("DOMContentLoaded", function () {
  const filters = document.querySelectorAll(".filter");
  const items = document.querySelectorAll(".new");

  filters.forEach(filter => {
    filter.addEventListener("click", function () {
      const filterValue = this.getAttribute("data-filter");

      filters.forEach(f => f.classList.remove("active"));
      this.classList.add("active");

      items.forEach(item => {
        if (filterValue === "all") {
          item.style.display = "flex";
        } else {
          if (item.getAttribute("data-category") === filterValue) {
            item.style.display = "flex";
          } else {
            item.style.display = "none";
          }
        }
      });
    });
  });
});
