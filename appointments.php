<!-- appointments.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Appointments - DermaHealth</title>
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
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-100 font-inter">
  <div class="flex min-h-screen">
    <aside class="w-64 bg-primary text-white p-6 space-y-6 hidden md:block">
      <div class="text-2xl font-pacifico mb-10">DermaHealth</div>
      <nav class="space-y-4">
        <a href="dashboard.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded"><i class="ri-dashboard-line"></i><span>Dashboard</span></a>
        <a href="patients.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded"><i class="ri-user-line"></i><span>Patients</span></a>
        <a href="appointments.php" class="flex items-center space-x-3 bg-white/20 p-2 rounded"><i class="ri-calendar-line"></i><span>Appointments</span></a>
        <a href="records.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded"><i class="ri-file-list-3-line"></i><span>Medical Records</span></a>
              <a href="skinhistory.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded"><i class="ri-logout-box-r-line"></i><span>Skin Condition History</span></a> 
        <a href="labresults.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded"><i class="ri-flask-line"></i><span>Lab Results</span></a>
        <a href="settings.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded"><i class="ri-settings-3-line"></i><span>Settings</span></a>
        <a href="login.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded"><i class="ri-logout-box-r-line"></i><span>Logout</span></a>
      </nav>
    </aside>

    <main class="flex-1 p-6">
      <header class="mb-6 flex flex-col md:flex-row justify-between items-center gap-4">
        <h1 class="text-3xl font-bold text-primary">Appointments</h1>
        <div class="flex flex-col md:flex-row items-center gap-3 w-full md:w-auto">
          <input type="text" placeholder="Search by patient or doctor..." class="px-4 py-2 rounded-md border border-gray-300 w-full md:w-64 focus:outline-none focus:ring-2 focus:ring-primary"/>
          <select class="px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
            <option>All</option>
            <option>Confirmed</option>
            <option>Pending</option>
          </select>
        </div>
      </header>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white border-l-4 border-green-500 rounded-lg shadow p-6 hover:shadow-lg transition cursor-pointer">
          <h3 class="font-semibold text-lg text-gray-700 mb-2">Dra. Orbasido</h3>
          <p><strong>Patient:</strong> Maria Gonzales</p>
          <p><strong>Date:</strong> 2025-05-14</p>
          <p><strong>Time:</strong> 9:00 AM</p>
          <p class="text-green-600 mt-2 flex items-center gap-1"><i class="ri-checkbox-circle-line"></i> Confirmed</p>
        </div>

        <div class="bg-white border-l-4 border-yellow-500 rounded-lg shadow p-6 hover:shadow-lg transition cursor-pointer">
          <h3 class="font-semibold text-lg text-gray-700 mb-2">Dra. Dulay</h3>
          <p><strong>Patient:</strong> John Doe</p>
          <p><strong>Date:</strong> 2025-05-15</p>
          <p><strong>Time:</strong> 1:00 PM</p>
          <p class="text-yellow-600 mt-2 flex items-center gap-1"><i class="ri-time-line"></i> Pending</p>
        </div>

        <div class="bg-white border-l-4 border-yellow-500 rounded-lg shadow p-6 hover:shadow-lg transition cursor-pointer">
          <h3 class="font-semibold text-lg text-gray-700 mb-2">Dra. Bantog</h3>
          <p><strong>Patient:</strong> Ava Smith</p>
          <p><strong>Date:</strong> 2025-05-16</p>
          <p><strong>Time:</strong> 5:00 PM</p>
          <p class="text-yellow-600 mt-2 flex items-center gap-1"><i class="ri-time-line"></i> Pending</p>
        </div>
      </div>
    </main>
  </div>
</body>
</html>