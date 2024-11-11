document.addEventListener("DOMContentLoaded", function () {
    const filters = document.querySelectorAll(".filter");
    const items = document.querySelectorAll(".doctor");

    filters.forEach(filter => {
        filter.addEventListener("click", function () {
            const filterValue = this.getAttribute("data-filter");

            filters.forEach(f => f.classList.remove("active"));
            this.classList.add("active");

            items.forEach(item => {
                const itemCategory = item.querySelector(".doc").getAttribute("data-category");
                if (filterValue === "all") {
                    item.style.display = "block";
                } else {
                    if (itemCategory === filterValue) {
                        item.style.display = "block";
                    } else {
                        item.style.display = "none";
                    }
                }
            });
        });
    });
});