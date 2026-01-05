<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exvalio - {{ $title ?? 'Exchange Platform' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        [x-cloak] { display: none !important; }
        body { font-family: 'Inter', sans-serif; background-color: #f8fafc; }
    </style>
</head>
<body x-data="{ sidebarOpen: false }" class="bg-slate-50">
    <div class="flex h-screen overflow-hidden">
        <x-sidebar />

       <div class="flex-1 flex flex-col overflow-hidden">
            <x-header />

            <main class="flex-1 overflow-y-auto">
                <div class="p-4 md:p-8 min-h-[calc(100vh-140px)]">
                    {{ $slot }}
                </div>
                
                <x-footer />
            </main>
        </div>
    </div>
</body>
</html>