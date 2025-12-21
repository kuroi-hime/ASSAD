<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Inscription</title>
    </head>
    <body class="h-screen w-screen m-0 p-0">
        <section class="flex flex-col md:flex-row h-full w-full items-center">
            <div class="bg-[#fae9aa] hidden md:flex items-end md:w-1/2 h-full">
                <img src="../images/assad.webp" alt="ASSAD" class="w-full h-fit object-contain">
            </div>

            <div class="bg-white w-full md:max-w-md md:mx-auto md:mx-0 md:w-1/2 h-screen px-6 lg:px-16 xl:px-12
                    flex items-center justify-center">
                <div class="w-full h-100 mx-auto">
                    <h1 class="text-[#d06119] text-xl md:text-2xl font-bold leading-tight mt-6">Inscription</h1>
                    <form class="mt-4 w-full" action="addUser.php" method="POST">
                        <div id="form_content">
                            <div class="">
                                <label for="nom" class="block text-gray-700">Nom utilisateur</label>
                                <input type="text" name="nom" id="nom" placeholder="Entrez votre nom" class="w-full px-4 py-3 rounded-lg placeholder:text-[#d06119] bg-[#fae9aa]/50 mt-2 border border-[#d06119] focus:border-[#fae9aa] focus:bg-white focus:outline-none" autofocus autocomplete required>
                            </div>

                            <div class="mt-2">
                                <label for="role" class="block text-gray-700">Rôle</label>
                                <select name="role" id="role" class="w-full px-4 py-3 rounded-lg text-[#d06119] bg-[#fae9aa]/50 mt-2 border border-[#d06119] focus:border-[#fae9aa] focus:bg-white focus:outline-none" autofocus>
                                    <option value="Guide">Guide</option>
                                    <option value="Visiteur">Visiteur</option>
                                </select>
                            </div>

                            <div class="mt-2">
                                <label for="email" class="block text-gray-700">Mail</label>
                                <input type="email" name="email" id="email" placeholder="Entrez un mail" class="w-full px-4 py-3 rounded-lg placeholder:text-[#d06119] bg-[#fae9aa]/50 mt-2 border border-[#d06119] focus:border-[#fae9aa] focus:bg-white focus:outline-none" autofocus autocomplete required>
                            </div>

                            <div class="mt-2">
                                <label for="password" class="block text-gray-700">Mot de passe</label>
                                <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe" minlength="6" class="w-full px-4 py-3 rounded-lg placeholder:text-[#d06119] bg-[#fae9aa]/50 mt-2 border border-[#d06119] focus:border-[#fae9aa]
                                        focus:bg-white focus:outline-none" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="flex justify-between gap-x-2 mt-8">
                            <button type="submit" id="inscription" class="w-[50%] block bg-[#d06119] hover:bg-[#d06119]/90 focus:bg-[#d06119]/90 text-white font-semibold rounded-lg
                                px-4 py-3">
                                S'inscrire
                            </button>
                            <a href="connexion.php" class="w-[50%]">
                                <button type="button" id="connexion" class="w-full block bg-white hover:bg-[#fae9aa] focus:bg-[#fae9aa] text-[#d06119] font-semibold rounded-lg px-4 py-3 border border-[#d06119]">
                                    Se connecter
                                </button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>