<?php
// PHP logic can be added here to handle form submission to Azure SQL
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from the form
    $company_name = $_POST['company_name'];
    $business_email = $_POST['business_email'];
    $specialization = $_POST['specialization'];
    $website = $_POST['website'];

    // Future: Add SQL INSERT query here to save vendor info
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Registration | BlockAI Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 font-sans text-slate-900">

    <nav class="bg-white border-b border-slate-200 p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="index.php" class="text-2xl font-black text-indigo-600">BlockAI <span class="text-slate-400 font-light">Solution</span></a>
            <a href="index.php" class="text-sm font-bold text-slate-600">Back to Home</a>
        </div>
    </nav>

    <main class="max-w-3xl mx-auto py-16 px-4">
        <div id="regFormContainer" class="bg-white p-8 md:p-12 rounded-[32px] shadow-xl border border-slate-100 transition-all duration-500">
            <div class="text-center mb-10">
                <h1 class="text-3xl font-bold mb-3">Apply as a Verified Vendor</h1>
                <p class="text-slate-500">Join our global ecosystem and connect with enterprise clients.</p>
            </div>

            <form id="vendorForm" action="registration.php" method="POST" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-bold mb-2">Company Name</label>
                        <input type="text" name="company_name" required class="w-full p-4 bg-slate-50 border border-slate-200 rounded-xl outline-none focus:ring-2 focus:ring-indigo-600 transition">
                    </div>
                    <div>
                        <label class="block text-sm font-bold mb-2">Business Email</label>
                        <input type="email" name="business_email" required class="w-full p-4 bg-slate-50 border border-slate-200 rounded-xl outline-none focus:ring-2 focus:ring-indigo-600 transition">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold mb-2">AI Specialization</label>
                    <select name="specialization" class="w-full p-4 bg-slate-50 border border-slate-200 rounded-xl outline-none focus:ring-2 focus:ring-indigo-600 transition">
                        <option value="ml">Machine Learning Models</option>
                        <option value="nlp">Natural Language Processing (NLP)</option>
                        <option value="cv">Computer Vision</option>
                        <option value="ethics">AI Compliance & Ethics</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-bold mb-2">Company Website</label>
                    <input type="url" name="website" placeholder="https://" class="w-full p-4 bg-slate-50 border border-slate-200 rounded-xl outline-none focus:ring-2 focus:ring-indigo-600 transition">
                </div>

                <div class="p-4 bg-indigo-50 rounded-xl">
                    <p class="text-xs text-indigo-700 leading-relaxed">
                        <i class="fa-solid fa-circle-info mr-1"></i> 
                        By submitting, you agree to undergo our multi-tier vetting process for international compliance and technical standards.
                    </p>
                </div>

                <button type="submit" class="w-full bg-indigo-600 text-white py-4 rounded-xl font-bold text-lg hover:bg-indigo-700 transition shadow-lg transform hover:-translate-y-1">
                    Submit Application
                </button>
            </form>
        </div>

        <div id="successMessage" class="hidden text-center bg-white p-12 rounded-[32px] shadow-2xl border border-slate-100 transition-all duration-500">
            <div class="w-20 h-20 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-6 animate-bounce">
                <i class="fa-solid fa-check text-4xl"></i>
            </div>
            <h2 class="text-3xl font-bold mb-4">Application Sent!</h2>
            <p class="text-slate-500 mb-6 leading-relaxed">
                Thank you for applying. Your profile is being processed...
            </p>
            <div class="flex items-center justify-center space-x-2 text-indigo-600 font-bold">
                <i class="fa-solid fa-spinner animate-spin"></i>
                <span>Redirecting to Vendor Dashboard...</span>
            </div>
        </div>
    </main>

    <script>
        document.getElementById('vendorForm').addEventListener('submit', function(e) {
            // Preventing immediate redirect to show success animation
            e.preventDefault();
            
            // 1. Hide the Form
            document.getElementById('regFormContainer').classList.add('hidden');
            
            // 2. Show Success Message
            document.getElementById('successMessage').classList.remove('hidden');
            
            // 3. After 3 seconds, redirect to the PHP Vendor Dashboard
            setTimeout(function() {
                window.location.href = 'vendor_dashboard.php';
            }, 3000); 
        });
    </script>

</body>
</html>
