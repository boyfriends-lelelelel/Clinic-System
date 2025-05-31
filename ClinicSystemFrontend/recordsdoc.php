<!-- Add New Medical Record -->
<form action="recordsdoc.php" method="POST" class="bg-white p-6 rounded-lg shadow mb-6 space-y-4">
  <div class="grid grid-cols-2 gap-4">
    <input type="text" name="patient_id" placeholder="Patient ID" class="border p-2 rounded w-full" required>
    <input type="text" name="doctor_id" placeholder="Doctor ID" class="border p-2 rounded w-full" required>
    <input type="text" name="appointment_id" placeholder="Appointment ID" class="border p-2 rounded w-full">
    <input type="date" name="record_date" class="border p-2 rounded w-full" required>
    <input type="text" name="diagnosis" placeholder="Diagnosis" class="border p-2 rounded w-full">
    <input type="text" name="prescription" placeholder="Prescription" class="border p-2 rounded w-full">
  </div>
  <textarea name="symptoms" placeholder="Symptoms" class="w-full border p-2 rounded" rows="2"></textarea>
  <textarea name="notes" placeholder="Additional Notes" class="w-full border p-2 rounded" rows="2"></textarea>
  <button type="submit" name="submit_record" class="bg-primary text-white px-4 py-2 rounded hover:bg-blue-700">Save Record</button>
</form>

<?php
include 'connect.php';

if (isset($_POST['submit_record'])) {
  $patient_id = $_POST['patient_id'];
  $doctor_id = $_POST['doctor_id'];
  $appointment_id = $_POST['appointment_id'];
  $symptoms = $_POST['symptoms'];
  $diagnosis = $_POST['diagnosis'];
  $prescription = $_POST['prescription'];
  $notes = $_POST['notes'];
  $record_date = $_POST['record_date'];

  // Direct insert without checking patients table
  $sql = "INSERT INTO medicalrecords 
          (PatientID, DoctorID, AppointmentID, Symptoms, Diagnosis, Prescription, Notes, RecordDate) 
          VALUES ('$patient_id', '$doctor_id', '$appointment_id', '$symptoms', '$diagnosis', '$prescription', '$notes', '$record_date')";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Record saved successfully!');</script>";
  } else {
    echo "<script>alert('Insert Error: " . $conn->error . "');</script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Medical Records - DermaHealth</title>
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
        <a href="dashdoctor.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded"><i class="ri-dashboard-line"></i><span>Dashboard</span></a>
        <a href="patientdoc.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded"><i class="ri-user-line"></i><span>Patients</span></a>
        <a href="appointdoctor.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded"><i class="ri-calendar-line"></i><span>Appointments</span></a>
        <a href="recordsdoc.php" class="flex items-center space-x-3 bg-white/20 p-2 rounded"><i class="ri-file-list-3-line"></i><span>Medical Records</span></a>
        <a href="labresultsdoc.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded"><i class="ri-flask-line"></i><span>Lab Results</span></a>
        <a href="login.php" class="flex items-center space-x-3 hover:bg-white/10 p-2 rounded"><i class="ri-logout-box-r-line"></i><span>Logout</span></a>
      </nav>
    </aside>

    <main class="flex-1 p-6">
      <header class="mb-6">
        <h1 class="text-3xl font-bold text-primary mb-4">Medical Records</h1>

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
            <option value="Acne Vulgaris">Acne Vulgaris</option>
            <option value="Eczema">Eczema</option>
            <option value="Psoriasis">Psoriasis</option>
            <option value="Rosacea">Rosacea</option>
            <option value="Seborrheic Dermatitis">Seborrheic Dermatitis</option>
          </select>
        </div>
      </header>

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
                <span class="bg-red-100 text-red-700 px-2 py-1 rounded-full text-sm">Acne Vulgaris</span>
              </td>
              <td class="p-3">Dra. Orbasido</td>
            </tr>
            <tr class="border-b hover:bg-gray-50 cursor-pointer">
              <td class="p-3">REC-002</td>
              <td class="p-3">John Doe</td>
              <td class="p-3">2025-05-10</td>
              <td class="p-3">
                <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded-full text-sm">Eczema</span>
              </td>
              <td class="p-3">Dra. Dulay</td>
            </tr>
            <tr class="border-b hover:bg-gray-50 cursor-pointer">
              <td class="p-3">REC-003</td>
              <td class="p-3">Ava Smith</td>
              <td class="p-3">2025-05-01</td>
              <td class="p-3">
                <span class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-sm">Psoriasis</span>
              </td>
              <td class="p-3">Dra. Bantog</td>
            </tr>
            <tr class="border-b hover:bg-gray-50 cursor-pointer">
              <td class="p-3">REC-004</td>
              <td class="p-3">Liam Reyes</td>
              <td class="p-3">2025-04-25</td>
              <td class="p-3">
                <span class="bg-pink-100 text-pink-700 px-2 py-1 rounded-full text-sm">Rosacea</span>
              </td>
              <td class="p-3">Dra. Orbasido</td>
            </tr>
            <tr class="hover:bg-gray-50 cursor-pointer">
              <td class="p-3">REC-005</td>
              <td class="p-3">Ella Cruz</td>
              <td class="p-3">2025-04-20</td>
              <td class="p-3">
                <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded-full text-sm">Seborrheic Dermatitis</span>
              </td>
              <td class="p-3">Dra. Dulay</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</body>
</html>