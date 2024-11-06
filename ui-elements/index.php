<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
          rel="stylesheet">
    <title>Ui Elements</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body x-data="{ night: false }" class="flex items-start py-24 justify-center"
      :class="night ? 'bg-[#0F0F0F]' : 'bg-gray-200'">
    <div class="w-full max-w-screen-2xl mx-auto flex flex-col items-center justify-center">
        <?php include './snippets/drag-drop.php' ?>
    </div>
</body>
</html>
