document.addEventListener("DOMContentLoaded", function() {
    const mainSelect = document.getElementById("main-body-parts");
    const subSelect = document.getElementById("sub-body-parts");
    const subOptions = subSelect.querySelectorAll("option");
    function updateSubOptions() {
        const selectedGroup = mainSelect.value;
        subOptions.forEach(option => {
            option.style.display = option.getAttribute("data-group") === selectedGroup ? "block" : "none";
        });
        subSelect.value = subSelect.querySelector("option[data-group='" + selectedGroup + "']").value;
    }
    mainSelect.addEventListener("change", updateSubOptions);
    updateSubOptions();
});


// Range
function updateRangeValue(value) {
    document.getElementById('rangeValue').innerText = value + '%';
}