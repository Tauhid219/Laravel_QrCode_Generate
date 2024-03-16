<!DOCTYPE html>
<html>

<head>
    <title>QR Codes for Products</title>
</head>

<body>
    <h1>QR Codes for Products</h1>

    @foreach ($qrCodes as $productId => $qrCode)
        <h2>Product ID: {{ $productId }}</h2>
        <img src="data:image/png;base64,{{ base64_encode($qrCode) }}" alt="QR Code for Product {{ $productId }}">
    @endforeach
</body>

</html>
