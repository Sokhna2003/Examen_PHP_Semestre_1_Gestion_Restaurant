<?php 
    require_once "data.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Tache | listeTache</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <div class="flex h-screen">
        <aside class="w-1/5 bg-[#1E272E] text-white flex flex-col p-6 space-y-8">
            <h1 class="text-2xl font-bold text-[#00A8CC] ">
                <i class="fa-solid fa-check-double mr-2"></i>Gestion Plat
            </h1>
            <nav class="space-y-2">
                <div class="flex items-center p-3 rounded-lg hover:bg-white/10 cursor-pointer transition">
                    <i class="fa-solid fa-house w-6"></i> <span>Dashboard</span>
                </div>
                <div class="flex items-center p-3 rounded-lg bg-[#00A8CC] text-white cursor-pointer">
                    <i class="fa-solid fa-list-check w-6"></i> <span>Mes Plats</span>
                </div>
            </nav>
        </aside>

        <main class="flex-1 flex flex-col overflow-hidden">
            <header class="h-20 bg-white shadow-sm flex items-center justify-between px-8">
                <h2 class="text-xl font-semibold">Espace Utilisateur</h2>
                
                <div class="flex items-center space-x-6 w-1/2 justify-end">
                    <div class="relative w-2/3">
                        <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input type="text" placeholder="Rechercher un plat..." 
                        class="w-full pl-10 pr-4 py-2 bg-gray-100 rounded-full border-none focus:ring-2 focus:ring-[#00A8CC] outline-none transition">
                    </div>
                </div>
            </header>
            <section class="p-8 overflow-y-auto">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-2xl font-bold">Liste des plats</h2>
                    <div class="flex space-x-3">
                        
                        <a href="<?=WEBROOT?>?page=ajouPlat">
                            <button class="px-4 py-2 bg-[#00A8CC] text-white rounded-lg shadow-md hover:bg-[#0092B0] transition font-semibold">
                                Ajouter un plat
                            </button>
                        </a>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden">
                    <table class="w-full text-left border-collapse">
                        <thead class="bg-gray-50 border-b border-gray-100">
                            <tr>
                                <th class="p-4 text-gray-500 font-semibold uppercase text-xs tracking-wider">Code</th>
                                <th class="p-4 text-gray-500 font-semibold uppercase text-xs tracking-wider">Nom</th>
                                <th class="p-4 text-gray-500 font-semibold uppercase text-xs tracking-wider">Prix</th>
                                <th class="p-4 text-gray-500 font-semibold uppercase text-xs tracking-wider">Categorie</th>
                                <th class="p-4 text-gray-500 font-semibold uppercase text-xs tracking-wider">Disponibilite</th>
                                <th class="p-4 text-gray-500 font-semibold uppercase text-xs tracking-wider">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            <?php foreach ($_SESSION['plats'] as $plat) : ?>
                            <tr class="hover:bg-gray-50/50 transition">
                                <td class="p-4 font-bold text-gray-700"><?= $plat['code'] ?></td>
                                <td class="p-4 text-sm text-gray-700"><?= $plat['nom'] ?></td>
                                <td class="p-4 text-sm text-gray-700"><?= $plat['prix'] ?></td>
                                <td class="p-4 text-gray-600 truncate max-w-xs"><?= $plat['categorie'] ?></td>
                                <td class="p-4 text-gray-600 truncate max-w-xs"><?= $plat['disponibilite'] ?></td>
                                <td class="p-4">
                                    <div class="flex items-center space-x-4">
                                        <a href="<?=WEBROOT?>?page=detail&code=<?= $plat['code'] ?>" class="text-blue-500 hover:text-blue-700 transition" title="Détails">
                                            <i class="fa-solid fa-eye text-lg"></i>
                                        </a>
                                        
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>

</body>
</html>
