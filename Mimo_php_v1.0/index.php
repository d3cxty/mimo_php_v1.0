<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meme and Quote Sharing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #ffffff; /* Set background color to white */
        }
        /* Ensure sidebar is fixed */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh; /* Full viewport height */
            overflow-y: auto; /* Add scroll if needed */
        }
        /* Main content should have margin to avoid overlap with fixed sidebar */
        .main-content {
            margin-left: 25%; /* Adjust based on sidebar width */
        }
    </style>
</head>
<body class="bg-white">

    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto flex items-center justify-between p-4">
            <div class="text-2xl font-bold text-yellow-500">MiMo</div>
            <input type="text" placeholder="Search..." class="border rounded-lg p-2 w-1/2 outline-yellow-500">
            <div class="flex space-x-4">
                <span class="text-gray-600 cursor-pointer"><i class="fas fa-bell text-blue-500"></i></span>
                <span class="text-gray-600 cursor-pointer"><i class="fas fa-user text-green-500"></i></span>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container mx-auto flex mt-4">
        <!-- Sidebar -->
        <aside class="sidebar w-1/4 p-4 pt-[200px] pl-[60px] bg-white">
            <nav>
                <ul class="space-y-8">
                    <li class="flex items-center space-x-2 text-gray-600 cursor-pointer">
                        <i class="fas fa-home text-red-500"></i>
                        <span><a href="index.php">Home</a></span>
                    </li>
                    <li class="flex items-center space-x-2 text-gray-600 cursor-pointer">
                        <i class="fas fa-folder text-yellow-500"></i>
                        <span>Categories</span>
                    </li>
                    <li class="flex items-center space-x-2 text-gray-600 cursor-pointer">
                        <i class="fas fa-upload text-orange-500"></i>
                        <span><a href="upload.php">Upload</a></span>
                    </li>
                    <li class="flex items-center space-x-2 text-gray-600 cursor-pointer">
                        <i class="fas fa-user text-purple-500"></i>
                        <a href="profile.php">Profile</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Feed -->
        <main class="main-content w-3/4 p-4">
            <!-- Single Post -->
            <div class="bg-white p-6 rounded-md mb-6">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gray-300 rounded-full mr-4"></div>
                    <div>
                        <h2 class="text-xl font-semibold">Username</h2>
                        <p class="text-gray-500">2 hours ago</p>
                    </div>
                </div>
                <img src="https://via.placeholder.com/800x400" alt="Meme" class="w-full rounded-md mb-4">
                <p class="text-lg">This is a funny meme caption.</p>
                <div class="flex space-x-4 mt-4">
                    <button class="flex items-center space-x-1 text-gray-600 cursor-pointer">
                        <i class="fas fa-heart text-pink-500"></i>
                        <span>Like</span>
                    </button>
                    <button class="flex items-center space-x-1 text-gray-600 cursor-pointer">
                        <i class="fas fa-comment text-purple-500"></i>
                        <span>Comment</span>
                    </button>
                    <button class="flex items-center space-x-1 text-gray-600 cursor-pointer">
                        <i class="fas fa-share text-orange-500"></i>
                        <span>Share</span>
                    </button>
                </div>
            </div>
            <div class="bg-white p-6 rounded-md mb-6">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gray-300 rounded-full mr-4"></div>
                    <div>
                        <h2 class="text-xl font-semibold">Username</h2>
                        <p class="text-gray-500">2 hours ago</p>
                    </div>
                </div>
                <img src="https://via.placeholder.com/800x400" alt="Meme" class="w-full rounded-md mb-4">
                <p class="text-lg">This is a funny meme caption.</p>
                <div class="flex space-x-4 mt-4">
                    <button class="flex items-center space-x-1 text-gray-600 cursor-pointer">
                        <i class="fas fa-heart text-pink-500"></i>
                        <span>Like</span>
                    </button>
                    <button class="flex items-center space-x-1 text-gray-600 cursor-pointer">
                        <i class="fas fa-comment text-purple-500"></i>
                        <span>Comment</span>
                    </button>
                    <button class="flex items-center space-x-1 text-gray-600 cursor-pointer">
                        <i class="fas fa-share text-orange-500"></i>
                        <span>Share</span>
                    </button>
                </div>
            </div>
        </main>
    </div>

</body>

</html>
