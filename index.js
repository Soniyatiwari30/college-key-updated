
// const applyBtn = document.querySelector(".apply-btn a");
// const overlay = document.querySelector(".overlay");
// const closeBtn = document.querySelector(".close-btn");

// applyBtn.addEventListener("click", (e) => {
//     e.preventDefault();
//     overlay.classList.add("active");
// });

// closeBtn.addEventListener("click", () => {
//     overlay.classList.remove("active");
// });

// // Optional: Close popup when clicking outside the form
// overlay.addEventListener("click", (e) => {
//     if (e.target === overlay) {
//         overlay.classList.remove("active");
//     }
// });

const applyButtons = document.querySelectorAll(".open-popup");
const overlay = document.querySelector(".overlay");
const closeBtn = document.querySelector(".close-btn");
const collegeTitle = document.getElementById("collegeTitle");

applyButtons.forEach(button => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        const collegeName = button.getAttribute("data-college");
        collegeTitle.textContent = collegeName;
        overlay.classList.add("active");
        const collegeId = button.getAttribute("data-dept-id");
        if(collegeId) {
            getPrograms(collegeId);
        } else {
            console.error("College ID not found");
            $('#course').html('<option value="">Choose Course</option>');
        }
    });
});

closeBtn.addEventListener("click", () => {
    overlay.classList.remove("active");
});

overlay.addEventListener("click", (e) => {
    if (e.target === overlay) {
        overlay.classList.remove("active");
    }
});


 const hamburger = document.getElementById("hamburger");
    const mobileMenu = document.getElementById("mobileMenu");
    const hamburgerIcon = document.getElementById("hamburgerIcon");

    hamburger.addEventListener("click", () => {
      mobileMenu.classList.toggle("active");
      
      const isOpen = mobileMenu.classList.contains("active");
      hamburgerIcon.querySelectorAll("rect").forEach(rect => {
        rect.setAttribute("fill", isOpen ? "#5f1d2b" : "white");
      });
    });
