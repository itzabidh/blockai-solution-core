<?php
// PHP logic for Registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_type = $_POST['user_type'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        $error = "Passwords do not match!";
    } else {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        // মডিউল কানেকশন এখানে হবে...
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Registration | BlockAI Solution</title>
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
        select option { background-color: #161b22; color: white; }
    </style>
</head>
<body class="min-h-screen flex flex-col overflow-x-hidden">

    <nav class="p-6 border-b border-white/5 bg-black/20 backdrop-blur-md">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="index.php" class="heading-font text-2xl font-bold tracking-tighter text-white uppercase">BlockAI</a>
            <a href="index.php" class="text-xs font-bold uppercase tracking-widest text-slate-500 hover:text-cyan-400">Back Home</a>
        </div>
    </nav>

    <main class="flex-grow flex items-center justify-center py-12 px-4">
        <div class="max-w-3xl w-full">
            <?php if(isset($error)): ?>
                <div class="bg-red-500/10 border border-red-500 text-red-500 p-3 rounded-xl mb-4 text-xs italic text-center">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <div class="flex justify-center mb-8 space-x-12">
                <button onclick="switchTab('vendor')" id="vendorTab" class="pb-2 text-sm font-bold uppercase tracking-widest transition tab-active">Vendor Onboarding</button>
                <button onclick="switchTab('customer')" id="customerTab" class="pb-2 text-sm font-bold uppercase tracking-widest text-slate-500 transition">Customer Portal</button>
            </div>

            <div id="regCard" class="glass p-8 md:p-10 rounded-[40px] shadow-2xl relative">
                <form id="vendorForm" action="registration" method="POST" class="space-y-6" onsubmit="return validatePasswords('vendor')">
                    <input type="hidden" name="user_type" value="vendor">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Legal Company Name</label>
                            <input type="text" name="company_name" required class="w-full p-3 rounded-xl input-style transition">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Business Email</label>
                            <input type="email" name="business_email" required class="w-full p-3 rounded-xl input-style transition">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Tax ID</label>
                            <input type="text" name="tax_id" required class="w-full p-3 rounded-xl input-style transition">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Specialization</label>
                            <select name="specialization" class="w-full p-3 rounded-xl input-style transition">
                                <option value="nlp">Natural Language Processing</option>
                                <option value="cv">Computer Vision</option>
                            </select>
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Password</label>
                            <input type="password" id="v_pass" name="password" required class="w-full p-3 rounded-xl input-style transition">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Confirm Password</label>
                            <input type="password" id="v_confirm" name="confirm_password" required class="w-full p-3 rounded-xl input-style transition">
                        </div>
                    </div>
                    <p id="v_error" class="text-red-500 text-xs hidden italic">Passwords do not match!</p>
                    <button type="submit" class="w-full bg-gradient-to-r from-cyan-500 to-purple-600 text-white py-4 rounded-xl font-bold hover:opacity-90 transition shadow-lg">Submit Enterprise Application</button>
                </form>

                <form id="customerForm" action="registration" method="POST" class="space-y-6 hidden" onsubmit="return validatePasswords('customer')">
                    <input type="hidden" name="user_type" value="customer">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Full Name</label>
                            <input type="text" name="full_name" required class="w-full p-3 rounded-xl input-style transition">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Email</label>
                            <input type="email" name="personal_email" required class="w-full p-3 rounded-xl input-style transition">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Password</label>
                            <input type="password" id="c_pass" name="password" required class="w-full p-3 rounded-xl input-style transition">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Confirm Password</label>
                            <input type="password" id="c_confirm" name="confirm_password" required class="w-full p-3 rounded-xl input-style transition">
                        </div>
                    </div>
                    <p id="c_error" class="text-red-500 text-xs hidden italic">Passwords do not match!</p>
                    <button type="submit" class="w-full bg-white text-black py-4 rounded-xl font-bold hover:bg-cyan-400 transition shadow-lg">Create Secure Account</button>
                </form>
            </div>
        </div>
    </main>

    <script>
        function switchTab(type) {
            const vForm = document.getElementById('vendorForm'), cForm = document.getElementById('customerForm');
            const vTab = document.getElementById('vendorTab'), cTab = document.getElementById('customerTab');
            if (type === 'vendor') {
                vForm.classList.remove('hidden'); cForm.classList.add('hidden');
                vTab.classList.add('tab-active'); vTab.classList.remove('text-slate-500');
                cTab.classList.remove('tab-active'); cTab.classList.add('text-slate-500');
            } else {
                cForm.classList.remove('hidden'); vForm.classList.add('hidden');
                cTab.classList.add('tab-active'); cTab.classList.remove('text-slate-500');
                vTab.classList.remove('tab-active'); vTab.classList.add('text-slate-500');
            }
        }

        function validatePasswords(type) {
            const pass = (type === 'vendor') ? document.getElementById('v_pass').value : document.getElementById('c_pass').value;
            const confirm = (type === 'vendor') ? document.getElementById('v_confirm').value : document.getElementById('c_confirm').value;
            const errorMsg = (type === 'vendor') ? document.getElementById('v_error') : document.getElementById('c_error');
            if (pass !== confirm) { errorMsg.classList.remove('hidden'); return false; }
            errorMsg.classList.add('hidden'); return true;
        }
    </script>
</body>
</html>
