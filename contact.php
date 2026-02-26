<?php
// Logic for handling contact form submission can be placed here
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $inquiry_type = $_POST['inquiry_type'];
    $message = $_POST['message'];

    // Future: Integrate with Azure SendGrid or PHPMailer
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | BlockAI Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 font-sans text-slate-900">

    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 h-16 flex justify-between items-center">
            <div class="cursor-pointer" onclick="window.location.href='index.php'">
                <span class="text-2xl font-black text-indigo-600">BlockAI</span>
                <span class="text-2xl font-light text-slate-400 ml-1">Solution</span>
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="index.php" class="text-sm font-bold text-slate-600 hover:text-indigo-600">Home</a>
                <a href="services.php" class="text-sm font-bold text-slate-600 hover:text-indigo-600">Services</a>
                <a href="vendor_list.php" class="text-sm font-bold text-slate-600 hover:text-indigo-600">Vendor Directory</a>
                <a href="case-studies.php" class="text-sm font-bold text-slate-600 hover:text-indigo-600">Case Studies</a>
                <a href="about.php" class="text-sm font-bold text-slate-600 hover:text-indigo-600">Strategy</a>
                <a href="contact.php" class="text-sm font-bold text-indigo-600">Contact</a>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto py-20 px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
            
            <div>
                <h1 class="text-5xl font-black mb-8">Get in <span class="text-indigo-600">Touch</span></h1>
                <p class="text-slate-500 text-lg mb-10 leading-relaxed">Have questions about our AI verification process or global scaling? Our strategy team is here to help.</p>
                
                <div class="space-y-6">
                    <div class="flex items-center gap-4 p-6 bg-white rounded-3xl shadow-sm border border-slate-100">
                        <i class="fa-solid fa-envelope text-indigo-600 text-xl"></i>
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase">Support Email</p>
                            <p class="font-bold">support@blockaisolution.com</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-6 bg-white rounded-3xl shadow-sm border border-slate-100">
                        <i class="fa-solid fa-location-dot text-indigo-600 text-xl"></i>
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase">Global Office</p>
                            <p class="font-bold">London, United Kingdom</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-8 md:p-12 rounded-[40px] shadow-2xl border border-slate-100">
                <form action="contact.php" method="POST" class="space-y-5">
                    <input type="text" name="full_name" placeholder="Full Name" required class="w-full p-4 bg-slate-50 rounded-2xl outline-none focus:ring-2 focus:ring-indigo-600 transition">
                    
                    <input type="email" name="email" placeholder="Email Address" required class="w-full p-4 bg-slate-50 rounded-2xl outline-none focus:ring-2 focus:ring-indigo-600 transition">
                    
                    <select name="inquiry_type" class="w-full p-4 bg-slate-50 rounded-2xl outline-none focus:ring-2 focus:ring-indigo-600 transition">
                        <option value="general">Inquiry Type</option>
                        <option value="vendor">AI Vendor Registration</option>
                        <option value="partnership">Enterprise Partnership</option>
                    </select>
                    
                    <textarea name="message" placeholder="Your Message" rows="4" required class="w-full p-4 bg-slate-50 rounded-2xl outline-none focus:ring-2 focus:ring-indigo-600 transition"></textarea>
                    
                    <button type="submit" class="w-full bg-indigo-600 text-white py-4 rounded-2xl font-bold shadow-lg shadow-indigo-200 hover:bg-indigo-700 transition">
                        Submit Inquiry
                    </button>
                </form>
            </div>
        </div>
    </main>

    <footer class="mt-20 py-10 text-center text-slate-400 text-xs border-t border-slate-100 uppercase tracking-widest bg-white">
        <div class="mb-4 flex flex-wrap items-center justify-center gap-5 text-[11px] font-bold tracking-wide normal-case">
            <a href="services.php" class="hover:text-indigo-600">Services</a>
            <a href="registration.php" class="hover:text-indigo-600">Vendor Registration</a>
            <a href="whitepaper.php" class="hover:text-indigo-600">Whitepaper</a>
            <a href="privacy-policy.php" class="hover:text-indigo-600">Privacy Policy</a>
            <a href="terms.php" class="hover:text-indigo-600">Terms</a>
        </div>
        &copy; <?php echo date("Y"); ?> BlockAI Solution | Global Operations Center
    </footer>

</body>
</html>
