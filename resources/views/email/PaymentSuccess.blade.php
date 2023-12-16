<!DOCTYPE html>
<html>
<head>
    <title>Payment Receipt</title>
</head>
<body>
    <h1>Payment Receipt</h1>
    <p>Reference: {{ $data['reference'] }}</p>
    <p>Amount: {{ $data['amount'] }}</p>
    <p>Plan: {{ $data['plan'] }}</p>
    <p>Email: {{ $data['email'] }}</p>
</body>
</html>
