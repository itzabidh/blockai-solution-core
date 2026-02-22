<?php
// PHP logic to handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_type = $_POST['user_type']; // 'vendor' or 'customer'
    
    if ($user_type == 'vendor') {
        $company_name = $_POST['company_name'];
        $business_email = $_POST['business_email'];
        $specialization = $_POST['specialization'];
        // SQL query logic for Vendor
    } else {
        $full_name = $_POST['full_name'];
        $personal_email = $_POST['personal_email'];
        $interest = $_POST['interest'];
        // SQL query logic for Customer
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | BlockAI Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root { --main-bg: #0C0C14; --primary-blue: #00d4ff; --primary-purple: #7000ff; }
        body { font-family: 'Inter', sans-serif; background-color: var(--main-bg); color: #e6edf3; }
        .heading-font { font-family: 'Space Grotesk', sans-serif; }
        .glass { background: rgba(255, 255, 255, 0.02); backdrop-filter: blur(20px); border: 1px solid rgba(255, 255, 255, 0.05); }
        .tab-active { border-bottom: 3px solid var(--primary-blue); color: var(--primary-blue); }
        .input-style { background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.1); color: white; outline: none; }
        .input-style:focus { border-color: var(--primary-blue); box-shadow: 0 0 10px rgba(0, 212, 255, 0.2); }
    </style>
</head>
<body class="min-h-screen flex flex-col overflow-x-hidden">

    <nav class="p-6 border-b border-white/5 bg-black/20 backdrop-blur-md">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="index.php" class="heading-font text-2xl font-bold tracking-tighter text-white">BLOCK<span class="text-cyan-400">AI</span></a>
            <a href="index.php" class="text-xs font-bold uppercase tracking-widest text-slate-500 hover:text-cyan-400 transition">Back to Ecosystem</a>
        </div>
    </nav>

    <main class="flex-grow flex items-center justify-center py-16 px-4">
        <div class="max-w-xl w-full">
            
            <div class="flex justify-center mb-8 space-x-8">
                <button onclick="switchTab('vendor')" id="vendorTab" class="pb-2 text-sm font-bold uppercase tracking-widest transition tab-active">Become a Vendor</button>
                <button onclick="switchTab('customer')" id="customerTab" class="pb-2 text-sm font-bold uppercase tracking-widest text-slate-500 transition">General Customer</button>
            </div>

            <div id="regCard" class="glass p-8 md:p-12 rounded-[40px] shadow-2xl relative overflow-hidden">
                <div class="absolute -top-10 -right-10 w-32 h-32 bg-purple-600/10 rounded-full blur-3xl"></div>
                <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-cyan-600/10 rounded-full blur-3xl"></div>

                <form id="vendorForm" action="registration.php" method="POST" class="space-y-6">
                    <input type="hidden" name="user_type" value="vendor">
                    <div class="text-center mb-10">
                        <h2 class="text-2xl font-bold text-white mb-2">Vendor Portal</h2>
                        <p class="text-slate-500 text-sm">Deploy your AI solutions to enterprise clients.</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">Company Name</label>
                            <input type="text" name="company_name" required class="w-full p-4 rounded-2xl input-style transition">
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">Business Email</label>
                            <input type="email" name="business_email" required class="w-full p-4 rounded-2xl input-style transition">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">AI Specialization</label>
                        <select name="specialization" class="w-full p-4 rounded-2xl input-style transition appearance-none">
                            <option value="ml">Machine Learning Models</option>
                            <option value="nlp">Natural Language Processing (NLP)</option>
                            <option value="cv">Computer Vision</option>
                            <option value="ethics">AI Compliance & Ethics</option>
                        </select>
                    </div>

                    <button type="submit" class="w-full bg-gradient-to-r from-cyan-500 to-purple-600 text-white py-5 rounded-2xl font-bold hover:scale-[1.02] transition shadow-lg shadow-cyan-500/20">
                        Register as Vendor
                    </button>
                </form>

                <form id="customerForm" action="registration.php" method="POST" class="space-y-6 hidden">
                    <input type="hidden" name="user_type" value="customer">
                    <div class="text-center mb-10">
                        <h2 class="text-2xl font-bold text-white mb-2">Customer Account</h2>
                        <p class="text-slate-500 text-sm">Explore and acquire top-tier AI services.</p>
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">Full Name</label>
                        <input type="text" name="full_name" required class="w-full p-4 rounded-2xl input-style transition">
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">Personal/Work Email</label>
                        <input type="email" name="personal_email" required class="w-full p-4 rounded-2xl input-style transition">
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">Interested In</label>
                        <select name="interest" class="w-full p-4 rounded-2xl input-style transition">
                            <option value="retail">Retail AI Solutions</option>
                            <option value="data">Data Analytics</option>
                            <option value="automation">Process Automation</option>
                        </select>
                    </div>

                    <button type="submit" class="w-full bg-white text-black py-5 rounded-2xl font-bold hover:bg-cyan-400 transition shadow-lg shadow-white/5">
                        Create Customer Account
                    </button>
                </form>

            </div>

            <div id="successBox" class="hidden glass p-12 rounded-[40px] text-center">
                <div class="w-20 h-20 bg-cyan-400/20 text-cyan-400 rounded-full flex items-center justify-center mx-auto mb-6 animate-pulse">
                    <i class="fa-solid fa-check text-3xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-white mb-4">Registration Successful!</h2>
                <p class="text-slate-500 mb-8">Accessing your personalized dashboard...</p>
                <i class="fa-solid fa-spinner animate-spin text-cyan-400 text-2xl"></i>
            </div>
        </div>
    </main>

    <script>
        function switchTab(type) {
            const vForm = document.getElementById('vendorForm');
            const cForm = document.getElementById('customerForm');
            const vTab = document.getElementById('vendorTab');
            const cTab = document.getElementById('customerTab');

            if (type === 'vendor') {
                vForm.classList.remove('hidden');
                cForm.classList.add('hidden');
                vTab.classList.add('tab-active');
                vTab.classList.remove('text-slate-500');
                cTab.classList.remove('tab-active');
                cTab.classList.add('text-slate-500');
            } else {
                cForm.classList.remove('hidden');
                vForm.classList.add('hidden');
                cTab.classList.add('tab-active');
                cTab.classList.remove('text-slate-500');
                vTab.classList.remove('tab-active');
                vTab.classList.add('text-slate-500');
            }
        }

        // Form Submit Animation
        const forms = ['vendorForm', 'customerForm'];
        forms.forEach(id => {
            document.getElementById(id).addEventListener('submit', function(e) {
                e.preventDefault();
                document.getElementById('regCard').classList.add('hidden');
                document.getElementById('successBox').classList.remove('hidden');
                setTimeout(() => {
                    window.location.href = (id === 'vendorForm') ? 'vendor_dashboard.php' : 'customer_dashboard.php';
                }, 3000);
            });
        });
    </script>
</body>
</html>
