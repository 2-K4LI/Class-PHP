# PHP sur Windows

Installer PHP et lancer un serveur local

---

## 📥 Étape 1 : Télécharger et Installer PHP

1. Va sur le site officiel :  
   👉 [https://windows.php.net/download](https://windows.php.net/download)

2. Télécharge la version **Thread Safe (x64)** au format **ZIP** (ex : `php-8.x.x-Win32-vs17-x64.zip`).

3. **Décompresse** le contenu dans un dossier, par exemple :  
   `C:\php`

---

## ⚙️ Étape 2 : Ajouter PHP au système (Path)

1. Dans Windows, cherche :  
   **"Modifier les variables d’environnement système"**

2. Clique sur **Variables d’environnement...**

3. Dans **Variables système**, sélectionne `Path` → **Modifier...**

4. Clique sur **Nouveau**, ajoute :  
   `C:\php`

5. Clique sur **OK** pour tout fermer.

6. Redémarre **CMD** ou **PowerShell**.

---

## 🚀 Étape 3 : Lancer le serveur local PHP

1. Ouvre **CMD** ou **PowerShell**.

2. Place-toi dans ton dossier de projet avec `cd`, par exemple :

```powershell
cd C:\Users\TonNom\Documents\MonProjetPHP
php -S localhost:8000

```