# README – Installation de Laragon + Importation de la base `ctflascases`

## 🎯 Objectif
Installer facilement un environnement local (Laragon) pour exécuter un site PHP et importer une base MySQL nommée **ctflascases** via HeidiSQL.

---

## 1) 📥 Installer Laragon

1. Aller sur : https://laragon.org/download  
2. Télécharger **Laragon Full** (Apache + MySQL + PHP).  
3. Installer Laragon avec les options par défaut.

### ✔️ Lancer Laragon
- Ouvrir Laragon  
- Cliquer sur **Start All**  
- Apache et MySQL doivent apparaître en **vert**

---

## 2) 🗄️ Connexion MySQL avec HeidiSQL

### Identifiants par défaut (Laragon)
- **Host :** 127.0.0.1  
- **Port :** 3306  
- **User :** root  
- **Password :** *(vide)*

### 🔌 Connexion
1. Ouvrir HeidiSQL : en haut à gauche -> menu -> outils -> heidiSQL
2. Cliquer sur **Nouvelle session**  
3. tout laisser par défaut
4. Cliquer sur **Ouvrir**

---

## 3) 🧱 Créer la base de données `ctflascases`

Dans HeidiSQL :
1. Clic droit dans la colonne de gauche  
2. **Créer une nouvelle base de données**  
3. Nom : `ctflascases`  
4. Valider

---

## 4) 📤 Importer un fichier SQL dans la base

Si tu as un fichier `ctflascases.sql` :

1. Sélectionner la base `ctflascases` dans HeidiSQL  
2. En haut : **Fichier → Exécuter un fichier SQL…**  
3. Choisir le fichier `.sql`  
4. Cliquer sur **Exécuter**  
👉 Les tables sont automatiquement créées

---

## 5) 🚀 Lancer ton site PHP avec Laragon

1. Mettre ton site dans le dossier : **C:\laragon\www** rajoute le dossier ctflascases ici

## ACCEDER AU SITE

1. allez sur votre navigateur
2. dans la barre de recherche tapez **ctflascases.test**

## BRUTE FORCE

vouz avez un fichier de mot de passe **mdp.txt**
et un fichier de pseudo **user.txt**

servez-vous en afin de bruteforce le mot de passe du site et entrer votre pseudo afin d'apparaitre dans les gagnants !

## AIDE

**regardez comment utiliser WIRESHARK**
**souvenez vous des méthodes GET et POST !**

## BONNE CHANCE

post-scriptum : le faits d'apparaitre avec les gagnants n'as plus trop d'intêrét vus que c'est un site en local :/