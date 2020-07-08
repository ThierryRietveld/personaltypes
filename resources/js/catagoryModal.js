$(function() {
    const modalContainer = document.querySelector(".m-catagory--modal");
    const modals = document.querySelectorAll(".m-catagory--modal__modal");
    const buttons = document.querySelectorAll(".m-catagory__info");
    const closeButtons = document.querySelectorAll(".close-modal");

    buttons.forEach((button) => {
        button.addEventListener("click", () => {
            modalContainer.style.display = "block";
            let typeId = button.getAttribute("data-modal");

            modals.forEach((modal) => {
                if(modal.getAttribute("data-modal") == typeId) {
                    modal.style.display = "flex";
                }
            })
            
        })
    })

    closeButtons.forEach((closeButton) => {
        closeButton.addEventListener("click", closeModal);
    })
    
    modalContainer.addEventListener("click", (e) => {
        if(e.target !== e.currentTarget) return;
        closeModal();
    })

    function closeModal() {
        modalContainer.style.display = "none"
        modals.forEach((modal) => {
            modal.style.display = "none";
        })
    }
});