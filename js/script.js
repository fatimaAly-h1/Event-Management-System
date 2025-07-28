function validateRegisterForm() {
  const name = document.getElementById("name").value.trim();
  const email = document.getElementById("email").value.trim();
  const password = document.getElementById("password").value;

  // Simple checks
  if (name === "" || email === "" || password === "") {
    alert("All fields are required.");
    return false;
  }

  // Email format check
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email)) {
    alert("Please enter a valid email address.");
    return false;
  }

  // Password length
  if (password.length < 6) {
    alert("Password must be at least 6 characters long.");
    return false;
  }

  return true; // allow form to submit
}

function togglePassword() {
  var passInput = document.getElementById("password");
  if (passInput.type === "password") {
    passInput.type = "text";
  } else {
    passInput.type = "password";
  }
}