<!-- patients.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Patients - DermaHealth</title>
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
  <link rel="stylesheet" href="style.css">
</head>

<body class="bg-gray-100 font-inter">
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-primary text-white p-6 space-y-6 hidden md:block">
      <div class="text-2xl font-pacifico mb-10">DermaHealth</div>
      <nav class="space-y-4">
        <a href="dashstaff.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded"><i class="ri-dashboard-line"></i><span>Dashboard</span></a>
        <a href="patientstaff.php" class="flex items-center space-x-3 bg-white/20 p-2 rounded"><i class="ri-user-line"></i><span>Patients</span></a>
        <a href="appointstaff.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded"><i class="ri-calendar-line"></i><span>Appointments</span></a>
        <a href="recordstaff.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded"><i class="ri-file-list-3-line"></i><span>Medical Records</span></a>
        <a href="login.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded"><i class="ri-logout-box-r-line"></i><span>Logout</span></a>
      </nav>
    </aside>

    <!-- Main -->
    <main class="flex-1 p-6">
      <header class="mb-6">
        <h1 class="text-3xl font-bold text-primary">Patients</h1>
        <p class="text-gray-600 mt-1">View and manage patient information.</p>
      </header>

      <div class="mb-4">
        <input 
          type="text" 
          placeholder="Search patients..." 
          class="w-full max-w-sm p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"
        />
      </div>

      <div class="bg-white rounded-lg shadow p-6 overflow-x-auto">
        <table class="min-w-full table-auto text-left border-separate border-spacing-y-2">
          <thead class="text-sm text-gray-700 bg-gray-100">
            <tr>
              <th class="p-3">#</th>
              <th class="p-3">Full Name</th>
              <th class="p-3">Age</th>
              <th class="p-3">Gender</th>
              <th class="p-3">Last Visit</th>
              <th class="p-3">Status</th>
              <th class="p-3">Actions</th>
            </tr>
          </thead>
          <tbody class="text-sm text-gray-700">
            <tr class="bg-white shadow rounded hover:bg-gray-50 transition">
              <td class="p-3">1</td>
              <td class="p-3">Maria Gonzales</td>
              <td class="p-3">29</td>
              <td class="p-3">Female</td>
              <td class="p-3">2025-05-12</td>
              <td class="p-3 font-medium text-green-600">Active</td>
              <td class="p-3 space-x-2">
                <a href="javascript:void(0)" class="text-blue-500 hover:text-blue-700" onclick="openModal()">
                  <i class="ri-eye-line text-lg"></i>
                </a>
                <a href="javascript:void(0)" class="text-yellow-500 hover:text-yellow-700" onclick="editPatient(this)">
                  <i class="ri-edit-line text-lg"></i>
                </a>
                <a href="javascript:void(0)" class="text-red-500 hover:text-red-700" onclick="deletePatient(this)">
                  <i class="ri-delete-bin-line text-lg"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>

  <!-- Modal -->
  <div id="patientModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md space-y-4">
      <h2 class="text-xl font-semibold text-primary">Patient Information</h2>
      <p><strong>Name:</strong> Maria Gonzales</p>
      <p><strong>Age:</strong> 29</p>
      <p><strong>Gender:</strong> Female</p>
      <p><strong>Last Visit:</strong> 2025-05-12</p>
      <p><strong>Status:</strong> Active</p>
      
      <div>
        <h3 class="text-md font-semibold mt-4 mb-2">Skin Condition History:</h3>
        <ul id="skinConditionsList" class="list-disc ml-5 space-y-1 text-sm text-gray-700">
          <!-- Skin conditions will be appended here -->
        </ul>
      </div>

      <div class="space-y-2">
        <input id="skinFileInput" type="file" class="block w-full text-sm text-gray-700
               file:mr-4 file:py-2 file:px-4
               file:rounded-full file:border-0
               file:text-sm file:font-semibold
               file:bg-primary file:text-white
               hover:file:bg-blue-700"/>
        <button onclick="addSkinCondition()" class="bg-primary text-white px-4 py-2 rounded hover:bg-blue-700">Upload</button>
      </div>

      <div class="flex justify-end space-x-2 pt-4">
        <button onclick="closeModal()" class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">Close</button>
      </div>
    </div>
  </div>

  <script>
    function openModal() {
      document.getElementById("patientModal").classList.remove("hidden");
    }

    function closeModal() {
      document.getElementById("patientModal").classList.add("hidden");
    }

    function deletePatient(el) {
      if (confirm("Are you sure you want to delete this patient?")) {
        el.closest('tr').remove();
      }
    }

    function editPatient(el) {
      const row = el.closest('tr');
      const isEditing = row.classList.contains('editing');
      const cells = row.querySelectorAll('td');

      if (!isEditing) {
        row.classList.add('editing');
        for (let i = 1; i <= 5; i++) {
          const text = cells[i].textContent;
          cells[i].setAttribute('data-original', text);
          cells[i].innerHTML = <input type="text" value="${text}" class="border border-gray-300 p-1 rounded w-full text-sm">;
        }
        el.innerHTML = '<i class="ri-save-line text-lg"></i>';
      } else {
        row.classList.remove('editing');
        for (let i = 1; i <= 5; i++) {
          const input = cells[i].querySelector('input');
          cells[i].textContent = input.value;
        }
        el.innerHTML = '<i class="ri-edit-line text-lg"></i>';
      }
    }

    let currentSkinConditions = [];

    function addSkinCondition() {
      const input = document.getElementById("skinFileInput");
      const list = document.getElementById("skinConditionsList");
      const file = input.files[0];

      if (file) {
        currentSkinConditions.push(file.name);
        const item = document.createElement("li");
        item.textContent = file.name;
        list.appendChild(item);
        input.value = ''; // Reset file input
      }
    }
  </script>
</body>
</html>