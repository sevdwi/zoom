<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoom Meeting Sign In</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .zoom-gradient {
            background: linear-gradient(135deg, #2D8CFF 0%, #2D8CFF 50%, #00B2FF 100%);
        }
        .input-focus:focus {
            box-shadow: 0 0 0 2px rgba(45, 140, 255, 0.5);
            border-color: #2D8CFF;
        }
        .btn-zoom {
            background-color: #2D8CFF;
            transition: all 0.3s ease;
        }
        .btn-zoom:hover {
            background-color: #1a7ae8;
        }
        .meeting-container {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            color: #718096;
        }
        .divider::before, .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #e2e8f0;
        }
        .divider::before {
            margin-right: 1rem;
        }
        .divider::after {
            margin-left: 1rem;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">
    <div class="meeting-container bg-white rounded-lg overflow-hidden w-full max-w-md">
        <!-- Header -->
        <div class="zoom-gradient text-white p-6 text-center">
            <i class="fas fa-video text-4xl mb-4"></i>
            <h1 class="text-2xl font-bold">Join Meeting</h1>
            <p class="text-blue-100 mt-2">Enter the meeting ID provided by the host</p>
        </div>
        
        <!-- Form -->
        <div class="p-6">
            <form id="meetingForm" class="space-y-4">
                <div>
                    <label for="meetingId" class="block text-sm font-medium text-gray-700 mb-1">Meeting ID</label>
                    <div class="relative">
                        <input type="text" id="meetingId" class="w-full px-4 py-2 border border-gray-300 rounded-md input-focus focus:outline-none" placeholder="123 456 7890" required>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <i class="fas fa-key text-gray-400"></i>
                        </div>
                    </div>
                </div>
                
                <div>
                    <label for="displayName" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                    <div class="relative">
                        <input type="text" id="displayName" class="w-full px-4 py-2 border border-gray-300 rounded-md input-focus focus:outline-none" placeholder="Enter your name" required>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <i class="fas fa-user text-gray-400"></i>
                        </div>
                    </div>
                </div>
                
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email (Optional)</label>
                    <div class="relative">
                        <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-md input-focus focus:outline-none" placeholder="Enter your email">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <i class="fas fa-envelope text-gray-400"></i>
                        </div>
                    </div>
                </div>
                
                <div class="flex items-center">
                    <input type="checkbox" id="rememberMe" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="rememberMe" class="ml-2 block text-sm text-gray-700">Remember me</label>
                </div>
                
                <div class="pt-2">
                    <button type="submit" class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-white font-medium btn-zoom focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Join
                    </button>
                </div>
                
                <div class="divider text-sm">or</div>
                
                <div class="space-y-3">
                    <button type="button" class="w-full flex items-center justify-center px-4 py-2 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <i class="fab fa-google text-red-500 mr-2"></i>
                        Sign in with Google
                    </button>
                    <button type="button" class="w-full flex items-center justify-center px-4 py-2 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <i class="fab fa-facebook text-blue-600 mr-2"></i>
                        Sign in with Facebook
                    </button>
                </div>
            </form>
            
            <div class="mt-6 text-center text-sm text-gray-500">
                <p>Don't have an account? <a href="#" class="font-medium text-blue-600 hover:text-blue-500">Sign up free</a></p>
            </div>
        </div>
        
        <!-- Footer -->
        <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
            <div class="flex justify-center space-x-6">
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <i class="fas fa-question-circle"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <i class="fas fa-globe"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <i class="fas fa-cog"></i>
                </a>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('meetingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const meetingId = document.getElementById('meetingId').value;
            const displayName = document.getElementById('displayName').value;
            const email = document.getElementById('email').value;
            const rememberMe = document.getElementById('rememberMe').checked;
            
            // Simple validation
            if (!meetingId || !displayName) {
                alert('Please fill in all required fields');
                return;
            }
            
            // Here you would typically send this data to your backend
            console.log('Joining meeting with:', {
                meetingId,
                displayName,
                email,
                rememberMe
            });
            
            // Simulate joining a meeting
            alert(`Welcome ${displayName}! You're joining meeting ${meetingId}`);
            
            // In a real app, you would redirect to the meeting page
            // window.location.href = `/meeting/${meetingId}`;
        });
        
        // Format meeting ID as user types
        document.getElementById('meetingId').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 3) {
                value = value.substring(0, 3) + ' ' + value.substring(3);
            }
            if (value.length > 7) {
                value = value.substring(0, 7) + ' ' + value.substring(7);
            }
            e.target.value = value.substring(0, 11);
        });
    </script>
</body>
</html>