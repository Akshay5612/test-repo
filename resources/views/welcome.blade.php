<!DOCTYPE html>
<html lang="en">
<head>
  <title>paypal integration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <h1>Paypal Integration</h1><br>
    <form action="{{ route('payment') }}" method="post">
        @csrf
        <input type="hidden" name="amount" value="200" /><br>
        <button type="submit" class="btn btn-primary">pay with paypal</button>
    </form>
  
  
</div>

</body>
</html>

