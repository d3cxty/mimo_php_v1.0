<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f9fafb; /* Light gray background for better contrast */
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh; /* Full viewport height */
            overflow-y: auto; /* Add scroll if needed */
        }
        .main-content {
            margin-left: 25%; /* Adjust based on sidebar width */
        }
    </style>
</head>
<body>

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
                        <span><a href="profile.php">Profile</a></span>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Profile Content -->
        <main class="main-content w-3/4 p-4">
            <!-- Profile Header -->
            <div class="bg-white p-6 rounded-md mb-6 shadow-md">
                <div class="flex items-center mb-4">
                    <div class="w-24 h-24 bg-gray-300 rounded-full overflow-hidden mr-4">
                        <img src="https://via.placeholder.com/96" alt="Profile Picture" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h1 class="text-3xl font-semibold">Username</h1>
                        <p class="text-gray-600">Email: user@example.com</p>
                        <p class="text-gray-600">Joined: January 2024</p>
                        <div class="mt-4 flex space-x-2">
                            <button id="editProfileButton" class="bg-yellow-500 text-white p-2 rounded-lg hover:bg-yellow-600">
                                <i class="fas fa-edit mr-2"></i> Edit Profile
                            </button>
                            <form action="logout.php" method="POST" class="inline">
                                <button type="submit" class="bg-red-500 text-white p-2 rounded-lg hover:bg-red-600">
                                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <h2 class="text-2xl font-semibold">About Me</h2>
                    <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>

            <!-- User Posts -->
            <div class="bg-white p-6 rounded-md mb-6 shadow-md">
                <h2 class="text-2xl font-semibold mb-4">Recent Posts</h2>

                <!-- Example Post -->
                <div class="mb-6">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-gray-300 rounded-full mr-4"></div>
                        <div>
                            <h3 class="text-xl font-semibold">Username</h3>
                            <p class="text-gray-500">2 hours ago</p>
                        </div>
                    </div>
                    <img src="https://via.placeholder.com/800x400" alt="Post Image" class="w-full rounded-md mb-4">
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

                <!-- Repeat the post structure for more posts -->
            </div>
        </main>
    </div>

    <!-- Modal (Initially Hidden) -->
    <div id="editProfileModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg w-1/3 p-6">
            <!-- Modal Header -->
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-semibold">Edit Profile</h2>
                <button id="closeModal" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <!-- Modal Body -->
            <form action="update-profile.php" method="POST" enctype="multipart/form-data">
                <!-- Profile Picture Upload -->
                <div class="mb-4 text-center">
                    <label for="profilePicture" class="block text-gray-700 mb-2">Profile Picture:</label>
                    <div class="relative w-24 h-24 mx-auto mb-4">
                        <img id="profilePicturePreview" src="https://via.placeholder.com/96" alt="Profile Picture Preview" class="w-full h-full object-cover rounded-full border">
                        <label for="profilePicture" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white cursor-pointer rounded-full">
                            <i class="fas fa-camera"></i>
                        </label>
                    </div>
                    <input type="file" id="profilePicture" name="profilePicture" class="hidden" accept="image/*">
                </div>

                <div class="mb-4">
                    <label for="username" class="block text-gray-700">Username:</label>
                    <input type="text" id="username" name="username" class="border p-2 rounded-lg w-full" value="Username">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email:</label>
                    <input type="email" id="email" name="email" class="border p-2 rounded-lg w-full" value="user@example.com">
                </div>

                <div class="flex justify-end">
                    <button type="button" id="cancelButton" class="bg-gray-500 text-white p-2 rounded-lg mr-2 hover:bg-gray-600">
                        Cancel
                    </button>
                    <button type="submit" class="bg-green-500 text-white p-2 rounded-lg hover:bg-green-600">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Get elements
        const editProfileButton = document.getElementById('editProfileButton');
        const editProfileModal = document.getElementById('editProfileModal');
        const closeModal = document.getElementById('closeModal');
        const cancelButton = document.getElementById('cancelButton');
        const profilePictureInput = document.getElementById('profilePicture');
        const profilePicturePreview = document.getElementById('profilePicturePreview');

        // Show modal
        editProfileButton.addEventListener('click', () => {
            editProfileModal.classList.remove('hidden');
        });

        // Hide modal
        closeModal.addEventListener('click', () => {
            editProfileModal.classList.add('hidden');
        });

        cancelButton.addEventListener('click', () => {
            editProfileModal.classList.add('hidden');
        });

        // Update profile picture preview
        profilePictureInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = () => {
                    profilePicturePreview.src = reader.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>

</body>
</html>
