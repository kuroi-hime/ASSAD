<!DOCTYPE html>
<?php
    include 'connexionBD.php';
    session_start();
?>
<html class="light" lang="fr">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <title>Mes Réservations</title>
        <link href="https://fonts.googleapis.com" rel="preconnect"/>
        <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    </head>
    <body class="bg-[#f8fafc] text-slate-900 font-display min-h-screen flex flex-col">
        <header class="sticky top-0 z-50 w-full bg-white border-b border-slate-200">
            <div class="relative flex w-full flex-col bg-gradient-to-r from-red-600 to-green-500 border-b border-[#f0f4f2]">
                <div class="layout-container flex h-full grow flex-col">
                    <div class="flex flex-1 justify-center">
                        <div class="layout-content-container flex flex-col max-w-[1280px] flex-1 w-full">
                            <header class="flex items-center justify-between whitespace-nowrap px-4 lg:px-10 py-4">
                                <div class="flex items-center gap-4 text-white"><!--[#111813]-->
                                    <div class="size-8 text-[#13ec5b]">
                                        <span class="material-symbols-outlined text-3xl text-[#13ec5b]">pets</span>
                                    </div>
                                    <h2 class="text-white text-lg font-bold leading-tight tracking-[-0.015em]">Répertoire des réservations</h2>
                                </div>
                                <div class="hidden lg:flex flex-1 justify-end gap-8">
                                    <div class="flex items-center gap-9">
                                        <a class="text-white text-sm font-medium leading-normal hover:text-[#13ec5b] transition-colors" href="animaux.php">Animaux</a>
                                        <a class="text-white text-sm font-medium leading-normal hover:text-[#13ec5b] transition-colors" href="visites.php">Visites</a>
                                        <a class="text-white text-sm font-medium leading-normal hover:text-[#13ec5b] transition-colors" href="">Réservations</a>
                                        <a class="text-white text-sm font-medium leading-normal hover:text-[#13ec5b] transition-colors" href="fiche.php" target="_blank">À propos d'ASSAD</a>
                                    </div>
                                    <a href="deconnexion.php" class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-6 bg-[#13ec5b] text-[#111813] text-sm font-bold leading-normal tracking-[0.015em] hover:bg-[#0fd650] transition-colors">
                                        <span class="truncate">Déconnexion</span>
                                    </a>
                                </div>
                                <div class="lg:hidden flex items-center">
                                    <button class="p-2 text-[#111813]">
                                        <span class="material-symbols-outlined">menu</span>
                                    </button>
                                </div>
                            </header>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="flex-grow w-full max-w-5xl mx-auto px-4 sm:px-6 py-8">
            <div class="mb-8">
                <h2 class="text-3xl md:text-4xl font-black tracking-tight text-slate-900 mb-2">Mes Réservations</h2>
                <p class="text-lg text-slate-600 max-w-2xl">
                    Retrouvez ici l'historique de vos visites. Partagez votre expérience avec la communauté en notant vos parcours.
                </p>
            </div>
            <!-- Affichage de contenus -->
            <div class="flex flex-col gap-6">
                <!-- carte 1 -->
                <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden transition-all hover:shadow-md">
                    <div class="flex flex-col md:flex-row">
                        <div class="flex-1 p-6 flex flex-col justify-between">
                            <div>
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="text-xl font-bold text-slate-900">Visite guidée : Les Lions d'Afrique</h3>
                                    <span class="material-symbols-outlined text-slate-300">bookmark</span>
                                </div>
                                <div class="flex flex-wrap gap-4 text-sm text-slate-600 mb-4">
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-lg">calendar_today</span>
                                        <span>12 Octobre 2023</span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-lg">schedule</span>
                                        <span>14:00 - 16:00</span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-lg">group</span>
                                        <span>3 participants</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 pt-4 border-t border-slate-100">
                                <p class="text-sm font-semibold text-slate-900 mb-3">Comment s'est passée votre visite ?</p>
                                <div class="bg-slate-50 rounded-lg p-4">
                                    <div class="flex items-center gap-1 mb-3">
                                        <span class="material-symbols-outlined text-slate-300 hover:text-[#0df233] cursor-pointer transition-colors text-2xl font-filled">star</span>
                                        <span class="material-symbols-outlined text-slate-300 hover:text-[#0df233] cursor-pointer transition-colors text-2xl font-filled">star</span>
                                        <span class="material-symbols-outlined text-slate-300 hover:text-[#0df233] cursor-pointer transition-colors text-2xl font-filled">star</span>
                                        <span class="material-symbols-outlined text-slate-300 hover:text-[#0df233] cursor-pointer transition-colors text-2xl font-filled">star</span>
                                        <span class="material-symbols-outlined text-slate-300 hover:text-[#0df233] cursor-pointer transition-colors text-2xl font-filled">star</span>
                                        <span class="ml-2 text-xs text-slate-500 font-medium uppercase tracking-wide">Notez l'expérience</span>
                                    </div>
                                    <div class="flex gap-2">
                                        <input class="flex-1 bg-white border border-slate-200 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-[#0df233] focus:border-transparent outline-none transition-shadow" placeholder="Dites-nous ce que vous en avez pensé..." type="text"/>
                                        <button class="bg-[#0df233] hover:bg-sky-500 text-white px-4 py-2 rounded-lg text-sm font-semibold shadow-sm transition-colors flex items-center gap-2">
                                            <span class="material-symbols-outlined text-lg">send</span>
                                            <span class="hidden sm:inline">Envoyer</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- carte 2 -->
                <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                    <div class="flex flex-col md:flex-row">
                        <!-- <div class="w-full md:w-1/3 lg:w-1/4 h-48 md:h-auto bg-cover bg-center relative" data-alt="Close up of a dolphin swimming in blue water" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC3qhmw6DHYhKg7MrXqr4Jy8yyvxS_MSX9qXbaz061Msr0fBO3Cg8EUhjnvyrC1kDHmtNr4MFRUcHGg3Y8x-piy5viWmj63Yp0HtQu4jDp3l00jOHeddVwSvXQrzmBoRL06eAlVhH5zNqghn6MNGSGgYfcvygEqdAptCjfOyczzXT-B2SxXIElCDlcG1bpsWY9iZm4E2drbkdgfWBK-bM-TspwHdTdxNt0Y0f8zUHsqS8CW00V9kHutLsk-c_itw5jHN2mQL0yygFA");'>
                            <div class="absolute top-3 left-3 bg-slate-900/70 backdrop-blur-sm text-white text-xs font-bold px-2 py-1 rounded">
                                Terminé
                            </div>
                        </div> -->
                        <div class="flex-1 p-6 flex flex-col justify-between">
                            <div>
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="text-xl font-bold text-slate-900">Plongée avec les Dauphins</h3>
                                    <div class="flex items-center gap-1 bg-green-50 text-green-700 px-2 py-1 rounded text-xs font-bold">
                                        <span class="material-symbols-outlined text-base">check_circle</span>
                                        Avis publié
                                    </div>
                                </div>
                                <div class="flex flex-wrap gap-4 text-sm text-slate-600 mb-6">
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-lg">calendar_today</span>
                                        <span>28 Septembre 2023</span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-lg">schedule</span>
                                        <span>10:00 - 12:00</span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-lg">group</span>
                                        <span>2 participants</span>
                                    </div>
                                </div>
                                <div class="bg-slate-50 rounded-lg p-4 border border-slate-100">
                                    <div class="flex items-center gap-1 mb-2">
                                        <span class="material-symbols-outlined text-[#0df233] text-xl" style="font-variation-settings: 'FILL' 1">star</span>
                                        <span class="material-symbols-outlined text-[#0df233] text-xl" style="font-variation-settings: 'FILL' 1">star</span>
                                        <span class="material-symbols-outlined text-[#0df233] text-xl" style="font-variation-settings: 'FILL' 1">star</span>
                                        <span class="material-symbols-outlined text-[#0df233] text-xl" style="font-variation-settings: 'FILL' 1">star</span>
                                        <span class="material-symbols-outlined text-[#0df233] text-xl" style="font-variation-settings: 'FILL' 1">star</span>
                                        <span class="text-slate-400 text-xs ml-2">• Posté le 29 Sept.</span>
                                    </div>
                                    <p class="text-sm text-slate-700 italic">
                                        "Une expérience inoubliable ! Les soigneurs sont passionnés et nous avons appris énormément de choses. Je recommande vivement pour les familles."
                                    </p>
                                </div>
                            </div>
                            <div class="mt-4 flex justify-end">
                                <button class="text-sm text-slate-500 hover:text-[#0df233] font-medium flex items-center gap-1">
                                    <span class="material-symbols-outlined text-lg">edit</span>
                                    Modifier l'avis
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- carte 3 -->
                <?php
                $sql = "SELECT id_visite, titre_visite, dateheure, langue, capacite_max, statut, duree, prix, nom_user, id_reservation, nbpersonnes, date_reservation
                        FROM VISITES INNER JOIN UTILISATEURS ON id_guide = id_user
                        INNER JOIN RESERVATIONS ON id_visite = visite_id
                        WHERE user_id = ?";
                $stmt = mysqli_prepare($connexion, $sql);
                mysqli_stmt_bind_param($stmt, "i", $_SESSION['id']);
                mysqli_stmt_execute($stmt);
                $results = mysqli_stmt_get_result($stmt);
                while($reservation = mysqli_fetch_assoc($results)){
                    $sqlParticipants = "SELECT SUM(nbpersonnes) as total
                                        FROM RESERVATIONS
                                        WHERE visite_id = ?";
                    $stmtParticipants = mysqli_prepare($connexion, $sqlParticipants);
                    mysqli_stmt_bind_param($stmtParticipants, "i", $reservation['id_visite']);
                    mysqli_stmt_execute($stmtParticipants);
                    $result = mysqli_stmt_get_result($stmtParticipants);
                    $participants = mysqli_fetch_assoc($result);
                    mysqli_stmt_close($stmtParticipants);

                    $status = ($reservation['statut'] == false) ? 'passée':'à venir';
                    $statusLook = ($status == 'passée') ? ' bg-slate-900/70':' bg-[#0df233]';

                    echo "
                    <div class='bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden transition-all hover:shadow-md'>
                        <div class='flex flex-col md:flex-row'>
                            <div class='flex-1 p-6 flex flex-col justify-between'>
                                <div>
                                    <div class='relative flex justify-between items-start mb-2'>
                                        <h3 class='text-xl font-bold text-slate-900'>".$reservation['titre_visite']."</h3>
                                        <div class='absolute right-3{$statusLook} backdrop-blur-sm text-white text-xs font-bold px-2 py-1 rounded'>
                                            $status
                                        </div>
                                    </div>
                                    <div class='flex flex-wrap gap-4 text-sm text-slate-600 mb-4'>
                                        <div class='flex items-center gap-1'>
                                            <span class='material-symbols-outlined text-lg'>calendar_today</span>
                                            <span>".$reservation['dateheure']."</span>
                                        </div>
                                        <div class='flex items-center gap-1'>
                                            <span class='material-symbols-outlined text-lg'>chair</span>
                                            <span>".$reservation['nbpersonnes']." réservée(s)</span>
                                        </div>
                                        <div class='flex items-center gap-1'>
                                            <span class='material-symbols-outlined text-lg'>group</span>
                                            <span>".$participants['total']." participants</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Total payé -->
                                <div class='w-fit self-end mt-2 flex items-baseline justify-between gap-4'>
                                    <span class='text-sm font-medium text-slate-600'>Total payé</span>
                                    <div class='flex items-baseline gap-1'>
                                        <span class='text-lg font-bold text-emerald-600'>".$reservation['nbpersonnes']*$reservation['prix']." MAD</span>
                                        <span class='text-xs text-slate-500'>(".$reservation['nbpersonnes']." x ".$reservation['prix']." MAD)</span>
                                    </div>
                                </div>
                                ";
                            if($status == 'passée')
                                echo "
                                <div class='mt-4 flex items-center justify-between pt-4 border-t border-slate-100'>
                                    <div class='flex flex-col'>
                                        <span class='text-sm font-medium text-slate-900'>Vous n'avez pas encore noté cette visite</span>
                                        <span class='text-xs text-slate-500'>Partagez votre avis pour aider les autres visiteurs</span>
                                    </div>
                                    <button class='bg-slate-100 hover:bg-slate-200 text-slate-900 px-5 py-2.5 rounded-lg text-sm font-semibold transition-colors flex items-center gap-2'>
                                        <span class='material-symbols-outlined text-[#0df233] text-xl' style='font-variation-settings: 'FILL' 0'>star</span>
                                        Laisser un avis
                                    </button>
                                </div>";
                    echo "
                            </div>
                        </div>
                    </div>
                    ";
                }
                mysqli_stmt_close($stmt);
                ?>
            </div>
        </main>
    </body>
</html>