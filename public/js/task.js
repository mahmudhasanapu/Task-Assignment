let taskIndex = 1;

function addRow() {
    let container = document.getElementById("taskRepeater");
    let row = document.createElement("div");
    row.classList.add("taskRow", "row", "animate__animated", "animate__fadeIn"); // Add animation class
    row.innerHTML = `
        <div class="col-md-4 mb-2">
            <input type="text" name="tasks[${taskIndex}][title]" class="form-control" placeholder="Task Title" required>
        </div>
        <div class="col-md-4 mb-2">
            <input type="text" name="tasks[${taskIndex}][description]" class="form-control" placeholder="Description">
        </div>
        <div class="col-md-3 mb-2">
            <select name="tasks[${taskIndex}][status]" class="form-select">
                <option value="pending">Pending</option>
                <option value="in_progress">In Progress</option>
                <option value="completed">Completed</option>
            </select>
        </div>
    `;
    container.appendChild(row);
    taskIndex++;
}

document.getElementById("taskForm").addEventListener("submit", async function(e) {
    e.preventDefault();
    const formData = new FormData(this);

    const response = await fetch("/api/tasks/multiple", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
        },
        body: formData
    });

    const result = await response.json();
    // Show Bootstrap toast for success
    if (result.success || response.ok) {
        document.getElementById("toastMessage").innerText = result.message || "Tasks saved successfully!";
        const toastEl = document.getElementById("successToast");
        const toast = new bootstrap.Toast(toastEl);
        toast.show();
    }
    // Hide old response
    document.getElementById("response").innerText = "";
});
