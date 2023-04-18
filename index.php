<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathieu Estienne | Développeur Web - Web Designer à Valenciennes</title>
    <link rel="stylesheet" href="./assets/styles/index.css">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="./assets/styles/responsive.css">
</head>

<body>
    <?php require_once './partials/header.php'; ?>

    <header id="accueil">
        <div class="header_container">
            <div class="header_text">
                <h1 class="site_title">Mathieu ESTIENNE</h1>
                <h2 class="site_subtitle">Développeur Web</h2>
                <h2 class="site_subtitle">UI Designer</h2>
                <a class="header_button">Découvrez-moi</a>
            </div>
            <div class="header_image">
                <img src="./assets/img/mathieu_estienne.png" alt="Mathieu Estienne, Développeur Web - UI Designer" class="profile_picture">
            </div>
        </div>
    </header>

    <section class="presentation" id="presentation">
        <div class="presentation_container">
            <img src="./assets/img/logo.svg" alt="Mathieu Estienne, Développeur Web - UI Designer" class="presentation_logo">
            <p class="presentation_text">Bonjour, je suis Mathieu Estienne, Développeur Web et UI Designer. Passioné d'informatique
                depuis l'adolescence, j'ai fait mes premières armes avec Linux. Après une formation de Développeur Web et Web Mobile
                chez WebForce3 et l'obtention de mon Bac +2, j'ai souhété acquérir des compétences en UI-UX Design ainsi qu'en gestion de projet.
                J'ai donc suivi la formation de Chargé de Projet Digital chez WebForce3.
            </p>
        </div>
    </section>

    <section class="skills" id="competences">
        <div class="skills_container">
            <h3 class="section_title">MES COMPETENCES</h3>
            <div class="skills_details">
                <div class="developpement_skills">
                    <h4 class="skill_title">FRONT-END</h4>
                    <p class="skill_name">HTML</p>
                    <div class="skill_bar">
                        <div class="percent_95"></div>
                    </div>
                    <p class="skill_name">CSS</p>
                    <div class="skill_bar">
                        <div class="percent_95"></div>
                    </div>
                    <p class="skill_name">JAVASCRIPT / JQUERY </p>
                    <div class="skill_bar">
                        <div class="percent_90"></div>
                    </div>
                    <p class="skill_name">BOOTSTRAP</p>
                    <div class="skill_bar">
                        <div class="percent_85"></div>
                    </div>
                    <p class="skill_name">REACT</p>
                    <div class="skill_bar">
                        <div class="percent_75"></div>
                    </div>
                    <h4 class="skill_title">BACK-END</h4>
                    <p class="skill_name">PHP</p>
                    <div class="skill_bar">
                        <div class="percent_90"></div>
                    </div>
                    <p class="skill_name">SQL</p>
                    <div class="skill_bar">
                        <div class="percent_90"></div>
                    </div>
                    <p class="skill_name">SYMFONY</p>
                    <div class="skill_bar">
                        <div class="percent_85"></div>
                    </div>
                    <h4 class="skill_title">CMS</h4>
                    <p class="skill_name">WORDPRESS</p>
                    <div class="skill_bar">
                        <div class="percent_90"></div>
                    </div>
                </div>
                <div class="other_skills">
                    <h4 class="skill_title">SUITE ADOBE</h4>
                    <p class="skill_name">ADOBE PHOTOSHOP</p>
                    <div class="skill_bar">
                        <div class="percent_85"></div>
                    </div>
                    <p class="skill_name">ADOBE ILLUSTRATOR</p>
                    <div class="skill_bar">
                        <div class="percent_80"></div>
                    </div>
                    <p class="skill_name">ADOBE XD</p>
                    <div class="skill_bar">
                        <div class="percent_95"></div>
                    </div>
                    <p class="skill_name">ADOBE PREMIER RUSH</p>
                    <div class="skill_bar">
                        <div class="percent_95"></div>
                    </div>
                    <p class="skill_name">ADOBE PREMIERE PRO</p>
                    <div class="skill_bar">
                        <div class="percent_85"></div>
                    </div>
                    <p class="skill_name">ADOBE AFTER EFFECTS</p>
                    <div class="skill_bar">
                        <div class="percent_80"></div>
                    </div>
                    <img src="./assets/img/illustration.png" alt="Image d'illustration" class="illustration_img">
                </div>
            </div>
            <a href="./assets/pdf/cv_mathieu_estienne.pdf" target="_blank" class="cv_button">Voir mon CV</a>
        </div>
    </section>

    <script src="./assets/scripts/script.js"></script>
</body>

</html>