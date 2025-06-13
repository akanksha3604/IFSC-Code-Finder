<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Search IFSC Code</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Search IFSC Code</h1>
    <nav>
      <ul>
        <li><a href="index.php" target="_blank">Home</a></li>
        <li><a href="search.php" target="_blank">Search</a></li>
        <li><a href="services.php" target="_blank">Services</a></li>
        <li><a href="contact.php" target="_blank">Contact</a></li>
        <li><a href="about.php" target="_blank">About</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <form action="search_process.php" method="get" class="form-style">
      <input type="text" name="bank" placeholder="Enter Bank Name" required>
      <input type="text" name="branch" placeholder="Enter Branch Name" required>
      <input type="text" name="city" placeholder="Enter City" required>
      <button type="submit">Find IFSC</button>
    </form>
  </main>
</body>
</html>
