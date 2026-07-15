## Projet

Portfolio brouillon personnel en PHP (variables, tableaux, boucles `foreach`, `htmlspecialchars`),
déployé sur N0C via Git et GitHub.

- **Dépôt GitHub :** https://github.com/justabuilder13/tp-deploiement-n0c
- **Site en ligne :** https://examen-deploiement.e2596219.webdevmaisonneuve.ca/

///

## 1. Récupération du projet existant

Initialisation d'un dépôt Git local avec git init dans le dossier du projet.

## 2. Modification du projet

Remplacement complet de `index.php` et de `assets/style.css` par le portfolio
personnel travaillé durant la première et deuxième session du cours. La variable `$nomEtudiant` contient mon nom, et le contenu est généré
dynamiquement en PHP (tableaux de compétences et de projets affichés avec `foreach`).

## 3. Création du dépôt GitHub public

Nouveau dépôt public créé sur GitHub, **vide** (sans README ni .gitignore) :
https://github.com/justabuilder13/tp-deploiement-n0c

## 4. Configuration du remote

Ajout du remote pointant vers mon dépôt personnel, puis vérification :

```bash
git remote add origin https://github.com/justabuilder13/tp-deploiement-n0c.git
git remote -v
```

## 5. Envoi du projet vers GitHub

```bash
git add .
git commit -m "Portfolio Draft - First Commit"
git branch -M main
git push -u origin main
```

## 6. Création du sous-domaine sur N0C

Dans le panneau N0C (Domaines -> Sous-domaines), création du sous-domaine
`examen-deploiement.e2596219.webdevmaisonneuve.ca`. N0C a créé automatiquement
le répertoire racine `~/examen-deploiement`.

## 7. Récupération du projet sur N0C

Connexion SSH au serveur, puis clonage du dépôt directement dans le
répertoire racine du sous-domaine :

```bash
ssh ssh [numéro_compte_n0c]@[serveur].n0c.com -p 5022
cd ~/examen-deploiement
git clone https://github.com/justabuilder13/tp-deploiement-n0c.git .
```

## 8. Mise en ligne

Le site est accessible à l'adresse :
https://examen-deploiement.e2596219.webdevmaisonneuve.ca/

## 9. Workflow de mise à jour

Pour modifier le portfolio après le déploiement initial :

1. Modifier ce code localement
2. `git add .` -> `git commit -m "message"` → `git push` (PC vers GitHub)
3. `git pull` dans `~/examen-deploiement` sur le serveur (GitHub vers N0C)

Le code n'est jamais modifié directement sur le serveur.

## 10. Difficultés rencontrées lors de l'examen final

- **Premier commit vide** : oubli du `git add` avant le commit. Corrigé en
  ajoutant les fichiers puis en recommitant.
- **Sous-domaine affichant « Index of »** : N0C avait créé le répertoire racine
  du sous-domaine à la racine du home (`~/examen-deploiement`) et non dans
  `public_html`. Résolu en clonant le dépôt directement dans ce répertoire.
- **Dossier `public_html` non vide** : un premier clone avait été fait dans un
  sous-dossier de `public_html` avant la création du sous-domaine; il a été
  supprimé pour garder l'arborescence propre.
