<?php
  include 'connect.php';
?>



  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - DermaHealth Clinic</title>
  <script src="https://cdn.tailwindcss.com/3.4.16"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#4461F2',
            secondary: ''
          },
          borderRadius: {
            'none': '0px',
            'sm': '4px',
            DEFAULT: '8px',
            'md': '12px',
            'lg': '16px',
            'xl': '20px',
            '2xl': '24px',
            '3xl': '32px',
            'full': '9999px',
            'button': '8px'
          }
        }
      }
    };
  </script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">
  <div class="w-full max-w-6xl bg-white rounded-lg shadow-lg overflow-hidden flex flex-col md:flex-row">
    <div class="w-full md:w-1/2 bg-primary p-8 text-white flex flex-col justify-center relative">
      <div class="absolute top-8 left-8">
        <div class="text-2xl font-['Pacifico'] text-white">DermaHealth</div>
      </div>
      <div class="border-l-2 border-white pl-6 py-2 mt-20">
        <h1 class="text-2xl md:text-3xl font-bold mb-2">Welcome to 
          <span class="text-3xl md:text-4xl block mt-1">DermaHealth</span>
        </h1>
        <h2 class="text-xl md:text-2xl font-medium mb-4">Clinic Management & Medical Records System</h2>
        <p class="text-white/80 mb-6">Streamline your clinic operations with our integrated appointment and medical records platform. Secure, efficient, and user-friendly solution for healthcare providers.</p>
      </div>
      <div class="mt-8">
        <div class="flex flex-col space-y-4">
          <div class="flex items-center">
            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-white/20 mr-4">
              <i class="ri-calendar-check-line text-white ri-lg"></i>
            </div>
            <span>Appointment Scheduling</span>
          </div>
          <div class="flex items-center">
            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-white/20 mr-4">
              <i class="ri-file-list-3-line text-white ri-lg"></i>
            </div>
            <span>Electronic Medical Records</span>
          </div>
          <div class="flex items-center">
            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-white/20 mr-4">
              <i class="ri-user-heart-line text-white ri-lg"></i>
            </div>
            <span>Patient Management</span>
          </div>
        </div>
      </div>
    </div>

    <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
      <div class="mb-8 flex justify-center md:justify-start">
        <div class="w-10 h-10 flex items-center justify-center rounded-full bg-primary mr-2">
          <i class="ri-heart-pulse-line text-white"></i>
        </div>
        <div class="text-xl font-['Pacifico'] text-primary">DermaHealth</div>
      </div>
      <h2 class="text-2xl font-bold text-gray-800 mb-2">Login</h2>
      <p class="text-gray-600 mb-6">Enter your credentials to access your account</p>
      <form action="register.php" method="POST" id="loginForm">
        <div class="mb-4">
          <label for="email" class="block text-gray-700 mb-2">Email</label>
          <input type="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary" placeholder="doctor@evercare.com" required>
        </div>
        <div class="mb-4 relative">
          <label for="password" class="block text-gray-700 mb-2">Password</label>
          <div class="relative">
            <input type="password" id="password" class="password-input w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary" placeholder="••••••••••••" required>
            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
              <i class="ri-eye-line text-gray-400 text-lg cursor-pointer" id="togglePassword"></i>
            </div>
          </div>
        </div>

        <div class="mb-4">
          <label for="role" class="block text-gray-700 mb-2">Select Role</label>
          <select id="role" class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary" required>
            <option value="">-- Select Role --</option>
            <option value="doctor">Doctor</option>
            <option value="staff">Staff</option> 
             <option value="patient">Patient</option>
          </select>
        </div>

        <div class="flex justify-between items-center mb-6">
          <div class="flex items-center">
            <input type="checkbox" id="remember" class="hidden">
            <label for="remember" class="flex items-center cursor-pointer">
            </label>
          </div>
        </div>

        <button type="submit" class="w-full bg-primary text-white py-3 rounded-button font-medium hover:bg-primary/90 transition-colors whitespace-nowrap">Sign In</button>

        <div class="mt-6 text-center">
          <p class="text-gray-600">Don't have an account? <a href="signup.php" class="text-primary hover:underline">Sign Up</a></p>
        </div>
      </form>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const togglePassword = document.getElementById('togglePassword');
      const password = document.getElementById('password');
      togglePassword.addEventListener('click', function () {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        if (type === 'text') {
          togglePassword.classList.remove('ri-eye-line');
          togglePassword.classList.add('ri-eye-off-line');
        } else {
          togglePassword.classList.remove('ri-eye-off-line');
          togglePassword.classList.add('ri-eye-line');
        }
      });
    });

    document.addEventListener('DOMContentLoaded', function () {
      const checkbox = document.getElementById('remember');
      const checkboxDisplay = document.getElementById('checkbox-display');
      const checkIcon = document.getElementById('check-icon');
      checkboxDisplay.addEventListener('click', function () {
        checkbox.checked = !checkbox.checked;
        if (checkbox.checked) {
          checkboxDisplay.classList.add('bg-primary');
          checkboxDisplay.classList.remove('border-gray-300');
          checkIcon.classList.remove('hidden');
        } else {
          checkboxDisplay.classList.remove('bg-primary');
          checkboxDisplay.classList.add('border-gray-300');
          checkIcon.classList.add('hidden');
        }
      });
    });

    // ✅ Role-based redirection on login
    document.getElementById('loginForm').addEventListener('submit', function (e) {
      e.preventDefault();
      const role = document.getElementById('role').value;
      if (role === 'doctor') {
        window.location.href = 'dashdoctor.php'; // Assuming doctors go to dashboard too
      } else if (role === 'staff') {
        window.location.href = 'dashstaff.php'; 
        } else if (role === 'patient') {
        window.location.href = 'dashpatient.php';
      } else {
        alert('Please select a role.');
      }
    });
  </script>
</body>
</html>
