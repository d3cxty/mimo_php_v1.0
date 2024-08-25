<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">

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
    <div class="container mx-auto mt-4 p-4">
        <!-- Page Header -->
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-semibold">Categories</h1>
            <button class="bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-600" id="addCategoryBtn">
                <i class="fas fa-plus mr-2"></i> Add New Category
            </button>
        </div>

        <!-- Categories Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Category Card -->
            <div class="border p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow cursor-pointer">
                <h3 class="text-xl font-semibold mb-2">Memes</h3>
                <p class="text-gray-600">Explore or manage your meme posts.</p>
            </div>
            <div class="border p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow cursor-pointer">
                <h3 class="text-xl font-semibold mb-2">Quotes</h3>
                <p class="text-gray-600">View or organize your favorite quotes.</p>
            </div>
            <div class="border p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow cursor-pointer">
                <h3 class="text-xl font-semibold mb-2">Funny Videos</h3>
                <p class="text-gray-600">Browse or upload funny videos.</p>
            </div>
            <!-- Repeat for other categories -->
        </div>
    </div>

    <!-- Add Category Modal -->
    <div id="addCategoryModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white p-8 rounded-lg shadow-lg w-1/3">
            <h2 class="text-2xl font-semibold mb-4">Add New Category</h2>
            <form id="addCategoryForm">
                <div class="mb-4">
                    <label for="categoryName" class="block text-gray-700">Category Name</label>
                    <input type="text" id="categoryName" class="border rounded-lg p-2 w-full">
                </div>
                <div class="mb-4">
                    <label for="categoryDescription" class="block text-gray-700">Description</label>
                    <textarea id="categoryDescription" class="border rounded-lg p-2 w-full"></textarea>
                </div>
                <div class="flex justify-end">
                    <button type="button" class="bg-gray-500 text-white p-2 rounded-lg mr-2" id="cancelBtn">Cancel</button>
                    <button type="submit" class="bg-blue-500 text-white p-2 rounded-lg">Add Category</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Script to handle modal display -->
    <script>
        const addCategoryBtn = document.getElementById('addCategoryBtn');
        const addCategoryModal = document.getElementById('addCategoryModal');
        const cancelBtn = document.getElementById('cancelBtn');

        addCategoryBtn.addEventListener('click', () => {
            addCategoryModal.classList.remove('hidden');
        });

        cancelBtn.addEventListener('click', () => {
            addCategoryModal.classList.add('hidden');
        });

        // Add form submission handling here
        document.getElementById('addCategoryForm').addEventListener('submit', function(event) {
            event.preventDefault();
            // Handle form submission
            addCategoryModal.classList.add('hidden');
        });
    </script>
</body>
</html>
