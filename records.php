<!-- records.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Medical Records - Evercare</title>
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
        <a href="records.php" class="flex items-center space-x-3 bg-white/20 p-2 rounded"><i class="ri-file-list-3-line"></i><span>Records</span></a>
        <a href="labresults.php" class="flex items-center space-x-3 bg-white/20 p-2 rounded"><i class="ri-file-list-3-line"></i><span>Lab Results</span></a>
        <a href="settings.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded"><i class="ri-settings-3-line"></i><span>Settings</span></a>
        <a href="index.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded"><i class="ri-logout-box-r-line"></i><span>Logout</span></a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <header class="mb-6">
        <h1 class="text-2xl font-bold text-primary mb-4">Medical Records</h1>

        <!-- Filters and Search -->
        <div class="flex flex-wrap gap-4 mb-4">
          <input type="text" placeholder="Search patient, diagnosis..." class="px-4 py-2 border border-gray-300 rounded-md flex-1 min-w-[200px] focus:outline-none focus:ring-2 focus:ring-primary">
          
          <select class="px-4 py-2 border border-gray-300 rounded-md min-w-[150px]">
            <option value="">All Doctors</option>
            <option value="Dra. Orbasido">Dra. Orbasido</option>
            <option value="Dra. Dulay">Dra. Dulay</option>
            <option value="Dra. Bantog">Dra. Bantog</option>
          </select>

          <select class="px-4 py-2 border border-gray-300 rounded-md min-w-[150px]">
            <option value="">All Diagnoses</option>
            <option value="Hypertension">Hypertension</option>
            <option value="Diabetes">Diabetes</option>
            <option value="Asthma">Asthma</option>
          </select>
        </div>
      </header>

      <!-- Records Table -->
      <div class="bg-white rounded-lg shadow overflow-x-auto">
        <table class="min-w-full table-auto text-left">
          <thead class="bg-gray-100">
            <tr>
              <th class="p-3">Record ID</th>
              <th class="p-3">Patient</th>
              <th class="p-3">Date</th>
              <th class="p-3">Diagnosis</th>
              <th class="p-3">Doctor</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b hover:bg-gray-50 cursor-pointer">
              <td class="p-3">REC-001</td>
              <td class="p-3">Maria Gonzales</td>
              <td class="p-3">2025-05-12</td>
              <td class="p-3">
                <span class="bg-red-100 text-red-700 px-2 py-1 rounded-full text-sm">Hypertension</span>
              </td>
              <td class="p-3">Dra. Orbasido</td>
            </tr>
            <tr class="border-b hover:bg-gray-50 cursor-pointer">
              <td class="p-3">REC-002</td>
              <td class="p-3">John Doe</td>
              <td class="p-3">2025-05-10</td>
              <td class="p-3">
                <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded-full text-sm">Diabetes</span>
              </td>
              <td class="p-3">Dra. Dulay</td>
            </tr>
            <tr class="hover:bg-gray-50 cursor-pointer">
              <td class="p-3">REC-003</td>
              <td class="p-3">Ava Smith</td>
              <td class="p-3">2025-05-01</td>
              <td class="p-3">
                <span class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-sm">Asthma</span>
              </td>
              <td class="p-3">Dra. Bantog</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</body>
</html>