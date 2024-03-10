<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    header {
      background-color: #3498db;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    header h1 {
      margin: 0;
    }

    nav {
      margin-top: 20px;
    }

    ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      justify-content: center;
    }

    li {
      margin: 0 10px;
    }

    a {
      text-decoration: none;
      color: #fff;
    }

    section.main-content {
      display: flex;
      justify-content: space-around;
      padding: 20px;
    }

    .info-card {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    section.recent-activity {
      background-color: #ecf0f1;
      padding: 20px;
      margin: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    footer {
      background-color: #3498db;
      color: #fff;
      text-align: center;
      padding: 10px;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>
  <header>
    <h1>Admin Dashboard</h1>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Users</a></li>
        <li><a href="#">Settings</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </nav>
  </header>

  <section class="main-content">
    <div class="info-card">
      <h2>Total Users</h2>
      <p>1500</p>
    </div>

    <div class="info-card">
      <h2>Total Products</h2>
      <p>300</p>
    </div>

    <div class="info-card">
      <h2>Revenue</h2>
      <p>$50,000</p>
    </div>
  </section>

  <section class="recent-activity">
    <h2>Recent Activity</h2>
    <ul>
      <li>User John Doe registered.</li>
      <li>New product added to the inventory.</li>
      <li>User Jane Smith updated their profile.</li>
      <li>Product XYZ is out of stock.</li>
    </ul>
  </section>

  <footer>
    <p>&copy; 2024 Admin Dashboard</p>
  </footer>
</body>
</html>
