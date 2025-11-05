<?php
include 'db.php';

$search = $_POST['search'];

$sql = "SELECT * FROM doctors 
        WHERE name LIKE '%$search%' 
        OR city LIKE '%$search%' 
        OR specialization LIKE '%$search%'";

$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Search Results</title>
  <link rel="stylesheet" href="edit.css">
<style>
      body {
      background: url('back5.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Segoe UI', Arial, sans-serif;
      color: #333;
    }

    .overlay {
      background-color: rgba(255, 255, 255, 0.9);
      min-height: 100vh;
      padding: 40px;
    }

    h1 {
      text-align: center;
      color: #0078d7;
      margin-bottom: 20px;
    }  
   tr:hover {
      background-color: #f2f2f2;
    }

    a.back-btn {
      display: inline-block;
      text-decoration: none;
      color: white;
      background-color: #0078d7;
      padding: 10px 20px;
      border-radius: 8px;
      margin: 20px auto;
      display: block;
      width: fit-content;
    }

    a.back-btn:hover {
      background-color: #005ea6;
    }
</style>
</head>
<body>
<div class="overlay">
    <h1>Search Results</h1>
    <a href="search.html" style="margin-top: 30px">🔙 Back to Search</a>
    <div class="table-container">
    <table>
      <tr>
        <th>Name</th>
        <th>Specialization</th>
        <th>City</th>
        <th>Contact</th>
      </tr>
      <?php
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              echo "<tr>
                      <td>{$row['name']}</td>
                      <td>{$row['specialization']}</td>
                      <td>{$row['city']}</td>
                      <td>{$row['contact']}</td>
                    </tr>";
          }
      } else {
          echo "<tr><td colspan='4'>No doctors found</td></tr>";
      }
      ?>
    </table>
  </div>
</div>
</body>
</html>