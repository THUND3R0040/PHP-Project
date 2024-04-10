const showForm = ()=>{
    let updateBtns = document.querySelectorAll(".edit");
    updateBtns.forEach((btn) => {
      btn.addEventListener("click", (e) => {
        let email = e.target.nextElementSibling.childNodes[3].childNodes[3].textContent;
        hidden.value = email;
        updateForm.style.display = "flex";
      })
    })
  }







  const selectDelete = ()=>{
    let deleteBtns = document.querySelectorAll(".delete");
    deleteBtns.forEach((btn) => {
      btn.addEventListener("click", (e) => {
        let id = e.target.parentElement.previousElementSibling.childNodes[3].childNodes[3].textContent;
        deleteUser(id);
      })
    })
  
  }
  


  const showSwiper = ()=>{
    const swiper = new Swiper(".mySwiper", {
      grabCursor: true,
      effect: "creative",
      creativeEffect: {
        prev: {
          shadow: true,
          translate: [0, 0, -400],
        },
        next: {
          translate: ["100%", 0, 0],
        },
      },
    });
    }
    