// replaces events table with updated events
function populateEventsTable(events, startIndex, endIndex) {
    const table_body = document.getElementById("events_table_body");
    table_body.innerHTML = '';
    for (let index = startIndex; index < endIndex; index++) {
        const row = document.createElement("tr");
        colHeaders.forEach(function (header) {
            const col = document.createElement("td");
            col.innerHTML = events[index][header];
            row.appendChild(col);
        });
        table_body.appendChild(row);
    }
}

// update page chooser
function updateEntriesPerPage() {
    const entries_per_page = document.getElementById("entries_per_page").value;
    const page_chooser = document.getElementById("events_page_chooser");
    page_chooser.innerHTML = "";
    const num_pages = Math.ceil(events.length / entries_per_page);
    for (let index = 0; index < num_pages; index++) {
        const page_link = document.createElement("a");
        const startIndex = index * entries_per_page;
        const endIndex = Math.min((index + 1) * entries_per_page, events.length);
        page_link.onclick = function () { page = index; populateEventsTable(events, startIndex, endIndex); };
        page_link.setAttribute("href", "#");
        page_link.innerHTML = index + 1;
        page_chooser.appendChild(page_link);
    }
    page = 0;
    populateEventsTable(events, 0, Math.min(entries_per_page, events.length));
}