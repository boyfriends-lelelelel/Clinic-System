<!-- settings.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Settings - Evercare</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: { primary: '#4461F2' },
          fontFamily: { pacifico: ['Pacifico', 'cursive'], inter: ['Inter', 'sans-serif'] }
        }
      }
    };
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css"/>
</head>
<body class="bg-gray-100 font-inter">
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-primary text-white p-6 space-y-6 hidden md:block">
      <div class="text-2xl font-pacifico mb-10">Evercare</div>
      <nav class="space-y-4">
        <a href="dashboard.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded"><i class="ri-dashboard-line"></i><span>Dashboard</span></a>
        <a href="patients.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded"><i class="ri-user-line"></i><span>Patients</span></a>
        <a href="appointments.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded"><i class="ri-calendar-line"></i><span>Appointments</span></a>
        <a href="records.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded"><i class="ri-file-list-3-line"></i><span>Records</span></a>
        <a href="labresults.php" class="flex items-center space-x-3 bg-white/20 p-2 rounded"><i class="ri-file-list-3-line"></i><span>Lab Results</span></a>
        <a href="settings.php" class="flex items-center space-x-3 bg-white/20 p-2 rounded"><i class="ri-settings-3-line"></i><span>Settings</span></a>
        <a href="index.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded"><i class="ri-logout-box-r-line"></i><span>Logout</span></a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <header class="mb-6">
        <h1 class="text-2xl font-bold text-primary">Settings</h1>
      </header>

      <!-- Success Alert -->
      <div id="successMsg" class="hidden mb-4 bg-green-100 border border-green-300 text-green-800 px-4 py-2 rounded">
        ✅ Profile updated successfully!
      </div>

      <!-- Settings Form -->
      <div class="bg-white p-6 rounded-lg shadow space-y-6 max-w-2xl">
        <!-- Profile Picture -->
        <div>
          <label class="block mb-1 font-semibold text-gray-700">Profile Picture</label>
          <input type="file" accept="image/*" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:bg-primary file:text-white hover:file:bg-primary/90"/>
        </div>

        <!-- Full Name -->
        <div>
          <label class="block mb-1 font-semibold text-gray-700">Full Name</label>
          <input type="text" value="Dr. Torres" class="w-full px-4 py-2 border rounded focus:ring-primary/50 focus:outline-none"/>
        </div>

        <!-- Email -->
        <div>
          <label class="block mb-1 font-semibold text-gray-700">Email Address</label>
          <input type="email" value="dr.torres@evercare.com" class="w-full px-4 py-2 border rounded focus:ring-primary/50 focus:outline-none"/>
        </div>

        <!-- Phone -->
        <div>
          <label class="block mb-1 font-semibold text-gray-700">Phone Number</label>
          <input type="tel" placeholder="09XXXXXXXXX" class="w-full px-4 py-2 border rounded focus:ring-primary/50 focus:outline-none"/>
        </div>

        <!-- Specialization -->
        <div>
          <label class="block mb-1 font-semibold text-gray-700">Specialization</label>
          <input type="text" placeholder="e.g. Cardiologist" class="w-full px-4 py-2 border rounded focus:ring-primary/50 focus:outline-none"/>
        </div>

        <!-- Password -->
        <div>
          <label class="block mb-1 font-semibold text-gray-700">New Password</label>
          <div class="relative">
            <input id="password" type="password" placeholder="••••••••" class="w-full px-4 py-2 border rounded focus:ring-primary/50 focus:outline-none pr-10"/>
            <button type="button" onclick="togglePassword()" class="absolute right-2 top-2 text-gray-400 hover:text-primary"><i id="eyeIcon" class="ri-eye-off-line text-xl"></i></button>
          </div>
        </div>

        <!-- Confirm Password -->
        <div>
          <label class="block mb-1 font-semibold text-gray-700">Confirm Password</label>
          <input type="password" placeholder="••••••••" class="w-full px-4 py-2 border rounded focus:ring-primary/50 focus:outline-none"/>
        </div>

        <!-- Submit Button -->
        <div>
          <button onclick="showSuccess()" class="bg-primary text-white px-6 py-2 rounded hover:bg-primary/90">Update Profile</button>
        </div>
      </div>
    </main>
  </div>

  <script>
    function togglePassword() {
      const input = document.getElementById("password");
      const icon = document.getElementById("eyeIcon");
      if (input.type === "password") {
        input.type = "text";
        icon.className = "ri-eye-line text-xl";
      } else {
        input.type = "password";
        icon.className = "ri-eye-off-line text-xl";
      }
    }

    function showSuccess() {
      const msg = document.getElementById("successMsg");
      msg.classList.remove("hidden");
      setTimeout(() => msg.classList.add("hidden"), 3000);
    }
  </script>
</body>
</html>