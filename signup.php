<?php 
  include 'connect.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up - Evercare</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: { primary: '#4461F2' },
          borderRadius: {
            button: '8px'
          },
          fontFamily: {
            pacifico: ['Pacifico', 'cursive'],
            inter: ['Inter', 'sans-serif']
          }
        }
      }
    };
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
    .password-input {
      padding-right: 40px;
    }
  </style>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">
  <div class="w-full max-w-6xl bg-white rounded-lg shadow-lg overflow-hidden flex flex-col md:flex-row">
    
    <!-- Left Panel -->
    <div class="w-full md:w-1/2 bg-primary p-8 text-white flex flex-col justify-center relative">
      <div class="absolute top-8 left-8">
        <div class="text-2xl font-pacifico text-white">Evercare</div>
      </div>
      <div class="border-l-2 border-white pl-6 py-2 mt-20">
        <h1 class="text-2xl md:text-3xl font-bold mb-2">Join <span class="text-3xl md:text-4xl block mt-1">Evercare Clinic</span></h1>
        <h2 class="text-xl md:text-2xl font-medium mb-4">Create Your Account</h2>
        <p class="text-white/80 mb-6">Register to manage patients, appointments, and records efficiently with our healthcare system.</p>
      </div>
    </div>

    <!-- Right Panel -->
    <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
      <div class="mb-8 flex justify-center md:justify-start">
        <div class="w-10 h-10 flex items-center justify-center rounded-full bg-primary mr-2">
          <i class="ri-user-add-line text-white"></i>
        </div>
        <div class="text-xl font-pacifico text-primary">Evercare</div>
      </div>

      <h2 class="text-2xl font-bold text-gray-800 mb-2">Sign Up</h2>
      <p class="text-gray-600 mb-6">Fill in the details below to create your account</p>

      <form action="register.php" method="POST" id="signupForm">
        <div class="mb-4">
          <label for="fullname" class="block text-gray-700 mb-2">Full Name</label>
          <input type="text" id="fullname" class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary" placeholder="John Doe" required>
        </div>
        <div class="mb-4">
          <label for="email" class="block text-gray-700 mb-2">Email</label>
          <input type="email" name="email" id="email" class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary" placeholder="you@example.com" required>
        </div>

        <!-- Role Selection -->
        <div class="mb-4">
          <label for="role" class="block text-gray-700 mb-2">Select Role</label>
          <select id="role" class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary" required>
            <option value="" disabled selected>Select your role</option>
            <option value="doctor">Doctor</option>
            <option value="staff">Staff</option>
            <option value="patient">Patient</option>
          </select>
        </div>

        <div class="mb-4 relative">
          <label for="password" class="block text-gray-700 mb-2">Password</label>
          <div class="relative">
            <input type="password" name="password" id="password" class="password-input w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary" placeholder="••••••••••••" required>
            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
              <i class="ri-eye-line text-gray-400 text-lg cursor-pointer" id="togglePassword"></i>
            </div>
          </div>
        </div>
        <div class="mb-4 relative">
          <label for="confirmPassword" class="block text-gray-700 mb-2">Confirm Password</label>
          <div class="relative">
            <input type="password" id="confirmPassword" class="password-input w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary" placeholder="••••••••••••" required>
          </div>
        </div>
        <div class="flex items-center mb-6">
          <input type="checkbox" id="terms" class="mr-2">
          <label for="terms" class="text-gray-700 text-sm">I agree to the <a href="#" class="text-primary hover:underline">terms and conditions</a></label>
        </div>
        <button type="submit" class="w-full bg-primary text-white py-3 rounded-button font-medium hover:bg-primary/90 transition-colors whitespace-nowrap" name="create">Create Account</button>
        <div class="mt-6 text-center">
          <p class="text-gray-600">Already have an account? <a href="index.php" class="text-primary hover:underline">Sign In</a></p>
        </div>
      </form>
    </div>
  </div>

  <script>
    // Password toggle
    document.getElementById('togglePassword').addEventListener('click', function () {
      const password = document.getElementById('password');
      const type = password.type === 'password' ? 'text' : 'password';
      password.type = type;
      this.classList.toggle('ri-eye-line');
      this.classList.toggle('ri-eye-off-line');
    });
  </script>
</body>
</html>
