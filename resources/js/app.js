import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])
const deleteBtns = document.querySelectorAll(".delete-btn");

deleteBtns.forEach((btn) => {
    btn.addEventListener("click", (event) => {
        event.preventDefault();
        const lecterChildrenName = btn.getAttribute("data-lecter-childrenName");
        const lecterId = btn.getAttribute("data-lecter-id");
        const modal = new bootstrap.Modal(
            document.getElementById("deleteModal")
        );
        document.getElementById("modal-lecter-childrenName").innerText = lecterChildrenName;
        document.getElementById("modal-lecter-id").innerText = lecterId;
        document.getElementById("delete").addEventListener("click", () => {
            btn.parentElement.submit();
        });
        modal.show();
    });
});
