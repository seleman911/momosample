<!DOCTYPE html>
<html>
<head>
  <title>Payment Form</title>
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- Stylesheet -->
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f2f2f2;
    }
    
    .payment-form {
      background: #fff;
      max-width: 400px;
      margin: 50px auto;
      padding: 30px;
      border-radius: 10px;
    }

    .payment-form h1 {
      text-align: center;
      margin-bottom: 30px;
    }

    .form-control {
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      width: 100%;
      margin-bottom: 20px;
    }
    
    .form-control:focus {
      outline: none;
      border-color: #777;
    }
    
    .submit-btn {
      background: #3498db;
      border: 0;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 5px;
      color: #fff;
      cursor: pointer;  
    }

  </style>

</head>

<body>

  <div class="payment-form">
    <h1>Payment Form</h1>  

    <form action="pay.php" method="post">
    
      <input class="form-control" type="email" name="email" placeholder="Email address">
      
      <input class="form-control" type="number"  name="amount" id="amount" placeholder="amount">
      
      <input class="submit-btn" type="submit" name="pay" value="Send Payment">
    
    </form>

  </div>
  <!--
    <script>
    // Get reference to textbox
    const numberInput = document.getElementById('Amount');

    // Add event listener for input
    Amount.addEventListener('input', function() {
      
      // Get current value and remove commas
      let num = this.value.replace(/,/g,''); 
      
      // Add commas 
      num = num.replace(/\B(?=(\d{3})+(?!\d))/g, ",");   
      
      // Set value 
      this.value = num;

    });
  </script>
     -->
     
</body>
</html>