<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard - Contact Messages</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"/>
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f4f6f9;
      margin: 0;
      padding: 20px;
    }

    .container {
      max-width: 1000px;
      margin: auto;
      background: #fff;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #2c3e50;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 12px 15px;
      text-align: left;
    }

    th {
      background-color: #3498db;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #e2e6ea;
    }

    .message-box {
      max-height: 400px;
      overflow-y: auto;
      margin-top: 20px;
    }

    .btn-delete {
      background-color: #e74c3c;
      color: white;
      padding: 6px 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .btn-delete:hover {
      background-color: #c0392b;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Contact Messages</h2>
    
    <div class="message-box">
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <!-- Example row -->
          <tr>
            <td>John Doe</td>
            <td>john@example.com</td>
            <td>+962 7 91234567</td>
            <td>Hello, I want to book an adventure!</td>
            <td><button class="btn-delete">Delete</button></td>
          </tr>
          <!-- Repeat rows dynamically if using a backend -->
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
