const connexion_btn = document.getElementById('connexion');
const inscription_btn = document.getElementById('inscription');

connexion_btn.addEventListener('click', (e)=>{
    e.preventDefault();
    document.getElementById('form_content').innerHTML = `
                        <div>
                            <label for="email" class="block text-gray-700">Mail</label>
                            <input type="email" name="email" id="email" placeholder="Enterez un mail" class="w-full px-4 py-3 rounded-lg placeholder:text-[#d06119] bg-[#fae9aa]/50 mt-2 border border-[#d06119] focus:border-[#fae9aa] focus:bg-white focus:outline-none" autofocus autocomplete>
                        </div>
                        <div class="mt-2">
                            <label for="password" class="block text-gray-700">Mot de passe</label>
                            <input type="password" name="password" id="password" placeholder="Enterez votre mot de passe" minlength="6" class="w-full px-4 py-3 rounded-lg placeholder:text-[#d06119] bg-[#fae9aa]/50 mt-2 border border-[#d06119] focus:border-[#fae9aa]
                                    focus:bg-white focus:outline-none" autocomplete="off">
                        </div>
    `;
    inscription_btn.setAttribute('type', 'button');
    connexion_btn.setAttribute('type', 'submit');
    document.getElementsByTagName('title')[0].innerText = 'Connexion';
    document.getElementsByTagName('h1')[0].innerText = 'Connexion';
});

inscription_btn.addEventListener('click', (e)=>{
    e.preventDefault();
    document.getElementById('form_content').innerHTML = `
                            <div class="grid grid-cols-2 gap-x-2">
                                <label for="prenom" class="block text-gray-700">Prénom</label> <!--[#057b43] vert [#fae9aa] beige -->
                                <label for="nom" class="block text-gray-700">Nom</label>
                                <input type="text" name="prenom" id="prenom" placeholder="Enterez votre prénom" class="w-full px-4 py-3 rounded-lg placeholder:text-[#d06119] bg-[#fae9aa]/50 mt-2 border border-[#d06119] focus:border-[#fae9aa] focus:bg-white focus:outline-none" autofocus autocomplete required>
                                <input type="text" name="nom" id="nom" placeholder="Enterez votre nom" class="w-full px-4 py-3 rounded-lg placeholder:text-[#d06119] bg-[#fae9aa]/50 mt-2 border border-[#d06119] focus:border-[#fae9aa] focus:bg-white focus:outline-none" autofocus autocomplete required>
                            </div>

                            <div class="mt-2">
                                <label for="role" class="block text-gray-700">Rôle</label>
                                <select name="role" id="role" class="w-full px-4 py-3 rounded-lg text-[#d06119] bg-[#fae9aa]/50 mt-2 border border-[#d06119] focus:border-[#fae9aa] focus:bg-white focus:outline-none" autofocus>
                                    <option value="guide">Guide</option>
                                    <option value="visiteur">Visiteur</option>
                                </select>
                            </div>

                            <div class="mt-2">
                                <label for="email" class="block text-gray-700">Mail</label>
                                <input type="email" name="email" id="email" placeholder="Enterez un mail" class="w-full px-4 py-3 rounded-lg placeholder:text-[#d06119] bg-[#fae9aa]/50 mt-2 border border-[#d06119] focus:border-[#fae9aa] focus:bg-white focus:outline-none" autofocus autocomplete required>
                            </div>

                            <div class="mt-2 grid grid-cols-2 gap-x-2">
                                <label for="password" class="block text-gray-700">Mot de passe</label>
                                <label for="password" class="block text-gray-700">Confirmation mot de passe</label>
                                <input type="password" name="password" id="password" placeholder="Enterez votre mot de passe" minlength="6" class="w-full px-4 py-3 rounded-lg placeholder:text-[#d06119] bg-[#fae9aa]/50 mt-2 border border-[#d06119] focus:border-[#fae9aa]
                                        focus:bg-white focus:outline-none" autocomplete="off" required>
                                <input type="password" name="password_confirm" id="password_confirm" placeholder="Confirmez votre mot de passe" minlength="6" class="w-full px-4 py-3 rounded-lg placeholder:text-[#d06119] bg-[#fae9aa]/50 mt-2 border border-[#d06119] focus:border-[#fae9aa]
                                        focus:bg-white focus:outline-none" autocomplete="off" required>
                            </div>
    `;
    inscription_btn.setAttribute('type', 'submit');
    connexion_btn.setAttribute('type', 'button');
    document.getElementsByTagName('title')[0].innerText = 'Inscription';
    document.getElementsByTagName('h1')[0].innerText = 'Inscription';
});