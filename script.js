const container = document.querySelector(".container"),
  pwShowHide = document.querySelectorAll(".showHidePw"),
  pwFields = document.querySelectorAll(".password"),
  signUp = document.querySelector(".signup-link"),
  login = document.querySelector(".login-link");

// js code to show/hide password and change icon
pwShowHide.forEach((eyeIcon) => {
  eyeIcon.addEventListener("click", () => {
    pwFields.forEach((pwField) => {
      if (pwField.type === "password") {
        pwField.type = "text";

        pwShowHide.forEach((icon) => {
          icon.classList.replace("uil-eye-slash", "uil-eye");
        });
      } else {
        pwField.type = "password";

        pwShowHide.forEach((icon) => {
          icon.classList.replace("uil-eye", "uil-eye-slash");
        });
      }
    });
  });
});

// js code to appear signup and login form
signUp.addEventListener("click", (e) => {
  e.preventDefault();
  container.classList.add("active");
});

login.addEventListener("click", (e) => {
  e.preventDefault();
  container.classList.remove("active");
});




// for room js 
document.addEventListener('DOMContentLoaded', function() {
    const openRoomPicker = document.getElementById('openRoomPicker');
    const roomPickerModal = document.getElementById('roomPickerModal');
    const closeModal = document.getElementById('closeModal');

    // Open the modal
    openRoomPicker.addEventListener('click', function() {
        roomPickerModal.style.display = 'flex'; // Use flex to center
    });

    // Close the modal
    closeModal.addEventListener('click', function() {
        roomPickerModal.style.display = 'none';
    });

    // Close the modal when clicking outside of it
    window.addEventListener('click', function(event) {
        if (event.target === roomPickerModal) {
            roomPickerModal.style.display = 'none';
        }
    });
});

function selectRoom(roomName, price) {
    alert(`You have selected ${roomName} for ₱${price}/night.`);
    // Additional logic for room selection can be added here
}




