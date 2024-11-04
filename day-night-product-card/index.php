<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
          rel="stylesheet">
    <title>Product Card</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body x-data="{ night: false }" class="flex items-center justify-center"
      :class="night ? 'bg-[#0F0F0F]' : 'bg-gray-200'">
    <div class="w-full max-w-screen-2xl mx-auto flex flex-col items-center justify-center">
    <div class="w-1/4 bg-white rounded-lg overflow-hidden">
        <img x-show="!night" class="aspect-square object-contain" src="../images/products/shoe/main.png">
        <img x-show="night" class="aspect-square object-contain" src="../images/products/shoe/dark.png">
        <div class="p-8 group" :class="night ? 'bg-[#1B1B1B] text-white' : 'bg-white'">
            <div class="relative">
                <div class="absolute flex opacity-0 items-center space-x-2 transition-opacity group-hover:opacity-100">
                    <img class="h-10 w-10 rounded cursor-pointer" src="../images/products/shoe/01.png">
                    <img class="h-10 w-10 rounded cursor-pointer" src="../images/products/shoe/02.png">
                    <img class="h-10 w-10 rounded cursor-pointer" src="../images/products/shoe/03.png">
                    <img class="h-10 w-10 rounded cursor-pointer" src="../images/products/shoe/04.png">
                    <img class="h-10 w-10 rounded cursor-pointer" src="../images/products/shoe/05.png">
                    <span class="text-sm">+ 9 More</span>
                </div>
                <h5 class="font-medium group-hover:opacity-0 mb-2">Nike Air Max Dn</h5>
                <h5 class="group-hover:opacity-0">£154.95</h5>
            </div>
        </div>
    </div>
    <div class="mt-8 space-x-2">
        <button x-on:click="night = false" class="p-4 bg-white rounded-lg space-x-2"
                :class="night ? 'opacity-25' : ''">
            <i x-show="!night" class="fa-regular fa-check"></i>
            <span>Day</span>
        </button>
        <button x-on:click="night = true" class="p-4 bg-white rounded-lg space-x-2"
                :class="!night ? 'opacity-25' : ''">
            <i x-show="night" class="fa-regular fa-check"></i>
            <span>Night</span>
        </button>
    </div>
</div>
</body>
</html>
