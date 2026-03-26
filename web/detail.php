<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails Plats</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">

    <?php if ($plats): ?>
    <div class="max-w-2xl w-full bg-white rounded-3xl shadow-xl overflow-hidden">
        <div class="bg-[#1E272E] p-8 text-white">
            <div class="flex justify-between items-start">
                <span class="bg-[#00A8CC] text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                    <?= htmlspecialchars($plats['code']) ?>
                </span>
                <a href="<?=WEBROOT?>?page=listeplat" class="text-gray-400 hover:text-white transition">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </a>
            </div>
            <h1 class="text-3xl font-bold mt-4"><?= htmlspecialchars($plats['nom']) ?></h1>
        </div>

        <div class="p-8">
            <h3 class="text-gray-400 text-xs font-black uppercase tracking-widest mb-4">prix</h3>
            <p class="text-gray-700 leading-relaxed text-lg">
                <?= nl2br(htmlspecialchars($plats['prix'])) ?>
            </p>
        </div>
        <div class="p-8">
            <h3 class="text-gray-400 text-xs font-black uppercase tracking-widest mb-4">Categorie</h3>
            <p class="text-gray-700 leading-relaxed text-lg">
                <?= nl2br(htmlspecialchars($plats['categorie'])) ?>
            </p>
        </div>
        <div class="p-8">
            <h3 class="text-gray-400 text-xs font-black uppercase tracking-widest mb-4">Disponibilite</h3>
            <p class="text-gray-700 leading-relaxed text-lg">
                <?= nl2br(htmlspecialchars($plats['disponibilite'])) ?>
            </p>
        </div>
        

        <div class="p-6 bg-gray-50 border-t border-gray-100 flex justify-end">
            <a href="<?=WEBROOT?>?page=listeplat" 
               class="bg-[#1E272E] text-white px-6 py-2 rounded-xl font-bold hover:bg-gray-800 transition">
               <i class="fa-solid fa-arrow-left mr-2"></i> Retour
            </a>
        </div>
    </div>
    <?php else: ?>
        <div class="text-center">
            <h2 class="text-2xl font-bold text-red-500">Aplat introuvable</h2>
            <a href="<?=WEBROOT?>?page=listeplat" class="text-blue-500 underline">Retourner à l'accueil</a>
        </div>
    <?php endif; ?>

</body>
</html>
