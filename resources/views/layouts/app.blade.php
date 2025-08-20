<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fashionys</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans">
    <nav class="bg-purple-950 text-white p-4 flex justify-between">
        <div class="font-bold">FASHIONYS.COM</div>
        <div>
            <a href="#" class="px-2">Home</a>
            <a href="#" class="px-2">Men</a>
            <a href="#" class="px-2">Women</a>
            <a href="#" class="px-2">Kids</a>
            <a href="#" class="px-2">About Us</a>
            <a href="#" class="px-2">FAQ</a>
            <a href="#" class="px-2">Contact Us</a>
        </div>
    </nav>

    <div class="container mx-auto">
        @yield('content')
    </div>
</body>
</html>
