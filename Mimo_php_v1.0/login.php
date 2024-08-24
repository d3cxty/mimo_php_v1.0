<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mimo-Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body{
            background-image: url("images/hand-drawn-trendy-cartoon-patter.jpg");
            background-size: contain;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Billabong';
            src: url('https://example.com/path-to-your-billabong-font-file.ttf') format('truetype');
        }

        .font-billabong {
            font-family: 'Billabong', cursive;
        }

        .font-proxima {
            font-family: 'Proxima Nova', Arial, sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">

<div class="flex items-center justify-center min-h-screen">
    <div class="bg-white bg-opacity-80 p-8 rounded-lg shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold text-center text-yellow-500 mb-6 font-proxima">MiMo</h2>
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Sign Up</h2>

        <form action="#" method="POST">
            <!-- Username -->
            <div class="mb-4">
                <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                <input type="text" id="username" name="username" required
                       class="w-full px-3 py-2 border border-yellow-500 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
            </div>

            

            <!-- Password -->
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" required
                       class="w-full px-3 py-2 border border-yellow-500 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
            </div>

            <!-- Sign Up Button -->
            <div class="mb-4">
                <button type="submit"
                        class="w-full bg-yellow-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    Sign Up
                </button>
            </div>

            <!-- Already have an account -->
            <div class="text-center">
                <p class="text-gray-600 text-sm">Already have an account? <a href="register.php"
                                                                              class="text-indigo-600 hover:text-indigo-700">Sign up
                        </a></p>
            </div>
        </form>
    </div>
</div>

</body>
</html>
