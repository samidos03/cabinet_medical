<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

<div class="bg-white p-8 rounded shadow-md w-96">
    <h2 class="text-2xl font-bold mb-6 text-center">Admin Login</h2>

    <form method="POST" action="/admin/login">
        @csrf
        <input type="email" name="email" placeholder="Email" class="w-full border p-2 mb-4 rounded">
        <input type="password" name="password" placeholder="Password" class="w-full border p-2 mb-4 rounded">
        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Login</button>
    </form>
</div>

</body>
</html>