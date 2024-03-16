<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qr Code</title>
</head>

<body>
    <div class="visible-print text-center">
        {!! QrCode::size(100)->generate('Demo') !!}
        <p>Scan me to return to the original page.</p>
    </div>
</body>

</html>
