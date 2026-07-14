<?php
// === DONNÉES ===
$gym_name = "BODY POWER GYM";
$gym_address = "29 Rue Hocine Bouchachi, Bouzareah";
$gym_phone = "0656 15 12 87";
$gym_instagram = "https://www.instagram.com/bodypowergym03/";
$gym_hours = "10h00 - 22h00";
$google_maps_url = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3196.123456789!2d3.0063976!3d36.7864712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fb3a7bfead6a3%3A0x7aa13383851a846d!2sBody%20power%20gym!5e0!3m2!1sfr!2sdz!4v1234567890";

// === IMAGES DE LA GALERIE ===
$gallery_images = [
        "images/salle0.png",
    "images/salle7.png",

"images/salle.jpg",
    "images/salle1.png",
    "images/salle2.png",
    "images/salle3.png",
    "images/salle4.png",
    "images/salle5.png",
    "images/salle6.png"
];
// === PLANNING FEMMES (modifié) ===
$planning_femmes = [
    "Samedi" => "08h00 - 12h00",
    "Mardi" => "15h30 - 19h30",
    "Mercredi" => "17h30 - 19h30",
    "Jeudi" => "08h00 - 12h00",
    "Vendredi" => "14h00 - 18h00"
];

// === PLANNING HOMMES (gardé mais avec vos horaires) ===
$planning_hommes = [
    "Dimanche" => "16h00 - 22h00",
    "Lundi" => ["09h00 - 12h00", "19h00 - 22h00"],
    "Mardi" => "14h00 - 22h00",
    "Mercredi" => ["09h00 - 12h00", "19h00 - 22h00"],
    "Jeudi" => "16h00 - 22h00",
    "Vendredi" => "15h00 - 22h00",
    "Samedi" => ["09h00 - 12h00", "19h00 - 22h00"]
];

// === SERVICES (enlevé MMA, Kick, Judo Kids et Fitness Kids) ===
$services = [
    [
        "nom" => "CrossFit",
        "description" => "Entraînement fonctionnel intense pour repousser vos limites",
        "image" => "images/cross.jpg",
        "tag" => "Intense"
    ],
    [
        "nom" => "Cardio HIIT",
        "description" => "Séances courtes et intenses pour brûler un maximum de calories",
        "image" => "images/cardio.jpg",
        "tag" => "Cardio"
    ],
    [
        "nom" => "Zumba",
        "description" => "Danse et cardio dans une ambiance festive et énergique",
        "image" => "images/zumba.jpg",
        "tag" => "Danse"
    ],
    [
        "nom" => "Pilates (Femmes)",
        "description" => "Renforcement musculaire doux et amélioration de la posture",
        "image" => "images/pilats.jpg",
        "tag" => "Bien-être"
    ]
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $gym_name; ?></title>
    <link rel="icon" type="image/jpg" href="images/logo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        /* ===== RESET ===== */
        * { margin:0; padding:0; box-sizing:border-box; }
        html { scroll-behavior: smooth; }
        body {
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
            background: #ece6df;
            color: #1a1a2e;
            display:flex;
            flex-direction:column;
            min-height:100vh;
            line-height:1.6;
            -webkit-font-smoothing:antialiased;
        }

        /* ===== HEADER ===== */
        header {
            position:fixed;
            top:0;
            left:0;
            width:100%;
            padding:20px 60px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            z-index:1000;
            background: #0b0d10;
            box-shadow: 0 2px 20px rgba(0,0,0,0.3);
        }

        /* ===== LOGO ===== */
        .logo {
            display: flex;
            align-items: center;
        }

        .logo a {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }

        .logo-img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid rgba(255,255,255,0.15);
            box-shadow: 0 0 20px rgba(59,110,143,0.2);
            transition: all 0.3s ease;
        }

        .logo-img:hover {
            transform: scale(1.05);
            border-color: #3b6e8f;
            box-shadow: 0 0 30px rgba(59,110,143,0.4);
        }

        .logo-text {
            font-size: 22px;
            font-weight: 800;
            letter-spacing: 3px;
            color: #f0f2f3;
            text-transform: uppercase;
            text-shadow: 0 2px 20px rgba(59,110,143,0.15);
        }

        .logo-text span {
            color: #3b6e8f;
            font-weight: 300;
            letter-spacing: 5px;
        }

        .nav {
            display:flex;
            gap:32px;
            align-items:center;
        }
        .nav a {
            color:#ffffff;
            text-decoration:none;
            font-size:13px;
            font-weight:600;
            letter-spacing:1.5px;
            text-transform:uppercase;
            transition:color 0.3s;
            position:relative;
        }
        .nav a::after {
            content:'';
            position:absolute;
            bottom:-4px;
            left:0;
            width:0;
            height:2px;
            background:#3b6e8f;
            transition:width 0.3s;
        }
        .nav a:hover { color:#5e9bc2; }
        .nav a:hover::after { width:100%; }
        .nav .phone {
            background: #3b6e8f;
            color:#ffffff !important;
            padding:8px 24px;
            border-radius:30px;
            font-weight:700 !important;
            letter-spacing:2px;
            border:1px solid #3b6e8f;
            transition:all 0.3s;
        }
        .nav .phone::after { display:none; }
        .nav .phone:hover { 
            background:transparent;
            color:#5e9bc2 !important; 
            transform:scale(1.05);
            box-shadow:0 0 30px rgba(59,110,143,0.15);
        }

        /* ===== WRAPPER ===== */
        .hero-wrapper {
            flex:1;
            display:flex;
            align-items:flex-start;
            justify-content:center;
            padding:110px 0 0;
        }

        /* ===== HERO ===== */
        .hero {
            width:100%;
            max-width:100%;
            height:70vh;
            min-height:480px;
            display:flex;
            align-items:center;
            padding:50px 70px;
            gap:60px;
            position:relative;
            overflow:hidden;
            border-radius: 0;
            background: #0b0d10;
            border:1px solid rgba(255,255,255,0.04);
        }

        .hero-video {
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            z-index:0;
            object-fit:cover;
            border-radius: 0;
        }

        .hero-overlay-light {
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            z-index:1;
            background: rgba(0,0,0,0.40);
            border-radius: 0;
        }
        .hero-text {
            flex:1.2;
            max-width:700px;
            position:relative;
            z-index:3;
        }

        .hero-text .tag {
            display:inline-block;
            font-size:12px;
            color:#7d868c;
            letter-spacing:4px;
            text-transform:uppercase;
            font-weight:300;
            margin-bottom:24px;
            padding:6px 20px;
            border:1px solid rgba(255,255,255,0.1);
            border-radius:100px;
        }

        .hero-text h1 {
            font-size:clamp(3.5rem, 8vw, 6rem);
            font-weight:600;
            text-transform:uppercase;
            line-height:1.05;
            margin-bottom:12px;
        }

        .hero-text h1 .gradient {
            color: #3b6e8f;
            display: block;
            font-weight:300;
            letter-spacing:3px;
        }

        .hero-text h1 .white {
            color:#f0f2f3;
            display: block;
        }

        .hero-text .sub {
            font-size:clamp(1rem, 1.5vw, 1.2rem);
            color:#7d868c;
            letter-spacing:2px;
            font-weight:300;
            margin:20px 0 35px;
            line-height:1.8;
        }

        .hero-text .btn-group {
            display:flex;
            gap:16px;
            flex-wrap:wrap;
        }

        .hero-text .btn-primary {
            display:inline-block;
            padding:16px 44px;
            background: #3b6e8f;
            color:#f0f2f3;
            text-decoration:none;
            font-weight:400;
            font-size:13px;
            letter-spacing:2px;
            text-transform:uppercase;
            transition:all 0.3s;
            border:1px solid #3b6e8f;
            border-radius:4px;
        }
        .hero-text .btn-primary:hover {
            background:#5e9bc2;
            border-color:#5e9bc2;
            transform:translateY(-2px);
        }

        .hero-text .btn-secondary {
            display:inline-block;
            padding:16px 44px;
            background:transparent;
            color:#f0f2f3;
            text-decoration:none;
            font-weight:400;
            font-size:13px;
            letter-spacing:2px;
            text-transform:uppercase;
            transition:all 0.3s;
            border:1px solid rgba(255,255,255,0.15);
            border-radius:4px;
        }
        .hero-text .btn-secondary:hover {
            border-color:#3b6e8f;
            color:#3b6e8f;
            transform:translateY(-2px);
        }

        /* ===== SECTIONS ===== */
        section {
            padding:80px 30px;
            max-width:1200px;
            margin:0 auto;
            width:100%;
        }

        /* ===== TITRES HEAVY ===== */
        .section-title-left {
            text-align:left;
            margin-bottom:4px;
        }
        .section-title-left .light {
            display:block;
            font-size:clamp(1rem, 1.6vw, 1.3rem);
            font-weight:300;
            letter-spacing:4px;
            color: #7d868c;
            text-transform:uppercase;
        }
        .section-title-left .heavy {
            display:block;
            font-size:clamp(2.4rem, 4vw, 3.6rem);
            font-weight:900;
            letter-spacing:-1px;
            color: #3b6e8f;
            text-transform:uppercase;
            line-height:1.05;
            margin-top:-2px;
        }
        .section-title-left .heavy .black {
            color: #1a1a2e;
        }
        .section-desc-left {
            text-align:left;
            color:#7d868c;
            font-weight:300;
            letter-spacing:0.5px;
            margin-bottom:30px;
            font-size:15px;
            margin-top:4px;
        }

        /* ===== PLANNING ===== */
        .planning-section .section-title,
        .planning-section .section-desc {
            text-align:center;
        }
        .planning-grid-duo {
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:40px;
            margin-top:30px;
        }
        .planning-card {
            border-radius:16px;
            overflow:hidden;
            border:1px solid rgba(0,0,0,0.06);
            background: #f7f3ee;
            transition:all 0.3s;
            box-shadow:0 4px 20px rgba(0,0,0,0.04);
        }
        .planning-card:hover {
            box-shadow:0 8px 40px rgba(0,0,0,0.08);
            border-color:rgba(59,110,143,0.2);
        }
        .planning-card .card-header {
            padding:24px 30px;
            text-align:center;
            font-size:20px;
            font-weight:700;
            letter-spacing:4px;
            text-transform:uppercase;
            border-bottom:1px solid rgba(0,0,0,0.05);
            color:#1a1a2e;
        }
        .planning-card .card-header .icon {
            margin-right:10px;
            font-size:16px;
            color:#3b6e8f;
        }
        .planning-card .card-body {
            padding:24px 30px 30px;
        }
        .planning-item {
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:14px 0;
            border-bottom:1px solid rgba(0,0,0,0.04);
        }
        .planning-item:last-child {
            border-bottom:none;
        }
        .planning-item .day {
            font-size:17px;
            font-weight:700;
            color:#1a1a2e;
            letter-spacing:0.5px;
        }
        .planning-item .hours {
            font-size:18px;
            font-weight:600;
            color:#3b6e8f;
            text-align:right;
            line-height:1.5;
        }
        .planning-item .hours .sub-hours {
            font-size:15px;
            font-weight:500;
            color:#7d868c;
            display:block;
        }

        /* ===== TARIFS ===== */
        .pricing-section {
            background: #ddd6cd;
            padding: 60px 30px;
            border-radius: 0;
            margin: 0;
            width: 100%;
            max-width: 100%;
        }

        .pricing-frame {
            background: #cbc2b7;
            border-radius: 18px;
            padding: 24px;
        }

        /* ===== SERVICES ===== */
        .services-section {
            background: #ddd6cd;
            padding:60px 30px 80px;
            border-radius:0;
            margin:0;
            width:100%;
            max-width:100%;
        }
        .services-section .section-title-left .light { color: #7d868c; }
        .services-section .section-title-left .heavy { color: #3b6e8f; }
        .services-section .section-title-left .heavy .black { color: #1a1a2e; }
        .services-section .section-desc-left { color: #7d868c; }

        .services-frame {
            background: #cbc2b7;
            border-radius: 18px;
            padding: 24px;
        }

        .services-grid {
            display:grid;
            grid-template-columns:repeat(3, 1fr);
            gap:24px;
            margin-top:0;
        }
        .service-card {
            position:relative;
            border-radius:16px;
            overflow:hidden;
            min-height:280px;
            aspect-ratio: 4/3;
            display:flex;
            align-items:flex-end;
            cursor:pointer;
            border:3px solid rgba(255,255,255,0.6);
            box-shadow:0 8px 30px rgba(0,0,0,0.14);
            transition:all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            opacity:0;
            transform:translateY(60px);
        }
        .service-card.visible {
            opacity:1;
            transform:translateY(0);
            transition:all 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .service-card:hover {
            transform:translateY(-6px);
            border-color:#3b6e8f;
            box-shadow:0 12px 40px rgba(0,0,0,0.18);
        }
        .service-card .service-img {
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            z-index:0;
            background-size:cover;
            background-position:center;
            transition:transform 0.8s ease;
        }
        .service-card:hover .service-img {
            transform:scale(1.04);
        }
        .service-card .service-overlay {
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            z-index:1;
            background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.2) 50%, transparent 100%);
        }
        .service-card .service-content {
            position:relative;
            z-index:2;
            padding:24px 24px 26px;
            width:100%;
        }
        .service-card .service-content .service-icon {
            display:inline-block;
            font-size:13px;
            margin-bottom:6px;
            color:rgba(255,255,255,0.5);
            letter-spacing:4px;
            font-weight:300;
        }
        .service-card .service-content h3 {
            font-size:20px;
            font-weight:400;
            color:#f0f2f3;
            margin-bottom:3px;
            letter-spacing:1px;
        }
        .service-card .service-content p {
            color:rgba(255,255,255,0.5);
            font-size:13px;
            font-weight:300;
            line-height:1.5;
            max-width:95%;
        }
        .service-card .service-content .service-tag {
            display:inline-block;
            margin-top:10px;
            font-size:10px;
            font-weight:300;
            letter-spacing:2px;
            text-transform:uppercase;
            color:rgba(255,255,255,0.5);
            border:1px solid rgba(255,255,255,0.1);
            padding:4px 14px;
            border-radius:100px;
            transition:all 0.3s;
        }
        .service-card:hover .service-content .service-tag {
            color:#f0f2f3;
            border-color:#3b6e8f;
        }

        /* ===== GALERIE ===== */
        .gallery-section {
            background: #ddd6cd;
            padding:50px 30px 60px;
            border-radius:0;
            margin:0;
            width:100%;
            max-width:100%;
        }
        .gallery-section .section-title-left .light { color: #7d868c; }
        .gallery-section .section-title-left .heavy { color: #3b6e8f; }
        .gallery-section .section-title-left .heavy .black { color: #1a1a2e; }
        .gallery-section .section-desc-left { color: #7d868c; }

        .gallery-carousel-wrapper {
            position: relative;
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
            overflow: hidden;
            border-radius: 18px;
            background: #cbc2b7;
            padding: 16px 0;
        }

        .gallery-carousel {
            display: flex;
            transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            will-change: transform;
        }

        .gallery-carousel-slide {
            min-width: 33.333%;
            padding: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .gallery-carousel-slide img {
            width: 100%;
            aspect-ratio: 1/1;
            object-fit: cover;
            border-radius: 16px;
            display: block;
            cursor: pointer;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            border: 3px solid rgba(255,255,255,0.6);
            box-shadow: 0 8px 30px rgba(0,0,0,0.14);
        }

        .gallery-carousel-slide img:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 30px rgba(0,0,0,0.15);
        }

        .gallery-carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255,255,255,0.9);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(0,0,0,0.06);
            color: #1a1a2e;
            font-size: 20px;
            padding: 12px 18px;
            border-radius: 50%;
            cursor: pointer;
            z-index: 10;
            transition: all 0.3s ease;
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }
        .gallery-carousel-btn:hover {
            background: #3b6e8f;
            color: #fff;
            transform: translateY(-50%) scale(1.05);
        }
        .gallery-carousel-btn-prev { left: 12px; }
        .gallery-carousel-btn-next { right: 12px; }

        .gallery-carousel-dots {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 16px;
        }
        .gallery-carousel-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: rgba(0,0,0,0.15);
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .gallery-carousel-dot.active {
            background: #3b6e8f;
            transform: scale(1.2);
        }
        .gallery-carousel-dot:hover {
            background: #3b6e8f;
            opacity: 0.8;
        }

        /* ===== LIGHTBOX ===== */
        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.92);
            z-index: 9999;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            padding: 40px;
        }
        .lightbox.active {
            display: flex;
            animation: fadeIn 0.3s ease;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .lightbox img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            border-radius: 8px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.5);
            animation: zoomIn 0.4s ease;
        }
        @keyframes zoomIn {
            from { transform: scale(0.9); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
        .lightbox-close {
            position: absolute;
            top: 25px;
            right: 35px;
            color: #fff;
            font-size: 40px;
            font-weight: 300;
            cursor: pointer;
            transition: transform 0.3s;
            z-index: 10000;
            background: none;
            border: none;
        }
        .lightbox-close:hover {
            transform: rotate(90deg);
        }

        /* ===== MAPS ===== */
        .maps-section {
            max-width:100%;
            padding:60px 30px 40px;
            margin:0;
            width:100%;
            background: #d5cec5;
        }
        .maps-section .section-title-left .light { color: #7d868c; }
        .maps-section .section-title-left .heavy { color: #3b6e8f; }
        .maps-section .section-title-left .heavy .black { color: #1a1a2e; }
        .maps-section .section-desc-left { color: #7d868c; }

        .maps-container {
            display:grid;
            grid-template-columns:1fr 1.5fr;
            gap:25px;
            align-items:stretch;
            width:100%;
            max-width:100%;
        }
        .maps-details {
            display:flex;
            flex-direction:column;
            justify-content:center;
            gap:10px;
            padding:25px 25px;
            background:#f7f3ee;
            border:1px solid rgba(0,0,0,0.06);
            border-radius:16px;
            box-shadow:0 4px 20px rgba(0,0,0,0.04);
        }
        .maps-details .detail-item {
            padding:14px 18px;
            border:1px solid rgba(0,0,0,0.04);
            border-radius:10px;
            transition:all 0.3s;
            display:flex;
            align-items:center;
            gap:16px;
        }
        .maps-details .detail-item:hover {
            border-color:rgba(59,110,143,0.2);
            background:rgba(0,0,0,0.015);
        }
        .maps-details .detail-item .icon {
            width:42px;
            height:42px;
            display:flex;
            align-items:center;
            justify-content:center;
            color:#fff;
            font-size:16px;
            flex-shrink:0;
            border-radius:50%;
            box-shadow:0 4px 12px rgba(0,0,0,0.12);
        }
        .maps-details .detail-item.location .icon {
            background: linear-gradient(135deg, #eb4335, #ff6b5b);
        }
        .maps-details .detail-item.hours .icon {
            background: linear-gradient(135deg, #3b6e8f, #5e9bc2);
        }
        .maps-details .detail-item.phone .icon {
            background: linear-gradient(135deg, #25d366, #1fb855);
        }
        .maps-details .detail-item.instagram .icon {
            background: linear-gradient(135deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
        }
        .maps-details .detail-item .info {
            display:flex;
            flex-direction:column;
        }
        .maps-details .detail-item .info .label {
            color:#7d868c;
            font-size:10px;
            letter-spacing:2px;
            text-transform:uppercase;
            font-weight:300;
            margin-bottom:1px;
        }
        .maps-details .detail-item .info .value {
            font-size:15px;
            font-weight:300;
            color:#1a1a2e;
        }
        .maps-details .detail-item .info .value strong {
            color:#3b6e8f;
            font-weight:400;
        }
        .maps-details .detail-item .info .value a {
            color:#1a1a2e;
            text-decoration:none;
        }
        .maps-details .detail-item .info .value a:hover { color:#3b6e8f; }

        .maps-frame {
            min-height:400px;
            overflow:hidden;
            border:1px solid rgba(0,0,0,0.06);
            border-radius:16px;
            box-shadow:0 4px 20px rgba(0,0,0,0.04);
        }
        .maps-frame iframe {
            display:block;
            width:100%;
            height:100%;
            min-height:400px;
            border:none;
            filter:invert(0.92) hue-rotate(180deg);
        }

        /* ===== FOOTER ===== */
        footer {
            text-align:center;
            padding:32px;
            color:#7d868c;
            font-size:13px;
            border-top:1px solid rgba(0,0,0,0.05);
            letter-spacing:1px;
            font-weight:300;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width:992px) {
            header { padding: 18px 40px; }
            .hero {
                flex-direction:column;
                padding:40px 40px;
                text-align:center;
                height:auto;
                min-height:auto;
                border-radius:16px;
            }
            .hero-text { max-width:100%; text-align:center; }
            .hero-text .btn-group { justify-content:center; }
            .hero-text h1 { font-size:3.5rem; }
            .hero-wrapper { padding: 100px 0 40px; }
            .maps-container { grid-template-columns:1fr; gap:25px; }
            .maps-details { padding:25px 20px; }
            .maps-frame { min-height:300px; }
            .maps-frame iframe { min-height:300px; }
            .planning-grid-duo { grid-template-columns:1fr; gap:25px; }
            .services-grid { grid-template-columns:repeat(2, 1fr); }
            .services-section { padding:50px 25px 60px; }
            .services-frame { padding:18px; }
            .gallery-section { padding:40px 25px 50px; }
            section { padding:60px 30px; }
            .gallery-carousel-slide { min-width:50%; }
            .gallery-carousel-slide img { aspect-ratio:1/1; }
            .pricing-frame > div { grid-template-columns: repeat(2, 1fr) !important; }
        }

        @media (max-width:768px) {
            header { padding: 16px 25px; flex-wrap: wrap; gap: 10px; }
            .logo a { gap: 10px; }
            .logo-img { width: 55px; height: 55px; }
            .logo-text { font-size: 18px; letter-spacing: 2px; }
            .logo-text span { letter-spacing: 3px; }
            .nav { gap: 14px; flex-wrap: wrap; }
            .nav a { font-size: 11px; letter-spacing: 1px; }
            .nav .phone { padding: 6px 16px; font-size: 11px; }
            .hero-wrapper { padding: 90px 0 30px; }
            section { padding:40px 20px; }
            .services-section { padding:40px 20px 50px; }
            .services-frame { padding:14px; border-radius:14px; }
            .gallery-section { padding:35px 15px 45px; }
            .maps-section { padding:40px 20px 30px; }
            .maps-details { padding:20px 15px; gap:8px; }
            .maps-details .detail-item { padding:12px 14px; gap:12px; }
            .maps-details .detail-item .icon { width:36px; height:36px; font-size:14px; }
            .maps-details .detail-item .info .value { font-size:14px; }
            .maps-frame { min-height:240px; }
            .maps-frame iframe { min-height:240px; }
            .gallery-carousel-btn { width:40px; height:40px; font-size:16px; padding:8px 12px; }
            .gallery-carousel-btn-prev { left:8px; }
            .gallery-carousel-btn-next { right:8px; }
            .gallery-carousel-slide { min-width:50%; }
            .gallery-carousel-slide img { aspect-ratio:1/1; }
            .services-grid { grid-template-columns:1fr 1fr; }
            .service-card { min-height:240px; aspect-ratio:4/3; }
            .service-card .service-content h3 { font-size:18px; }
            .hero-text h1 { font-size:2.6rem; }
            .hero { padding:30px 25px; }
            .hero-text .btn-primary, .hero-text .btn-secondary { padding:14px 30px; font-size:12px; }
            .planning-grid-duo { grid-template-columns:1fr; gap:20px; }
            .pricing-frame > div { grid-template-columns: 1fr !important; }
            .pricing-frame { padding: 14px !important; }
        }

        @media (max-width:480px) {
            header { padding: 12px 15px; flex-wrap: wrap; gap: 8px; }
            .logo a { gap: 8px; }
            .logo-img { width: 45px; height: 45px; }
            .logo-text { font-size: 14px; letter-spacing: 1px; }
            .logo-text span { letter-spacing: 2px; }
            .hero-wrapper { padding: 130px 0 0; }
            .services-grid { grid-template-columns:1fr; }
            .service-card { min-height:200px; aspect-ratio:4/3; }
            .service-card .service-content { padding:18px 16px 20px; }
            .service-card .service-content h3 { font-size:17px; }
            .service-card .service-content p { font-size:12px; }
            .services-frame { padding:10px; border-radius:12px; }
            .gallery-carousel-slide { min-width:100%; }
            .gallery-carousel-slide img { aspect-ratio:1/1; }
            .gallery-carousel-btn { width:36px; height:36px; font-size:15px; padding:8px 10px; }
            .gallery-carousel-btn-prev { left:6px; }
            .gallery-carousel-btn-next { right:6px; }
            .hero-text .tag { font-size:10px; padding:4px 14px; letter-spacing:2px; }
            .hero-text h1 { font-size:2rem; }
            .hero-text .sub { font-size:0.9rem; }
            .hero { padding:20px 16px; border-radius:12px; }
            .hero-video { border-radius:12px; }
            .maps-details .detail-item { flex-direction:column; text-align:center; }
            .maps-details .detail-item .icon { width:32px; height:32px; font-size:12px; }
            .maps-section { padding:30px 15px 25px; }
            .services-section { padding:30px 15px 40px; }
            .gallery-section { padding:25px 10px 35px; }
            .planning-item { flex-direction:column; align-items:flex-start; gap:4px; }
            .planning-item .hours { text-align:left; }
            .planning-card .card-body { padding:18px 20px 22px; }
            .planning-card .card-header { font-size:17px; padding:18px 20px; }
            .planning-item .day { font-size:15px; }
            .planning-item .hours { font-size:16px; }
            .lightbox { padding:20px; }
            .lightbox-close { top:15px; right:20px; font-size:30px; }
            .pricing-frame { padding: 10px !important; }
            .pricing-frame > div > div { padding: 20px 15px !important; }
            .pricing-frame > div > div div[style*="font-size:32px"] { font-size: 28px !important; }
            .pricing-frame > div > div div[style*="font-size:20px"] { font-size: 17px !important; }
        }
    </style>
</head>
<body>

<!-- ===== HEADER ===== -->
<header>
    <div class="logo">
        <a href="#home" style="text-decoration:none;display:flex;align-items:center;gap:12px;">
            <img src="images/logo.jpg" alt="Body Power Gym" class="logo-img">
            <span style="font-size:22px;font-weight:800;letter-spacing:4px;color:#f0f2f3;text-transform:uppercase;">
                Body <span style="color:#3b6e8f;font-weight:300;letter-spacing:6px;">Power</span>
            </span>
        </a>
    </div>
    <div class="nav">
        <a href="#planning">Planning</a>
        <a href="#pricing">Tarifs</a>
        <a href="#services">Services</a>
        <a href="#gallery">Galerie</a>
        <a href="#maps">Nous trouver</a>
        <a href="tel:<?php echo str_replace(' ','',$gym_phone); ?>" class="phone"><?php echo $gym_phone; ?></a>
    </div>
</header>

<!-- ===== HERO ===== -->
<div class="hero-wrapper">
    <section class="hero" id="home">
        <video class="hero-video" autoplay muted loop playsinline>
            <source src="videos/vdmma.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la vidéo.
        </video>
        <div class="hero-overlay-light"></div>
        <div class="hero-text">
            <div class="tag">Salle de sport</div>
            <h1>
                <span class="white">Body</span>
                <span class="gradient">Power</span>
            </h1>
            <div class="sub">Votre salle de sport à Bouzareah — Des cours pour tous les niveaux</div>
            <div class="btn-group">
                <a href="#maps" class="btn-primary">Nous trouver</a>
            </div>
        </div>
    </section>
</div>

<!-- ===== PLANNING ===== -->
<section id="planning" class="planning-section">
    <h2 class="section-title">Planning <strong>de la semaine</strong></h2>
    <div class="section-desc">Horaires dédiés aux séances</div>
    
    <div class="planning-grid-duo">
        <div class="planning-card femmes">
            <div class="card-header"><span class="icon">—</span> Femmes</div>
            <div class="card-body">
                <?php foreach($planning_femmes as $jour => $horaires): ?>
                    <div class="planning-item">
                        <span class="day"><?php echo $jour; ?></span>
                        <span class="hours"><?php echo $horaires; ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="planning-card hommes">
            <div class="card-header"><span class="icon">—</span> Hommes</div>
            <div class="card-body">
                <?php foreach($planning_hommes as $jour => $horaires): ?>
                    <div class="planning-item">
                        <span class="day"><?php echo $jour; ?></span>
                        <span class="hours">
                            <?php if(is_array($horaires)): ?>
                                <?php foreach($horaires as $h): ?>
                                    <?php echo $h; ?><br>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <?php echo $horaires; ?>
                            <?php endif; ?>
                        </span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    
    <div style="text-align:center;margin-top:30px;color:#7d868c;font-size:14px;letter-spacing:1px;font-weight:300;">
        Ouvert tous les jours de <?php echo $gym_hours; ?>
    </div>
</section>

<!-- ===== TARIFS ===== -->
<section id="pricing" class="pricing-section">
    <div class="section-title-left">
        <span class="light">Nos</span>
        <span class="heavy">Tarifs</span>
    </div>
    <div class="section-desc-left">Des formules adaptées à tous les besoins</div>
    
    <div class="pricing-frame">
        <div style="max-width:900px; margin:0 auto;">
            
            <!-- ===== CARTE UNIQUE ===== -->
            <div style="background:#fff; border-radius:16px; padding:35px 30px; text-align:center; border:3px solid #3b6e8f; box-shadow:0 8px 30px rgba(59,110,143,0.2);">
                <div style="width:70px; height:70px; border-radius:50%; background:#3b6e8f; display:flex; align-items:center; justify-content:center; margin:0 auto 12px; color:#fff; font-size:28px;">
                    <i class="fa-solid fa-dumbbell"></i>
                </div>
                <div style="font-size:22px; font-weight:800; color:#1a1a2e; letter-spacing:2px; text-transform:uppercase; margin-bottom:5px;">Body Power Gym</div>
                <div style="font-size:14px; color:#7d868c; margin-bottom:20px;">Hommes · Femmes · Enfants</div>
                
                <div style="display:grid; grid-template-columns:repeat(4, 1fr); gap:12px; margin-bottom:20px;">
                    <div style="background:#f7f3ee; padding:12px; border-radius:10px;">
                        <div style="font-size:13px; color:#7d868c;">1 fois</div>
                        <div style="font-size:20px; font-weight:800; color:#3b6e8f;">1 500 DA</div>
                    </div>
                    <div style="background:#f7f3ee; padding:12px; border-radius:10px;">
                        <div style="font-size:13px; color:#7d868c;">2 fois</div>
                        <div style="font-size:20px; font-weight:800; color:#3b6e8f;">2 200 DA</div>
                    </div>
                    <div style="background:#f7f3ee; padding:12px; border-radius:10px;">
                        <div style="font-size:13px; color:#7d868c;">3 fois</div>
                        <div style="font-size:20px; font-weight:800; color:#3b6e8f;">2 500 DA</div>
                    </div>
                    <div style="background:#f7f3ee; padding:12px; border-radius:10px;">
                        <div style="font-size:13px; color:#7d868c;">4 fois</div>
                        <div style="font-size:20px; font-weight:800; color:#3b6e8f;">2 700 DA</div>
                    </div>
                </div>
                
                <div style="border-top:2px solid rgba(0,0,0,0.08); padding-top:18px;">
                    <div style="font-size:16px; font-weight:700; color:#1a1a2e;">Illimité</div>
                    <div style="font-size:30px; font-weight:900; color:#3b6e8f;">2 900 DA</div>
                    <div style="font-size:14px; color:#7d868c; margin-top:4px;">+ 500 DA Tapis</div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- ===== SERVICES (modifié) ===== -->
<section id="services" class="services-section">
    <div class="section-title-left">
        <span class="light">Nos</span>
        <span class="heavy">Services</span>
    </div>
    <div class="section-desc-left">Des activités pour tous les niveaux</div>
    
    <div class="services-frame">
        <div class="services-grid">
            <?php foreach($services as $service): ?>
                <?php 
                    $class = strtolower(str_replace([' ', '/', '(', ')'], '', $service['nom']));
                    if($class == 'mma(hommes&femmes)') $class = 'mma';
                    if($class == 'kickboxing(hommes&femmes)') $class = 'kickboxing';
                    if($class == 'judo kids') $class = 'judo';
                ?>
                <div class="service-card <?php echo $class; ?>">
                    <div class="service-img" style="background-image: url('<?php echo $service['image']; ?>');"></div>
                    <div class="service-overlay"></div>
                    <div class="service-content">
                        <div class="service-icon">— <?php echo $service['tag']; ?> —</div>
                        <h3><?php echo $service['nom']; ?></h3>
                        <p><?php echo $service['description']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== GALERIE ===== -->
<section id="gallery" class="gallery-section">
    <div class="section-title-left">
        <span class="light">Notre</span>
        <span class="heavy">Galerie</span>
    </div>
    <div class="section-desc-left">Cliquez sur une photo pour l'agrandir</div>
    
    <div class="gallery-carousel-wrapper">
        <div class="gallery-carousel" id="galleryCarousel">
            <?php foreach($gallery_images as $img): ?>
                <div class="gallery-carousel-slide">
                    <img src="<?php echo $img; ?>" 
                         alt="Body Power Gym" 
                         loading="lazy" 
                         onclick="openLightbox('<?php echo $img; ?>')"
                         onerror="this.style.display='none'">
                </div>
            <?php endforeach; ?>
        </div>
        
        <button class="gallery-carousel-btn gallery-carousel-btn-prev" onclick="moveCarousel(-1)">❮</button>
        <button class="gallery-carousel-btn gallery-carousel-btn-next" onclick="moveCarousel(1)">❯</button>
    </div>
    
    <div class="gallery-carousel-dots" id="galleryCarouselDots"></div>
</section>

<!-- ===== LIGHTBOX ===== -->
<div class="lightbox" id="lightbox" onclick="closeLightbox()">
    <button class="lightbox-close" onclick="closeLightbox()">✕</button>
    <img id="lightboxImg" src="" alt="Body Power Gym">
</div>

<!-- ===== MAPS ===== -->
<section id="maps" class="maps-section">
    <div class="section-title-left">
        <span class="light">Nous</span>
        <span class="heavy">Trouver</span>
    </div>
    <div class="section-desc-left">Viens nous voir à Bouzareah</div>
    <div class="maps-container">
        <div class="maps-details">
            <div class="detail-item location">
                <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                <div class="info">
                    <div class="label">Adresse</div>
                    <div class="value"><?php echo $gym_address; ?></div>
                </div>
            </div>
            <div class="detail-item hours">
                <div class="icon"><i class="fa-solid fa-clock"></i></div>
                <div class="info">
                    <div class="label">Horaires</div>
                    <div class="value">Ouvert jusqu'à <strong>22h00</strong></div>
                </div>
            </div>
            <div class="detail-item phone">
                <div class="icon"><i class="fa-solid fa-phone"></i></div>
                <div class="info">
                    <div class="label">Téléphone</div>
                    <div class="value"><a href="tel:<?php echo str_replace(' ','',$gym_phone); ?>"><?php echo $gym_phone; ?></a></div>
                </div>
            </div>
            <div class="detail-item instagram">
                <div class="icon"><i class="fa-brands fa-instagram"></i></div>
                <div class="info">
                    <div class="label">Instagram</div>
                    <div class="value"><a href="<?php echo $gym_instagram; ?>" target="_blank">@bodypowergym03</a></div>
                </div>
            </div>
        </div>
        <div class="maps-frame">
            <iframe src="<?php echo $google_maps_url; ?>" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<!-- ===== FOOTER ===== -->
<footer>
    &copy; <?php echo date('Y'); ?> Body Power Gym
</footer>

<!-- ===== SCRIPTS ===== -->
<script>
    // ===== SERVICES SCROLL ANIMATION =====
    const serviceCards = document.querySelectorAll('.service-card');
    const observerOptions = { threshold: 0.08, rootMargin: '0px 0px -30px 0px' };
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                const delay = index * 200;
                setTimeout(() => {
                    entry.target.classList.add('visible');
                }, delay);
            }
        });
    }, observerOptions);
    serviceCards.forEach(card => { observer.observe(card); });

    // ===== GALERIE CAROUSEL =====
    let currentCarousel = 0;
    const carouselSlides = document.querySelectorAll('.gallery-carousel-slide');
    const totalCarouselSlides = carouselSlides.length;
    const carousel = document.getElementById('galleryCarousel');
    const dotsContainer = document.getElementById('galleryCarouselDots');
    let slidesPerView = 3;
    let totalDots = Math.ceil(totalCarouselSlides / slidesPerView);

    function getSlidesPerView() {
        if (window.innerWidth < 480) return 1;
        if (window.innerWidth < 768) return 2;
        if (window.innerWidth < 992) return 2;
        return 3;
    }

    function updateCarousel() {
        slidesPerView = getSlidesPerView();
        totalDots = Math.ceil(totalCarouselSlides / slidesPerView);
        if (currentCarousel >= totalDots) currentCarousel = totalDots - 1;
        if (currentCarousel < 0) currentCarousel = 0;
        
        const slideWidth = 100 / slidesPerView;
        carouselSlides.forEach(slide => {
            slide.style.minWidth = slideWidth + '%';
        });
        
        carousel.style.transform = `translateX(-${currentCarousel * 100}%)`;
        updateDots();
    }

    function moveCarousel(direction) {
        currentCarousel += direction;
        if (currentCarousel >= totalDots) currentCarousel = 0;
        if (currentCarousel < 0) currentCarousel = totalDots - 1;
        carousel.style.transform = `translateX(-${currentCarousel * 100}%)`;
        updateDots();
    }

    function goToCarousel(index) {
        currentCarousel = index;
        carousel.style.transform = `translateX(-${currentCarousel * 100}%)`;
        updateDots();
    }

    function updateDots() {
        dotsContainer.querySelectorAll('.gallery-carousel-dot').forEach((dot, i) => {
            dot.classList.toggle('active', i === currentCarousel);
        });
    }

    function createDots() {
        dotsContainer.innerHTML = '';
        for (let i = 0; i < totalDots; i++) {
            const dot = document.createElement('span');
            dot.className = 'gallery-carousel-dot';
            if (i === 0) dot.classList.add('active');
            dot.addEventListener('click', () => goToCarousel(i));
            dotsContainer.appendChild(dot);
        }
    }

    function initCarousel() {
        slidesPerView = getSlidesPerView();
        totalDots = Math.ceil(totalCarouselSlides / slidesPerView);
        currentCarousel = 0;
        const slideWidth = 100 / slidesPerView;
        carouselSlides.forEach(slide => {
            slide.style.minWidth = slideWidth + '%';
        });
        carousel.style.transform = `translateX(0)`;
        createDots();
    }

    initCarousel();

    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            const newSlidesPerView = getSlidesPerView();
            if (newSlidesPerView !== slidesPerView) {
                initCarousel();
            }
        }, 200);
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') moveCarousel(-1);
        if (e.key === 'ArrowRight') moveCarousel(1);
    });

    // ===== LIGHTBOX =====
    function openLightbox(src) {
        const lightbox = document.getElementById('lightbox');
        const img = document.getElementById('lightboxImg');
        img.src = src;
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        const lightbox = document.getElementById('lightbox');
        lightbox.classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeLightbox();
    });
</script>

</body>
</html>