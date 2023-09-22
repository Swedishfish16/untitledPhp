<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="includes/index.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="wrapper">
  <main>
    <div class="login-container">
      <h1 class="welcome-heading" >Welcome</h1>
      <form action="includes/phpFormVal.php" method="post">
        <div class="flex-input-container">
          <label class="login-input" >Please enter username</label>
          <input 
          required
          class="login-input"
          id="username" 
          name="username" 
          placeholder="username..." >
          <label class="login-input">Please enter password</label>
          <input 
          required
          class="login-input"
          id="password" 
          name="password" 
          placeholder="password...">
          <div class="submit-container">
            <input
            class="submit-btn"
            type="submit"
            value="login">
            <input 
            class="submit-btn"
            type="submit"
            value="register">
          </div>
        </div>
      </form>
    </div>
  </main>
</div>
</body>
</html>