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
        <main class="main-content w-1/2 p-4">
            <!-- Upload Form -->
            <div class="bg-white p-6 rounded-md mb-6">
                <h2 class="text-2xl font-semibold mb-4 text-center">Upload Your Meme or Quote</h2>
                <form action="/upload" method="post" enctype="multipart/form-data">
                    <div class="mb-4 border-yellow-500">
                        <label for="upload-type" class="block text-lg font-medium mb-2 text-center" >Upload Type:</label>
                        <select id="upload-type" name="upload-type" class="border rounded-lg p-2 w-full border-yellow-500">
                            <option value="image">Image</option>
                            <option value="quote">Quote</option>
                        </select>
                    </div>
                    <div id="image-upload" class="mb-4">
                        <label for="file" class="block text-lg font-medium mb-2 text-center">Select Image:</label>
                        <input type="file" id="file" name="file" accept="image/*" class="border rounded-lg p-2 w-full border-yellow-500">
                    </div>
                    <div class="mb-4">
                        <label for="caption" class="block text-lg font-medium mb-2 border-yellow-500">Caption:</label>
                        <textarea id="caption" name="caption" rows="4" class="border rounded-lg p-2 w-full border-yellow-500"></textarea>
                    </div>
                    <button type="submit" class="bg-yellow-500 text-white p-2 rounded-lg hover:bg-blue-600">
                        <i class="fas fa-upload mr-2"></i> Upload
                    </button>
                </form>
            </div>

           
        </main>
    </div>

    <script>
        const uploadTypeSelect = document.getElementById('upload-type');
        const imageUploadDiv = document.getElementById('image-upload');

        uploadTypeSelect.addEventListener('change', () => {
            if (uploadTypeSelect.value === 'quote') {
                imageUploadDiv.style.display = 'none';
            } else {
                imageUploadDiv.style.display = 'block';
            }
        });

        // Initialize visibility based on the default value
        document.addEventListener('DOMContentLoaded', () => {
            uploadTypeSelect.dispatchEvent(new Event('change'));
        });
    </script>

</body>
</html>
