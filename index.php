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
        /* Modal styles */
        .modal {
            display: none; /* Hidden by default */
            position: fixed;
            z-index: 50;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.5); /* Black overlay */
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            background-color: #fff;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 8px;
        }
        .modal-header, .modal-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .modal-header {
            border-bottom: 1px solid #ddd;
        }
        .modal-footer {
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
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
                <span class="text-gray-600 cursor-pointer" onclick="showModal('notifModal')">
                    <i class="fas fa-bell text-blue-500"></i>
                    <!-- Add a badge for notifications -->
                    <span class="absolute top-0 right-0 bg-red-500 text-white text-xs rounded-full px-2 py-1">3</span>
                </span>
                <span class="text-gray-600 cursor-pointer" onclick="showModal('profileModal')">
                    <i class="fas fa-user text-green-500"></i>
                </span>
            </div>
        </div>
    </header>

    <!-- Notification Modal -->
    <div id="notifModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="text-lg font-semibold">Notifications</h2>
                <span class="close" onclick="closeModal('notifModal')">&times;</span>
            </div>
            <div class="modal-body">
                <!-- Placeholder for notifications -->
                <p>No new notifications</p>
            </div>
            <div class="modal-footer">
                <button class="bg-yellow-500 text-white px-4 py-2 rounded-lg" onclick="closeModal('notifModal')">Close</button>
            </div>
        </div>
    </div>

    <!-- Profile Modal -->
    <div id="profileModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="text-lg font-semibold">Profile</h2>
                <span class="close" onclick="closeModal('profileModal')">&times;</span>
            </div>
            <div class="modal-body">
                <!-- Placeholder for profile details -->
                <p>Name: User</p>
                <p>Email: user@example.com</p>
                <!-- Add more profile details as needed -->
            </div>
            <div class="modal-footer">
                <button class="bg-yellow-500 text-white px-4 py-2 rounded-lg" onclick="closeModal('profileModal')">Close</button>
            </div>
        </div>
    </div>

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
                        <!-- Placeholder for comment count -->
                        <span class="text-gray-500">(0)</span>
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
                        <!-- Placeholder for comment count -->
                        <span class="text-gray-500">(0)</span>
                    </button>
                    <button class="flex items-center space-x-1 text-gray-600 cursor-pointer">
                        <i class="fas fa-share text-orange-500"></i>
                        <span>Share</span>
                    </button>
                </div>
            </div>
        </main>
    </div>

    <script>
        function showModal(modalId) {
            document.getElementById(modalId).style.display = 'flex';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }
    </script>
</body>
</html>
