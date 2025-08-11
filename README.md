# EMMA42 WordPress Plugins

![EMMA42 Plugins](EMMA42-plugins.png)

<div align="center">

[![GitHub stars](https://img.shields.io/github/stars/malekjendoubi21/EMMA42-plugins.svg?style=social&label=Star)](https://github.com/malekjendoubi21/EMMA42-plugins)
[![GitHub forks](https://img.shields.io/github/forks/malekjendoubi21/EMMA42-plugins.svg?style=social&label=Fork)](https://github.com/malekjendoubi21/EMMA42-plugins/fork)
[![WordPress](https://img.shields.io/badge/WordPress-5.0+-blue.svg)](https://wordpress.org/)
[![Elementor](https://img.shields.io/badge/Elementor-3.0+-green.svg)](https://elementor.com/)

</div>

Collection de widgets Elementor personnalisés pour WordPress développés par Malek Jendoubi.

## 📋 Table des matières

- [Description](#description)
- [Plugins inclus](#plugins-inclus)
- [Installation](#installation)
- [Utilisation](#utilisation)
- [Captures d'écran](#captures-décran)
- [Fonctionnalités](#fonctionnalités)
- [Prérequis](#prérequis)
- [Structure du projet](#structure-du-projet)
- [Développement](#développement)
- [Contribution](#contribution)
- [Support](#support)
- [Licence](#licence)

## 🎯 Description

EMMA42-plugins est une collection de widgets Elementor personnalisés conçus pour améliorer l'expérience utilisateur sur les sites WordPress. Ces plugins offrent des solutions visuelles modernes et responsives pour présenter des informations de manière attrayante.

## 📦 Plugins inclus

### 1. Widget Steps - How It Works
**Fichier principal :** `widget-steps/how-it-works-steps.php`

Un widget pour afficher des étapes de processus avec des icônes et des titres, parfait pour expliquer "Comment ça marche".

**Fonctionnalités :**
- Affichage horizontal des étapes
- Icônes personnalisables (Font Awesome)
- Flèches de navigation entre les étapes
- Design responsive
- Titres éditables

### 2. Widget Xpertise - Why Choose Xpertise
**Fichier principal :** `widget-xpertise/why-choose-xpertise.php`

Un widget pour présenter les avantages d'un service avec un design moderne et professionnel.

**Fonctionnalités :**
- Cartes sombres avec icônes blanches
- Navigation Prev/Next optionnelle
- Design responsive
- 4 éléments par défaut : 100% Independent, Swiss Standards, 24-48 Hour Delivery, Detailed Reports
- Personnalisation complète via Elementor

## 🚀 Installation

### Installation manuelle

1. **Clonez le repository :**
   ```bash
   git clone https://github.com/malekjendoubi21/EMMA42-plugins.git
   ```

2. **Copiez les dossiers de plugins :**
   ```bash
   cp -r EMMA42-plugins/plugins/* /path/to/wordpress/wp-content/plugins/
   ```

3. **Activez les plugins dans WordPress :**
   - Allez dans `WordPress Admin > Plugins`
   - Activez "How It Works Steps"
   - Activez "Why Choose Xpertise"

### Installation via WordPress

1. Téléchargez les fichiers `.zip` depuis les releases
2. Allez dans `WordPress Admin > Plugins > Add New > Upload Plugin`
3. Uploadez et activez chaque plugin

## 📖 Utilisation

### Dans Elementor

1. **Ouvrez l'éditeur Elementor** sur une page ou un post
2. **Recherchez les widgets** dans la catégorie "General" :
   - "How It Works Steps"
   - "Why Choose Xpertise"
3. **Glissez-déposez** le widget souhaité sur votre page
4. **Personnalisez** les contenus via le panneau de contrôle :
   - Titre de section
   - Icônes (Font Awesome ou SVG)
   - Textes et descriptions
   - Couleurs et styles

### Personnalisation

Chaque widget offre des options de personnalisation :

- **Contenu :** Titres, descriptions, icônes
- **Style :** Couleurs de fond, couleurs de texte, espacements
- **Responsive :** Adaptations automatiques pour mobile et tablette

## 📱 Captures d'écran

### How It Works Widget
![How It Works Widget](screenshots/how-it-works-widget.png)

Le widget "How It Works" affiche les étapes de processus de manière horizontale avec des icônes et des flèches de navigation :
```
[Schedule] → [Inspect] → [Report] → [Fix] → [Peace of Mind]
```

### Why Choose Xpertise Widget
![Why Choose Xpertise Widget](screenshots/why-choose-xpertise-widget.png)

Le widget "Why Choose Xpertise" présente les avantages avec des cartes sombres et des icônes blanches :
```
[🏆 100% Independent] [🛡️ Swiss Standards] [⏰ 24-48 Hour] [📷 Detailed Reports]
```

### Aperçu dans Elementor
![Elementor Editor](screenshots/elementor-editor.png)

*Vue des widgets dans l'éditeur Elementor avec les options de personnalisation*

### Design Responsive
![Responsive Design](screenshots/responsive-design.png)

*Adaptation automatique sur mobile et tablette*

## ✨ Fonctionnalités

### Fonctionnalités communes
- ✅ Compatible avec Elementor
- ✅ Design responsive
- ✅ Icônes personnalisables
- ✅ Animations CSS au survol
- ✅ Code optimisé et sécurisé
- ✅ Support multilingue (WordPress i18n)

### Widget Steps spécifiques
- ✅ Flèches de navigation automatiques
- ✅ Affichage horizontal/vertical responsive
- ✅ Jusqu'à 5 étapes personnalisables

### Widget Xpertise spécifiques
- ✅ Navigation Prev/Next optionnelle
- ✅ Cartes avec design sombre moderne
- ✅ 4 éléments optimisés
- ✅ Centrage parfait du contenu

## 🔧 Prérequis

- **WordPress :** 5.0 ou plus récent
- **Elementor :** 3.0 ou plus récent
- **PHP :** 7.4 ou plus récent
- **Navigateurs supportés :** Chrome, Firefox, Safari, Edge

## 📁 Structure du projet

```
EMMA42-plugins/
├── plugins/
│   ├── widget-steps/
│   │   ├── how-it-works-steps.php    # Plugin principal
│   │   ├── widget-how-it-works.php   # Classe du widget
│   │   └── style.css                 # Styles CSS
│   └── widget-xpertise/
│       ├── why-choose-xpertise.php   # Plugin principal
│       ├── widget-why-choose-xpertise.php # Classe du widget
│       └── style.css                 # Styles CSS
├── screenshots/                      # Images pour le README
│   ├── EMMA42-plugins.png            # Image principale du projet
│   ├── how-it-works-widget.png       # Capture du widget Steps
│   ├── why-choose-xpertise-widget.png # Capture du widget Xpertise
│   ├── elementor-editor.png          # Vue dans Elementor
│   └── responsive-design.png         # Design responsive
└── README.md
```

### 📸 Guide pour ajouter des images

Pour ajouter des images à votre repository GitHub :

1. **Créez un dossier `screenshots/`** à la racine de votre repository
2. **Ajoutez vos images** avec les noms suivants :
   - `EMMA42-plugins.png` - Image principale du projet
   - `how-it-works-widget.png` - Capture du widget Steps
   - `why-choose-xpertise-widget.png` - Capture du widget Xpertise
   - `elementor-editor.png` - Vue dans l'éditeur Elementor
   - `responsive-design.png` - Vue responsive mobile/tablette

3. **Formats recommandés :**
   - Format : PNG ou JPG
   - Résolution : Haute qualité pour une bonne visibilité
   - Poids : Optimisé pour le web (< 1MB par image)

## 🛠️ Développement

### Environnement de développement

1. **Clonez le repository :**
   ```bash
   git clone https://github.com/malekjendoubi21/EMMA42-plugins.git
   cd EMMA42-plugins
   ```

2. **Installez dans WordPress local :**
   ```bash
   ln -s $(pwd)/plugins/* /path/to/wordpress/wp-content/plugins/
   ```

### Ajouter un nouveau widget

1. Créez un nouveau dossier dans `plugins/`
2. Suivez la structure existante :
   - Fichier principal du plugin
   - Classe du widget étendant `\Elementor\Widget_Base`
   - Fichier CSS pour les styles
3. Enregistrez le widget dans Elementor

### Standards de code

- **PHP :** Suivre les standards WordPress Coding Standards
- **CSS :** Utiliser la méthodologie BEM pour les classes
- **Sécurité :** Toujours utiliser `esc_html()` et vérifier `ABSPATH`

## 🤝 Contribution

Les contributions sont les bienvenues ! Pour contribuer :

1. **Fork** le repository
2. **Créez** une branche pour votre fonctionnalité (`git checkout -b feature/AmazingFeature`)
3. **Committez** vos changements (`git commit -m 'Add some AmazingFeature'`)
4. **Push** vers la branche (`git push origin feature/AmazingFeature`)
5. **Ouvrez** une Pull Request

### Guidelines

- Testez vos modifications sur WordPress et Elementor
- Respectez les standards de code WordPress
- Documentez vos nouvelles fonctionnalités
- Assurez-vous que le code est responsive

## 📞 Support

Pour obtenir de l'aide ou signaler des bugs :

- **Issues GitHub :** [Créer un ticket](https://github.com/malekjendoubi21/EMMA42-plugins/issues)
- **Email :** malek.jendoubi@example.com
- **Documentation :** Consultez les commentaires dans le code

### FAQ

**Q : Les widgets ne s'affichent pas dans Elementor ?**
R : Vérifiez que les plugins sont activés et qu'Elementor est à jour.

**Q : Les icônes ne s'affichent pas ?**
R : Assurez-vous que Font Awesome est chargé ou utilisez des icônes SVG.

**Q : Le design ne s'affiche pas correctement ?**
R : Vérifiez qu'il n'y a pas de conflits CSS avec votre thème.

## 📄 Licence

Ce projet est sous licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails.

---

## 👨‍💻 Auteur

**Malek Jendoubi**
- GitHub: [@malekjendoubi21](https://github.com/malekjendoubi21)
- Projet: [EMMA42-plugins](https://github.com/malekjendoubi21/EMMA42-plugins)

---

### 🌟 Si ce projet vous aide, n'hésitez pas à lui donner une étoile !

[![GitHub stars](https://img.shields.io/github/stars/malekjendoubi21/EMMA42-plugins.svg?style=social&label=Star)](https://github.com/malekjendoubi21/EMMA42-plugins)
[![GitHub forks](https://img.shields.io/github/forks/malekjendoubi21/EMMA42-plugins.svg?style=social&label=Fork)](https://github.com/malekjendoubi21/EMMA42-plugins/fork)
[![GitHub watchers](https://img.shields.io/github/watchers/malekjendoubi21/EMMA42-plugins.svg?style=social&label=Watch)](https://github.com/malekjendoubi21/EMMA42-plugins)

---

**Dernière mise à jour :** Août 2025
