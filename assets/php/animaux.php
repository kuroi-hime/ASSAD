<!DOCTYPE html>
<?php
    include 'connexionBD.php';
    session_start();
?>
<html class="light" lang="fr">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <title>Répertoire des Animaux</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    </head>
    <body class="bg-[#f6f8f6] font-['Inter', 'sans-serif'] text-[#111813] dark:text-white overflow-x-hidden">
        <!-- TopNavBar -->
        <div class="relative flex w-full flex-col bg-gradient-to-r from-red-600 to-green-500 border-b border-[#f0f4f2] dark:border-[#2a3c30]">
            <div class="layout-container flex h-full grow flex-col">
                <div class="flex flex-1 justify-center">
                    <div class="layout-content-container flex flex-col max-w-[1280px] flex-1 w-full">
                        <header class="flex items-center justify-between whitespace-nowrap px-4 lg:px-10 py-4">
                            <div class="flex items-center gap-4 text-white"><!--[#111813]-->
                                <div class="size-8 text-[##13ec5b]">
                                    <span class="material-symbols-outlined text-3xl text-[#13ec5b]">pets</span>
                                </div>
                                <h2 class="text-white text-lg font-bold leading-tight tracking-[-0.015em]">Répertoire des Animaux</h2>
                            </div>
                            <div class="hidden lg:flex flex-1 justify-end gap-8">
                                <div class="flex items-center gap-9">
                                    <a class="text-white text-sm font-medium leading-normal hover:text-[#13ec5b] transition-colors" href="">Animaux</a>
                                    <a class="text-white text-sm font-medium leading-normal hover:text-[#13ec5b] transition-colors" href="visites.php">Visites</a>
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
        <!-- HeroSection -->
        <div class="relative flex flex-col w-full">
            <div class="layout-container flex h-full grow flex-col">
                <div class="flex flex-1 justify-center py-5 px-4 lg:px-10">
                    <div class="layout-content-container flex flex-col max-w-[1280px] flex-1 w-full">
                        <div class="@container">
                            <div class="">
                                <div class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat rounded-xl items-center justify-center p-4" data-alt="Stunning panoramic view of African wildlife in a savanna sunset" style='background-image: linear-gradient(rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.5) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuB8QiGR1cZZJ7M5s-_5NW40Tv5vvkOt_Gxlkb-MXUiri_Lu2GvdMHKZ3-SeQ0Bl0lqve73skcrfLERQqo3qVeHdUG8mLorkr1ZTmTCPkLoKwp0N-VN4I_A1LZjOg6H3496rNvt8yZvI_gHLtryDYNgdnrccPw0yvc5eVsSznlL5o2LchYGhSION0rPfinaqcGOMvBGSstQSGhUR5scKRY4FqOu_CEcekD7d2sqmPyMp8z7bTgexFoNmm_1lqDHRGZb1_i7CIRzwb98");'>
                                    <div class="flex flex-col gap-3 text-center max-w-[720px]">
                                        <h1 class="text-white text-4xl font-black leading-tight tracking-[-0.033em] md:text-5xl lg:text-6xl">
                                            Nos Animaux
                                        </h1>
                                        <h2 class="text-white text-base font-medium leading-relaxed md:text-lg">
                                            Explorez la biodiversité fascinante de nos réserves et découvrez la faune sauvage dans son habitat naturel.
                                        </h2>
                                    </div>
                                    <div class="flex gap-4 flex-wrap justify-center">
                                        <a href="visites.php" class="flex min-w-[140px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-12 px-6 bg-[#13ec5b] text-[#111813] text-base font-bold leading-normal tracking-[0.015em] hover:bg-[#0fd650] transition-colors shadow-lg">
                                            <span class="truncate">Réserver vos visites dés maintenant</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search and Filters Section -->
        <div class="relative flex flex-col w-full">
            <div class="layout-container flex h-full grow flex-col">
                <div class="flex flex-1 justify-center py-5 px-4 lg:px-10">
                    <div class="layout-content-container flex flex-col max-w-[1280px] flex-1 w-full">
                        <div class="flex flex-col lg:flex-row gap-6 justify-between items-end lg:items-center pb-6 border-b border-[#e0e6e2] dark:border-[#2a3c30]">
                            <div class="flex h-12 flex-col w-full lg:w-auto flex-1 max-w-[600px]">
                                <!-- SearchBar -->
                                <div class="flex h-full w-full flex-1 items-stretch rounded-xl shadow-sm">
                                    <div class="text-[#61896f] flex border-none bg-white items-center justify-center pl-4 rounded-l-xl border-r-0">
                                        <span class="material-symbols-outlined">search</span>
                                    </div>
                                    <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111813] dark:text-white focus:outline-0 focus:ring-0 border-none bg-white dark:bg-[#1a2c20] focus:border-none h-full placeholder:text-[#61896f] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal" placeholder="Rechercher (ex: Lion, Éléphant, Zèbre)" value=""/>
                                </div>
                            </div>
                            <!-- Chips -->
                            <div class="flex items-baseline h-12 w-full lg:w-auto">
                                <p class="text-sm font-bold text-[#61896f] mb-3 uppercase tracking-wider pr-4">Filtres:</p>
                                <?php
                                    $habitatActuel = $_POST['habitat'] ?? ''; 
                                    $paysActuel = $_POST['pays'] ?? '';
                                ?>
                                <form method="POST" class="flex gap-3 h-full flex-wrap">
                                    <select name="habitat" class="h-full shrink-0 rounded-xl bg-white border border-[#e0e6e2] p-x-4 hover:border-[#13ec5b] transition-colors shadow-sm">
                                        <option value=''>Tous les habitats</option>
                                        <?php
                                            $sql = "SELECT id_habitat, nom_habitat FROM HABITATS";
                                            $stmt = mysqli_prepare($connexion, $sql);

                                            mysqli_stmt_execute($stmt);

                                            $result = mysqli_stmt_get_result($stmt);

                                            while($row = mysqli_fetch_assoc($result)){
                                                $habitat = $row['nom_habitat'];

                                                // garder la valeur sélectionnée après submit
                                                $selected = ($habitatActuel == $habitat) ? 'selected' : '';
                                                echo "<option value='$habitat' $selected>$habitat</option>";
                                            }

                                            mysqli_stmt_close($stmt);
                                        ?>
                                    </select>
                                    <select name="pays" class="h-full shrink-0 rounded-xl bg-white border border-[#e0e6e2] p-x-4 hover:border-[#13ec5b] transition-colors shadow-sm">
                                        <option value=''>Tous les pays</option>
                                        <?php
                                            $sql = "SELECT DISTINCT paysorigine FROM ANIMAUX";
                                            $stmt = mysqli_prepare($connexion, $sql);

                                            mysqli_stmt_execute($stmt);

                                            $result = mysqli_stmt_get_result($stmt);

                                            while($row = mysqli_fetch_assoc($result)){
                                                $papaysorigine = $row['paysorigine'];

                                                //Garder la valeur séléctionnée après submit:
                                                $selected = ($paysActuel == $papaysorigine) ? 'selected':'';
                                                echo "<option value='$papaysorigine'>$papaysorigine</option>";
                                            }

                                            mysqli_stmt_close($stmt);
                                        ?>
                                    </select>
                                    <button type="submit" class="flex items-center justify-center rounded-lg h-12 px-6 bg-[#0df233] text-[#111812] text-base font-bold hover:scale-105 transition-transform shadow-lg">
                                            filtrer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Animal Grid -->
        <div class="relative flex flex-col w-full bg-[#f6f8f6]">
            <div class="layout-container flex h-full grow flex-col">
                <div class="flex flex-1 justify-center py-5 px-4 lg:px-10">
                    <div class="layout-content-container flex flex-col max-w-[1280px] flex-1 w-full">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mb-12">
                            <?php

                                $sql = "SELECT id_animal, nom_animal, espèce, alimentation, image, paysorigine, description_animal, nom_habitat FROM animaux
                                    LEFT JOIN habitats on habitat_id = id_habitat
                                    WHERE nom_habitat like ? and paysorigine like ?"; 

                                $stmt = mysqli_prepare($connexion, $sql);

                                // préparer les patterns pour LIKE
                                $habitatLike = "%".$habitatActuel."%";
                                $paysLike    = "%".$paysActuel."%";

                                mysqli_stmt_bind_param($stmt, "ss", $habitatLike, $paysLike);

                                mysqli_stmt_execute($stmt);

                                $result = mysqli_stmt_get_result($stmt);

                                while($row = mysqli_fetch_assoc($result)){
                                    $id_animal = $row['id_animal'];
                                    $image = $row['image'];
                                    $alimentation = $row['alimentation'];
                                    $nom = $row['nom_animal'];
                                    $espece = $row['espèce'];
                                    $nom_habitat = $row['nom_habitat'];
                                    $pays_origin = $row['paysorigine'];

                                    echo "
                                        <div class='flex flex-col bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group border border-transparent'>
                                            <div class='h-64 bg-gray-200 bg-cover bg-center relative group-hover:scale-105 transition-transform duration-500' data-alt='Close up of a male lion with a full mane' style='background-image: url($image)'>
                                                <div class='absolute top-4 right-4 bg-black/50 backdrop-blur-md px-3 py-1 rounded-full text-white text-xs font-bold uppercase tracking-wider border border-white/20'>
                                                    $alimentation
                                                </div>
                                            </div>
                                            <div class='p-5 flex flex-col gap-3 flex-1'>
                                                <div class='flex justify-between items-start'>
                                                    <div>
                                                        <h3 class='text-xl font-bold text-[#111813] group-hover:text-[#13ec5b] transition-colors'>$nom</h3>
                                                        <p class='text-sm italic text-gray-500 font-serif'>$espece</p>
                                                    </div>
                                                </div>
                                                <div class='flex flex-wrap gap-2 mt-1'>
                                                    <span class='px-2.5 py-1 rounded bg-[#f0f4f2] text-[#111813] text-xs font-semibold flex items-center gap-1'>
                                                        <span class='material-symbols-outlined text-[14px]'>
                                                            landscape
                                                        </span>
                                                        $nom_habitat
                                                    </span>
                                                    <span class='px-2.5 py-1 rounded bg-[#f0f4f2] text-[#111813] text-xs font-semibold flex items-center gap-1'>
                                                        <span class='material-symbols-outlined text-[14px]'>
                                                            public
                                                        </span>
                                                        $pays_origin
                                                    </span>
                                                </div>
                                                <div class='mt-auto pt-4'>
                                                    <form method='GET'>
                                                        <input type='text' name='animal' value='$id_animal' class='hidden'>
                                                        <button type='submit' class='w-full h-10 rounded-lg bg-[#13ec5b]/10 text-[#111813] font-bold text-sm hover:bg-[#13ec5b] hover:text-[#111813] transition-colors flex items-center justify-center gap-2 group/btn'>
                                                            En savoir plus
                                                            <span class='material-symbols-outlined text-[18px] group-hover/btn:translate-x-1 transition-transform'>arrow_forward</span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    ";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="bg-[#102216] border-t border-[#f0f4f2] dark:border-[#2a3c30]">
            <div class="max-w-[1280px] mx-auto px-4 lg:px-10 py-12">
                <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                    <div class="flex items-center gap-2 text-[#111813] dark:text-white">
                        <span class="material-symbols-outlined text-[#13ec5b] text-2xl">pets</span>
                        <span class="font-bold text-lg text-gray-300">ZOO ASSAD</span>
                    </div>
                    <div class="flex gap-8 flex-wrap justify-center">
                        <a class="text-sm font-medium text-gray-600 dark:text-gray-400 hover:text-[#13ec5b] transition-colors" href="#">Mentions légales</a>
                        <a class="text-sm font-medium text-gray-600 dark:text-gray-400 hover:text-[#13ec5b] transition-colors" href="#">Politique de confidentialité</a>
                        <a class="text-sm font-medium text-gray-600 dark:text-gray-400 hover:text-[#13ec5b] transition-colors" href="#">Cookies</a>
                        <a class="text-sm font-medium text-gray-600 dark:text-gray-400 hover:text-[#13ec5b] transition-colors" href="#">Aide</a>
                    </div>
                    <p class="text-xs text-gray-400">© NEXTLINE 2025 Tous droits réservés.</p>
                </div>
            </div>
        </footer>
        <!-- Form détails animal -->
        <?php
        if(isset($_GET['animal'])){
            $id_animal = (int) $_GET['animal'];

            $sql = "SELECT nom_animal, espèce, alimentation, image, paysorigine, description_animal, habitat_id, nom_habitat, typeclimat, description_habitat, zonezoo
                    FROM ANIMAUX INNER JOIN HABITATS ON habitat_id = id_habitat
                    WHERE id_animal = ?";

            $stmt = mysqli_prepare($connexion, $sql);

            mysqli_stmt_bind_param($stmt, 'i', $id_animal);

            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            $animal = mysqli_fetch_assoc($result);

            mysqli_stmt_close($stmt);

            if($animal)
                echo "
                    <div id='animaldetails' class='fixed inset-0 bg-black/70 backdrop-blur-sm z-50 flex items-center justify-center p-4'>
                        <div class='bg-white/95 rounded-3xl p-2 max-w-xl w-full shadow-2xl'>
                            <a href='closeDetails.php' class='absolute top-4 right-4 text-3xl text-gray-500 hover:text-red-500'>&times;</a>

                            <div class='overflow-y-auto max-h-[90vh]'>
                                <div class='flex flex-col bg-white rounded-xl overflow-hidden shadow-sm border border-[#e0e6e2]'>
                                    <!-- Image + type alimentaire -->
                                    <div class='h-64 bg-gray-200 bg-cover bg-center relative' style='background-image: url(".$animal["image"].")'>
                                    <div class='absolute top-4 right-4 bg-black/50 backdrop-blur-md px-3 py-1 rounded-full text-white text-xs font-bold uppercase tracking-wider border border-white/20'>
                                        ".$animal["alimentation"]."
                                    </div>
                                    </div>

                                    <!-- Infos principales animal -->
                                    <div class='p-5 flex flex-col gap-3'>
                                    <div class='flex justify-between items-start'>
                                        <div>
                                        <h3 class='text-xl font-bold text-[#111813]'>
                                            ".$animal["nom_animal"]."
                                        </h3>
                                        <p class='text-sm italic text-gray-500 font-serif'>
                                            ".$animal["espèce"]."
                                        </p>
                                        </div>
                                    </div>

                                    <!-- Badges habitat / pays / zone -->
                                    <div class='flex flex-wrap gap-2 mt-1'>
                                        <span class='px-2.5 py-1 rounded bg-[#f0f4f2] text-[#111813] text-xs font-semibold flex items-center gap-1'>
                                        <span class='material-symbols-outlined text-[14px]'>landscape</span>
                                        ".$animal['nom_habitat']."
                                        </span>
                                        <span class='px-2.5 py-1 rounded bg-[#f0f4f2] text-[#111813] text-xs font-semibold flex items-center gap-1'>
                                        <span class='material-symbols-outlined text-[14px]'>sunny</span>
                                        ".$animal["typeclimat"]."
                                        </span>
                                        <span class='px-2.5 py-1 rounded bg-[#f0f4f2] text-[#111813] text-xs font-semibold flex items-center gap-1'>
                                        <span class='material-symbols-outlined text-[14px]'>public</span>
                                        ".$animal["paysorigine"]."
                                        </span>
                                        <span class='px-2.5 py-1 rounded bg-[#f0f4f2] text-[#111813] text-xs font-semibold flex items-center gap-1'>
                                        <span class='material-symbols-outlined text-[14px]'>map</span>
                                        Zone : ".$animal["zonezoo"]."
                                        </span>
                                    </div>

                                    <!-- Description animal -->
                                    <div class='mt-3'>
                                        <h4 class='text-sm font-bold text-[#111813] mb-1'>Description de l’animal</h4>
                                        <p class='text-sm text-gray-700 leading-relaxed'>
                                        ".$animal["description_animal"]."
                                        </p>
                                    </div>

                                    <!-- Description de l'habitat -->
                                    <div class='mt-3'>
                                        <h4 class='text-sm font-bold text-[#111813] mb-1'>Habitat : ".$animal["nom_habitat"]."</h4>
                                        <p class='text-sm text-gray-700 leading-relaxed'>
                                        ".$animal["description_habitat"]."
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <a href='closeDetails.php' class='mt-4 block w-full h-10 rounded-lg bg-[#13ec5b]/10 text-[#111813] font-bold text-sm hover:bg-[#13ec5b] hover:text-[#111813] transition-colors flex items-center justify-center gap-2'>
                                Fermer
                            </a>
                        </div>
                    </div>
                </div>
                ";
        }
        
        ?>
    </body>
</html>