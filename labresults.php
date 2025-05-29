<!-- lab-results.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Lab Results - Evercare</title>
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
        <a href="labresults.php" class="flex items-center space-x-3 bg-white/20 p-2 rounded"><i class="ri-flask-line"></i><span>Lab Results</span></a>
        <a href="settings.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded"><i class="ri-settings-3-line"></i><span>Settings</span></a>
        <a href="index.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded"><i class="ri-logout-box-r-line"></i><span>Logout</span></a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <header class="mb-6">
        <h1 class="text-2xl font-bold text-primary mb-4">Lab Results</h1>
      </header>

      <!-- Lab Results Table -->
      <div class="bg-white rounded-lg shadow overflow-x-auto mb-10">
        <table class="min-w-full table-auto text-left">
          <thead class="bg-gray-100">
            <tr>
              <th class="p-3">Result ID</th>
              <th class="p-3">Patient</th>
              <th class="p-3">Date</th>
              <th class="p-3">Test Type</th>
              <th class="p-3">Result</th>
              <th class="p-3">Doctor/Nurse</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b hover:bg-gray-50 cursor-pointer">
              <td class="p-3">LAB-001</td>
              <td class="p-3">Maria Gonzales</td>
              <td class="p-3">2025-05-15</td>
              <td class="p-3">Blood Test</td>
              <td class="p-3">Normal</td>
              <td class="p-3">Dra. Orbasido</td>
            </tr>
            <tr class="hover:bg-gray-50 cursor-pointer">
              <td class="p-3">LAB-002</td>
              <td class="p-3">John Doe</td>
              <td class="p-3">2025-05-10</td>
              <td class="p-3">X-ray</td>
              <td class="p-3">Fracture Detected</td>
              <td class="p-3">Nurse Reyes</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Add Lab Result Form -->
      <section>
        <h2 class="text-xl font-semibold text-primary mb-4">Add Lab Result</h2>
        <form class="bg-white rounded-lg shadow p-6 space-y-4">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Patient Name</label>
              <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Enter patient name" required>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Date</label>
              <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Test Type</label>
              <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" placeholder="e.g., Blood Test, CT Scan" required>
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Result</label>
              <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Summary of result" required>
            </div>
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Notes</label>
            <textarea class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary" rows="3" placeholder="Optional notes"></textarea>
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Attach File</label>
            <input type="file" class="block w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:bg-primary file:text-white file:rounded-md hover:file:bg-blue-600" accept=".pdf,.jpg,.png">
          </div>
          <button type="submit" class="bg-primary text-white px-6 py-2 rounded-md hover:bg-blue-600 transition">Submit Lab Result</button>
        </form>
      </section>
    </main>
  </div>
</body>
</html>