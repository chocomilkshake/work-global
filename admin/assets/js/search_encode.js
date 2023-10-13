document.addEventListener("DOMContentLoaded", function () {
    const nameFilter = document.getElementById("nameFilter");
    const tableBody = document.querySelector(".application-table tbody");

    nameFilter.addEventListener("input", function () {
        const filterText = nameFilter.value.toLowerCase();

        for (const row of tableBody.rows) {
            const nameColumn = row.cells[1].textContent.toLowerCase();

            if (nameColumn.includes(filterText)) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        }
    });
});
