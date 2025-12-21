<!DOCTYPE html>
<?php
    include 'connexionBD.php';
    session_start();
?>
<html class="light" lang="fr">
    <head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Visites Guidées</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    </head>
    <body class="bg-[#f5f8f6] text-[#111812] transition-colors duration-200 font-['Inter', 'sans-serif']">
        <div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
            <!-- Header -->
            <div class="relative flex w-full flex-col bg-gradient-to-r from-red-600 to-green-500 border-b border-[#f0f4f2] ">
                <div class="layout-container flex h-full grow flex-col">
                    <div class="flex flex-1 justify-center">
                        <div class="layout-content-container flex flex-col max-w-[1280px] flex-1 w-full">
                            <header class="flex items-center justify-between whitespace-nowrap px-4 lg:px-10 py-4">
                                <div class="flex items-center gap-4 text-white">
                                    <div class="size-8 text-[##13ec5b]">
                                        <span class="material-symbols-outlined text-3xl text-[#13ec5b]">pets</span>
                                    </div>
                                    <h2 class="text-white text-lg font-bold leading-tight tracking-[-0.015em]">Répertoire des visites</h2>
                                </div>
                                <div class="hidden lg:flex flex-1 justify-end gap-8">
                                    <div class="flex items-center gap-9">
                                        <a class="text-white text-sm font-medium leading-normal hover:text-[#13ec5b] transition-colors" href="animaux.php">Animaux</a>
                                        <a class="text-white text-sm font-medium leading-normal hover:text-[#13ec5b] transition-colors" href="">Visites</a>
                                        <a class="text-white text-sm font-medium leading-normal hover:text-[#13ec5b] transition-colors" href="reservations.php">Réservations</a>
                                        <a class="text-white text-sm font-medium leading-normal hover:text-[#13ec5b] transition-colors" href="fiche.php" target="_blank">À propos d'ASSAD</a>
                                    </div>
                                    <a href="deconnexion.php" class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-6 bg-[#13ec5b] text-[#111813] text-sm font-bold leading-normal tracking-[0.015em] hover:bg-[#0fd650] transition-colors">
                                        <span class="truncate">Déconnexion</span>
                                    </a>
                                </div>
                                <div class="lg:hidden flex items-center">
                                    <button class="p-2 text-[#111813] dark:text-white">
                                        <span class="material-symbols-outlined">menu</span>
                                    </button>
                                </div>
                            </header>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Content Wrapper -->
            <main class="flex-1 flex flex-col items-center w-full">
                <!-- Hero Section -->
                <div class="w-full max-w-[1280px] px-4 md:px-10 py-6">
                    <div class="@container">
                        <div class="flex min-h-[400px] flex-col gap-6 bg-cover bg-center bg-no-repeat rounded-xl items-center justify-center p-8 relative overflow-hidden group" data-alt="Immersive zoo landscape with vibrant green jungle foliage" style='background-image: linear-gradient(rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.6) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuBn-9uQMe1VglgGQLIi6bwsAigMgXpZ7qoPa_vL92hpC5E8iC6Q9h99TAyvuBvq0XGRslzhuTExu9izlrCe7eDOFsYqa5UdCRww0boq7HQst0ZY__h6yHSypNfTvw6ETy_r-gXu3PGoh-Dpj29qpouIUzjCpBSRbQyDcYpAuaRkF9hG3XCSS6uyfKsE5gHXn92l4d5n1eV-o5eSBGhL_vl6yCY4W8y5V-S16MQ-iO4xOvo1rXsYoFeJ7HGaKFUHNiLs3UPuGoosiWk");'>
                            <div class="flex flex-col gap-3 text-center z-10 max-w-2xl">
                                <h1 class="text-white text-4xl md:text-6xl font-black leading-tight tracking-[-0.033em] drop-shadow-md">
                                    Explorez le Zoo Autrement
                                </h1>
                                <h2 class="text-gray-100 text-lg font-normal leading-normal drop-shadow-sm">
                                    Des safaris matinaux aux visites nocturnes, vivez des moments inoubliables au plus près des animaux avec nos guides experts.
                                </h2>
                            </div>
                            <div class="flex gap-4 z-10 mt-4">
                                <a href="#Rechercher_visites" class="flex items-center justify-center rounded-lg h-12 px-6 bg-[#0df233] text-[#111812] text-base font-bold hover:scale-105 transition-transform shadow-lg">
                                    <span>Explorer</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Search & Filter Bar -->
                <div id="Rechercher_visites" class="w-full max-w-[1280px] px-4 md:px-10 sticky top-[72px] z-40">
                    <div class="bg-white rounded-xl shadow-md p-4 mb-8 border border-gray-100">
                        <div class="flex flex-col lg:flex-row gap-4 items-center justify-between">
                            <!-- Search Input -->
                            <div class="w-full">
                                <label class="flex w-full items-center h-12 rounded-lg bg-[#f0f5f1] border-2 border-transparent focus-within:border-[#0df233] transition-colors overflow-hidden">
                                    <div class="text-[#608a67] flex items-center justify-center pl-4 pr-2">
                                        <span class="material-symbols-outlined">search</span>
                                    </div>
                                    <input class="flex-1 h-full bg-transparent border-none focus:ring-0 text-[#111812] placeholder:text-[#608a67] text-base font-normal" placeholder="Rechercher une visite"/>
                                </label>
                            </div>
                            <!-- Filters Chips -->
                            <!-- <div class="flex flex-wrap gap-3 w-full lg:w-auto justify-start lg:justify-end">
                            <button class="group flex h-10 items-center justify-center gap-x-2 rounded-lg bg-[#f0f5f1] hover:bg-[#0df233]/20 transition-colors px-4 border border-transparent hover:border-[#0df233]/50">
                            <span class="material-symbols-outlined text-[#0df233] group-hover:text-[#111812] transition-colors text-[20px]">calendar_month</span>
                            <span class="text-[#111812] text-sm font-medium">Date</span>
                            <span class="material-symbols-outlined text-[#111812] text-[20px]">expand_more</span>
                            </button>
                            <button class="group flex h-10 items-center justify-center gap-x-2 rounded-lg bg-[#f0f5f1] hover:bg-[#0df233]/20 transition-colors px-4 border border-transparent hover:border-[#0df233]/50">
                            <span class="material-symbols-outlined text-[#0df233] group-hover:text-[#111812] transition-colors text-[20px]">pets</span>
                            <span class="text-[#111812] text-sm font-medium">Animaux</span>
                            <span class="material-symbols-outlined text-[#111812] text-[20px]">expand_more</span>
                            </button>
                            <button class="group flex h-10 items-center justify-center gap-x-2 rounded-lg bg-[#f0f5f1] hover:bg-[#0df233]/20 transition-colors px-4 border border-transparent hover:border-[#0df233]/50">
                            <span class="material-symbols-outlined text-[#0df233] group-hover:text-[#111812] transition-colors text-[20px]">schedule</span>
                            <span class="text-[#111812] text-sm font-medium">Durée</span>
                            <span class="material-symbols-outlined text-[#111812] text-[20px]">expand_more</span>
                            </button>
                            <button class="group flex h-10 items-center justify-center gap-x-2 rounded-lg bg-[#f0f5f1] hover:bg-[#0df233]/20 transition-colors px-4 border border-transparent hover:border-[#0df233]/50">
                            <span class="material-symbols-outlined text-[#0df233] group-hover:text-[#111812] transition-colors text-[20px]">euro</span>
                            <span class="text-[#111812] text-sm font-medium">Prix</span>
                            <span class="material-symbols-outlined text-[#111812] text-[20px]">expand_more</span>
                            </button>
                            </div> -->
                        </div>
                    </div>
                </div>

                <!-- Tours Grid -->
                <div id="Visites" class="w-full max-w-[1280px] px-4 md:px-10 pb-20">
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                        <?php

                        $sql = "SELECT id_visite, titre_visite, dateheure, langue, capacite_max, statut, duree, prix, nom_user
                                FROM VISITES INNER JOIN UTILISATEURS ON id_guide = id_user";
                        $stmt = mysqli_prepare($connexion, $sql);
                        // mysqli_stmt_bind_param($stmt, "",);
                        mysqli_stmt_execute($stmt);
                        $results = mysqli_stmt_get_result($stmt);
                        while($visite = mysqli_fetch_assoc($results)){
                            // $currentDateHeure = date('Y-m-d').' '.date('H:i:s');
                            $status = ($visite['statut']==false) ? 'terminée':'en cours';//($visite['dateheure'] <= $currentDateHeure) ? 'terminée':'en cours'; // statut définit dans le bd.
                            $disabledLook = ($status == 'terminée') ? ' opacity-50 pointer-events-none':'';
                            $statusLook = ($status == 'terminée') ? 'bg-slate-900/70 text-white ':'bg-[#0df233] text-[#111812] ';
                            echo "
                                <div class='flex flex-col rounded-xl overflow-hidden bg-white shadow-sm hover:shadow-xl transition-shadow duration-300 group border border-gray-100{$disabledLook}'>
                                    <div class='relative h-10 w-full overflow-hidden'>
                                        <div class='absolute top-3 left-3 z-10'>
                                            <span class='{$statusLook}text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider shadow-sm'>$status</span>
                                        </div>
                                    </div>
                                    <div class='flex flex-col flex-1 p-5 gap-3'>
                                        <!-- Titre + prix -->
                                        <div class='flex flex-col'>
                                        <h3 class='text-[#111812] text-xl font-bold leading-tight items-start gap-2'>
                                            ".$visite['titre_visite']."
                                        </h3>
                                        <div class='flex justify-end items-baseline'>
                                            <span class='text-lg font-bold text-[#0df233]'>".$visite['prix']." MAD</span>
                                            <span class='text-xs text-gray-500'>/pers.</span>
                                        </div>
                                    </div>

                                    <!-- Infos visite : guide / date / heure / places dispo -->
                                    <div class='flex flex-col gap-2 text-sm text-gray-600'>
                                        <div class='flex items-center gap-2'>
                                            <span class='material-symbols-outlined text-[18px]'>person</span>
                                            <span>Guide : ".$visite['nom_user']."</span>
                                        </div>
                                        <div class='flex items-center gap-2'>
                                            <span class='material-symbols-outlined text-[18px]'>schedule</span>
                                            <span>".$visite['dateheure']."</span>
                                        </div>
                                        <!--
                                        <div class='flex items-center gap-2'>
                                            <span class='material-symbols-outlined text-[18px] text-emerald-600'>chair</span>
                                            <span>X places disponibles</span>
                                        </div>
                                        -->
                                        <div class='flex items-center gap-2'>
                                            <span class='material-symbols-outlined text-[18px]'>group</span>
                                            <span>Capacité max : ".$visite['capacite_max']."</span>
                                        </div>
                                        </div>

                                        <!-- Durée et bouton -->
                                        <div class='flex items-center justify-between text-sm text-gray-500 mt-2'>
                                        <div class='flex items-center gap-1'>
                                            <span class='material-symbols-outlined text-[18px]'>schedule</span>
                                            <span>".$visite['duree']." min</span>
                                        </div>
                                    </div>
                                    <form method='GET'>
                                        <input type='number' name='visiteAreserver' value=".$visite['id_visite']." class='hidden'>
                                        <button type='submit' class='mt-3 w-full flex items-center justify-center rounded-lg h-10 bg-[#111812] text-white text-sm font-bold hover:bg-[#0df233] hover:text-[#111812] transition-colors'>
                                            Réserver
                                        </button>
                                    </form>
                                </div>
                            </div>
                            ";
                        }
                        mysqli_stmt_close($stmt);
                        ?>
                    </div>
                </div>
            </main>
        </div>
        <!-- Footer Section -->
        <footer class="bg-[#102216] border-t border-[#f0f4f2]">
            <div class="max-w-[1280px] mx-auto px-4 lg:px-10 py-12">
                <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                    <div class="flex items-center gap-2 text-[#111813]">
                        <span class="material-symbols-outlined text-[#13ec5b] text-2xl">pets</span>
                        <span class="font-bold text-lg text-gray-300">ZOO ASSAD</span>
                    </div>
                    <div class="flex gap-8 flex-wrap justify-center">
                        <a class="text-sm font-medium text-gray-600 hover:text-[#13ec5b] transition-colors" href="#">Mentions légales</a>
                        <a class="text-sm font-medium text-gray-600 hover:text-[#13ec5b] transition-colors" href="#">Politique de confidentialité</a>
                        <a class="text-sm font-medium text-gray-600 hover:text-[#13ec5b] transition-colors" href="#">Cookies</a>
                        <a class="text-sm font-medium text-gray-600 hover:text-[#13ec5b] transition-colors" href="#">Aide</a>
                    </div>
                    <p class="text-xs text-gray-400">© NEXTLINE 2025 Tous droits réservés.</p>
                </div>
            </div>
        </footer>
         <!-- Form réservation -->
        <?php
        if(isset($_GET['visiteAreserver'])){
            $id_visite = $_GET['visiteAreserver'];

            $sql = "SELECT titre_visite, dateheure, langue, capacite_max, duree, prix, nom_user
                    FROM VISITES INNER JOIN UTILISATEURS ON id_guide = id_user
                    WHERE id_visite = ?";
                    // titre_etape, description_etape, ordre_etape
                    // INNER JOIN ETAPES ON id_visite = visite_id
                    // ORDER BY ordre_etape

            $stmt = mysqli_prepare($connexion, $sql);
            mysqli_stmt_bind_param($stmt, "i", $id_visite);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $visite = mysqli_fetch_assoc($result);
            if ($visite) {
    echo "
  <div class='fixed inset-0 bg-black/70 backdrop-blur-sm z-50 flex items-center justify-center p-4'>
    <div class='max-w-3xl w-full bg-white rounded-2xl shadow-lg border border-slate-200 max-h-[90vh] flex flex-col'>

      <!-- En-tête visite -->
      <div class='px-6 py-4 border-b border-slate-200 flex flex-col gap-2 md:flex-row md:items-center md:justify-between'>
        <div>
          <h2 class='text-xl font-bold text-slate-900'>
            ".$visite['titre_visite']."
          </h2>
          <p class='text-sm text-slate-500'>
            Guidée par ".$visite['nom_user']." • Langue : ".$visite['langue']."
          </p>
        </div>
        <div class='text-right text-sm'>
          <p class='text-slate-700 font-semibold'>
            ".$visite['dateheure']."
          </p>
          <p class='text-slate-500'>
            Durée : ".$visite['duree']." min
          </p>
          <p class='text-emerald-600 font-bold'>
            ".$visite['prix']." MAD / pers.
          </p>
          <p class='text-xs text-slate-500'>
            Capacité max : ".$visite['capacite_max']."
          </p>
        </div>
      </div>

      <!-- Contenu scrollable (timeline + form) -->
      <div class='px-6 py-6 space-y-5 overflow-y-auto'>
        <!-- Timeline des étapes -->
        <div>
          <h3 class='text-sm font-semibold text-slate-700 mb-3'>Parcours de la visite</h3>
          <ol class='relative border-s border-slate-200 ms-4 space-y-4'>
";

$sqlEtapes = "SELECT titre_etape, description_etape, ordre_etape
              FROM etapes
              WHERE visite_id = ?
              ORDER BY ordre_etape";

$stmtEtapes = mysqli_prepare($connexion, $sqlEtapes);
mysqli_stmt_bind_param($stmtEtapes, "i", $id_visite);
mysqli_stmt_execute($stmtEtapes);
$results = mysqli_stmt_get_result($stmtEtapes);

while ($etape = mysqli_fetch_assoc($results)) {
    echo "
      <li class='ms-4'>
        <span class='absolute -start-1.5 mt-1 flex h-3 w-3 items-center justify-center rounded-full border bg-white border-emerald-500'></span>
        <span class='inline-flex items-center rounded-full bg-emerald-50 px-2 py-0.5 text-xs font-semibold text-emerald-700 mb-1'>
          Étape ".$etape['ordre_etape']."
        </span>
        <h4 class='text-sm font-bold text-slate-900'>
          ".$etape['titre_etape']."
        </h4>
        <p class='text-xs text-slate-600 mt-1 leading-relaxed'>
          ".$etape['description_etape']."
        </p>
      </li>
    ";
}

mysqli_stmt_close($stmtEtapes);

$sqlReservations = "SELECT SUM(nbpersonnes) as total
                    FROM `reservations`
                    WHERE visite_id = ?";

$stmtReservations = mysqli_prepare($connexion, $sqlReservations);
mysqli_stmt_bind_param($stmtReservations, "i", $id_visite);
mysqli_stmt_execute($stmtReservations);
$result2 = mysqli_stmt_get_result($stmtReservations);
$totalPersonnes = mysqli_fetch_assoc($result2);
$disabled = ($totalPersonnes['total'] == $visite['capacite_max']) ? ' disabled':'';
$placeDispos = $visite['capacite_max'] - $totalPersonnes['total']??0;

echo "
          </ol>
        </div>

        <!-- Sélection du nombre de places -->
        <div class='border-t border-slate-200 pt-4'>
          <form method='post' action='confirmReservation.php' class='space-y-4'>

            <div class='flex items-center gap-2 text-sm text-slate-700'>
              <label for='nb_places' class='font-medium'>Nombre de places à réserver :</label>
              <input
                type='number'
                id='nb_places'
                name='nb_places'
                min='1'
                max='$placeDispos'
                value='1'
                class='w-20 rounded-lg border border-slate-300 px-2 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500'
                $disabled
              >";
            if($disabled != '')
               echo "<p class='text-red-500'>pas de places disponibles.</p>";
    
    echo "
            </div>

            <input type='hidden' name='id_visite' value='".$id_visite."'>
            <input type='hidden' name='id_user' value='".$_SESSION['id']."'>

            <!-- Ligne séparée pour les boutons -->
            <div class='flex flex-col gap-3 sm:flex-row sm:justify-end'>
              <a href='closeReservation.php'
                 class='w-full sm:w-auto px-4 h-10 rounded-lg bg-red-100 text-red-700 font-bold text-sm hover:bg-red-600 hover:text-white transition-colors flex items-center justify-center gap-2'>
                Annuler
              </a>

              <button type='submit'
                      class='w-full sm:w-auto px-4 h-10 rounded-lg bg-emerald-500 text-white font-bold text-sm hover:bg-emerald-600 transition-colors flex items-center justify-center gap-2'$disabled>
                Confirmer la réservation
              </button>
            </div>
          </form>
        </div>
      </div> <!-- fin contenu scrollable -->

    </div> <!-- fin carte -->
  </div>   <!-- fin overlay -->
";

}
mysqli_stmt_close($stmt);

        }
        ?>
    </body>
</html>