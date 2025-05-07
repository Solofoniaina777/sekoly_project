function setColumnWidths(tableId, widths) {
    const table = document.getElementById(tableId);
    if (!table) return;

    const headerCells = table.querySelectorAll("thead tr th");
    const bodyRows = table.querySelectorAll("tbody tr");

    widths.forEach((width, index) => {
      if (headerCells[index]) {
        headerCells[index].style.width = width;
      }

      bodyRows.forEach(row => {
        const cell = row.children[index];
        if (cell) cell.style.width = width;
      });
    });
  }


