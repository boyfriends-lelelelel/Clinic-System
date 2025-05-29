<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Patients - Evercare</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: { primary: '#4461F2' },
          fontFamily: {
            pacifico: ['Pacifico', 'cursive'],
            inter: ['Inter', 'sans-serif']
          },
          borderRadius: {
            button: '8px'
          }
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
      <nav class="space-y-3">
        <a href="dashboard.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded">
          <i class="ri-dashboard-line"></i><span>Dashboard</span>
        </a>
        <a href="patients.php" class="flex items-center space-x-3 bg-white/20 p-2 rounded">
          <i class="ri-user-line"></i><span>Patients</span>
        </a>
        <a href="appointments.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded">
          <i class="ri-calendar-line"></i><span>Appointments</span>
        </a>
        <a href="records.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded">
          <i class="ri-file-list-3-line"></i><span>Records</span>
        </a>
        <a href="labresults.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded">
          <i class="ri-file-list-3-line"></i><span>Lab Results</span>
        </a>
        <a href="settings.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded">
          <i class="ri-settings-3-line"></i><span>Settings</span>
        </a>
        <a href="index.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded">
          <i class="ri-logout-box-r-line"></i><span>Logout</span>
        </a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <!-- Page Header -->
      <header class="mb-6">
        <h1 class="text-3xl font-bold text-primary">Patients</h1>
        <p class="text-gray-600 mt-1">View and manage patient information.</p>
      </header>

      <!-- Search -->
      <div class="mb-4">
        <input 
          type="text" 
          placeholder="Search patients..." 
          class="w-full max-w-sm p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"
        />
      </div>

      <!-- Table -->
      <div class="bg-white rounded-lg shadow p-6 overflow-x-auto">
        <table class="min-w-full table-auto text-left border-separate border-spacing-y-2">
          <thead class="text-sm text-gray-700 bg-gray-100">
            <tr>
              <th scope="col" class="p-3">#</th>
              <th scope="col" class="p-3">Full Name</th>
              <th scope="col" class="p-3">Age</th>
              <th scope="col" class="p-3">Gender</th>
              <th scope="col" class="p-3">Last Visit</th>
              <th scope="col" class="p-3">Status</th>
              <th scope="col" class="p-3">Actions</th>
            </tr>
          </thead>
          <tbody class="text-sm text-gray-700">
            <!-- Row 1 -->
            <tr class="bg-white shadow rounded hover:bg-gray-50 transition">
              <td class="p-3">1</td>
              <td class="p-3">Maria Gonzales</td>
              <td class="p-3">29</td>
              <td class="p-3">Female</td>
              <td class="p-3">2025-05-12</td>
              <td class="p-3 font-medium text-green-600">Active</td>
              <td class="p-3 space-x-2">
                <a href="view-patient.html?id=1" class="text-blue-500 hover:text-blue-700" aria-label="View">
                  <i class="ri-eye-line text-lg"></i>
                </a>
                <a href="edit-patient.html?id=1" class="text-yellow-500 hover:text-yellow-700" aria-label="Edit">
                  <i class="ri-edit-line text-lg"></i>
                </a>
                <a href="#" class="text-red-500 hover:text-red-700" aria-label="Delete">
                  <i class="ri-delete-bin-line text-lg"></i>
                </a>
              </td>
            </tr>

            <!-- Row 2 -->
            <tr class="bg-white shadow rounded hover:bg-gray-50 transition">
              <td class="p-3">2</td>
              <td class="p-3">John Doe</td>
              <td class="p-3">42</td>
              <td class="p-3">Male</td>
              <td class="p-3">2025-05-10</td>
              <td class="p-3 font-medium text-yellow-500">Follow-up</td>
              <td class="p-3 space-x-2">
                <a href="view-patient.html?id=2" class="text-blue-500 hover:text-blue-700" aria-label="View">
                  <i class="ri-eye-line text-lg"></i>
                </a>
                <a href="edit-patient.html?id=2" class="text-yellow-500 hover:text-yellow-700" aria-label="Edit">
                  <i class="ri-edit-line text-lg"></i>
                </a>
                <a href="#" class="text-red-500 hover:text-red-700" aria-label="Delete">
                  <i class="ri-delete-bin-line text-lg"></i>
                </a>
              </td>
            </tr>

            <!-- Row 3 -->
            <tr class="bg-white shadow rounded hover:bg-gray-50 transition">
              <td class="p-3">3</td>
              <td class="p-3">Ava Smith</td>
              <td class="p-3">35</td>
              <td class="p-3">Female</td>
              <td class="p-3">2025-05-01</td>
              <td class="p-3 font-medium text-red-500">Inactive</td>
              <td class="p-3 space-x-2">
                <a href="view-patient.html?id=3" class="text-blue-500 hover:text-blue-700" aria-label="View">
                  <i class="ri-eye-line text-lg"></i>
                </a>
                <a href="edit-patient.html?id=3" class="text-yellow-500 hover:text-yellow-700" aria-label="Edit">
                  <i class="ri-edit-line text-lg"></i>
                </a>
                <a href="#" class="text-red-500 hover:text-red-700" aria-label="Delete">
                  <i class="ri-delete-bin-line text-lg"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</body>
</html>