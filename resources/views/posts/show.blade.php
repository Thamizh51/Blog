<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<title>{{ $post->title }}</title>


<style>

    * {
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        margin: 0;

        font-family: Arial, sans-serif;

        color: #292524;

        background:
            radial-gradient(
                circle at 10% 10%,
                rgba(245, 158, 11, 0.10),
                transparent 30%
            ),
            radial-gradient(
                circle at 90% 90%,
                rgba(234, 88, 12, 0.08),
                transparent 35%
            ),
            #faf8f5;
    }


    /* =========================
       HEADER
    ========================= */

    .header {
        position: sticky;

        top: 0;

        z-index: 1000;

        background:
            rgba(250, 248, 245, 0.90);

        backdrop-filter: blur(18px);

        -webkit-backdrop-filter: blur(18px);

        border-bottom:
            1px solid #e7e0d8;

        padding: 20px 0;

        animation:
            headerAnimation 0.7s ease;
    }


    .header-inner {
        max-width: 1050px;

        margin: auto;

        padding: 0 25px;
    }


    .logo {
        font-size: 26px;

        font-weight: 900;

        text-decoration: none;

        color: #292524;

        letter-spacing: -1px;

        transition:
            transform 0.3s ease;
    }


    .logo span {
        color: #ea580c;
    }


    .logo:hover {
        transform: translateY(-2px);
    }


    /* =========================
       MAIN
    ========================= */

    .container {
        max-width: 1000px;

        margin: 65px auto;

        padding: 0 20px;

        animation:
            pageAnimation 0.8s ease;
    }


    /* =========================
       ARTICLE
    ========================= */

    .article {
        background: #ffffff;

        border-radius: 24px;

        overflow: hidden;

        border:
            1px solid #e7e0d8;

        box-shadow:
            0 20px 60px
            rgba(68, 50, 35, 0.10);

        transition:
            transform 0.4s ease,
            box-shadow 0.4s ease;
    }


    .article:hover {
        transform: translateY(-4px);

        box-shadow:
            0 30px 75px
            rgba(68, 50, 35, 0.14);
    }


    /* =========================
       IMAGE
    ========================= */

    .image-wrapper {
        position: relative;

        width: 100%;

        height: 500px;

        overflow: hidden;
    }


    .article-image {
        width: 100%;

        height: 100%;

        display: block;

        object-fit: cover;

        transition:
            transform 0.9s ease,
            filter 0.5s ease;
    }


    .article:hover .article-image {
        transform: scale(1.035);

        filter:
            brightness(1.04);
    }


    .image-overlay {
        position: absolute;

        inset: 0;

        pointer-events: none;

        background:
            linear-gradient(
                to bottom,
                transparent 50%,
                rgba(41, 37, 36, 0.35)
            );
    }


    /* =========================
       NO IMAGE
    ========================= */

    .no-image {
        height: 350px;

        display: flex;

        align-items: center;

        justify-content: center;

        position: relative;

        overflow: hidden;

        background:
            linear-gradient(
                135deg,
                #fff7ed,
                #ffedd5,
                #fef3c7
            );

        color: #c2410c;

        font-size: 18px;

        font-weight: 700;
    }


    .no-image::before {
        content: "";

        position: absolute;

        width: 300px;

        height: 300px;

        border-radius: 50%;

        background:
            rgba(245, 158, 11, 0.10);

        top: -160px;

        right: -80px;
    }


    .no-image::after {
        content: "";

        position: absolute;

        width: 220px;

        height: 220px;

        border-radius: 50%;

        background:
            rgba(234, 88, 12, 0.08);

        bottom: -130px;

        left: -70px;
    }


    /* =========================
       ARTICLE CONTENT
    ========================= */

    .article-content {
        padding: 60px 65px 65px;
    }


    /* Decorative line */

    .article-content::before {
        content: "";

        display: block;

        width: 75px;

        height: 5px;

        margin-bottom: 28px;

        border-radius: 20px;

        background:
            linear-gradient(
                90deg,
                #ea580c,
                #f59e0b
            );

        animation:
            lineAnimation 0.9s ease;
    }


    /* =========================
       TITLE
    ========================= */

    .article-title {
        margin: 0 0 30px;

        font-size:
            clamp(36px, 6vw, 58px);

        line-height: 1.12;

        letter-spacing: -1.5px;

        color: #292524;

        animation:
            titleAnimation 0.8s ease;
    }


    /* =========================
       ARTICLE TEXT
    ========================= */

    .article-text {
        font-size: 18px;

        line-height: 1.95;

        color: #57534e;

        white-space: pre-line;

        max-width: 820px;

        animation:
            contentAnimation 1s ease;
    }


    /* =========================
       FIRST LETTER
    ========================= */

    .article-text::first-letter {
        font-size: 4rem;

        font-weight: 800;

        line-height: 0.8;

        float: left;

        padding-right: 9px;

        color: #ea580c;
    }


    /* =========================
       BACK BUTTON
    ========================= */

    .back {
        display: inline-flex;

        align-items: center;

        gap: 9px;

        margin-top: 45px;

        padding: 13px 21px;

        border-radius: 10px;

        text-decoration: none;

        color: #ffffff;

        font-size: 14px;

        font-weight: 700;

        background:
            linear-gradient(
                135deg,
                #292524,
                #431407
            );

        box-shadow:
            0 8px 20px
            rgba(41, 37, 36, 0.20);

        transition:
            transform 0.3s ease,
            box-shadow 0.3s ease,
            gap 0.3s ease;
    }


    .back:hover {
        transform:
            translateY(-3px);

        gap: 13px;

        box-shadow:
            0 13px 28px
            rgba(41, 37, 36, 0.28);
    }


    /* =========================
       FOOTER
    ========================= */

    .footer {
        position: relative;

        overflow: hidden;

        margin-top: 80px;

        padding:
            70px 25px 30px;

        text-align: center;

        color: #ffffff;

        background:
            linear-gradient(
                135deg,
                #292524,
                #431407,
                #7c2d12
            );
    }


    .footer::before {
        content: "";

        position: absolute;

        width: 400px;

        height: 400px;

        border-radius: 50%;

        background:
            rgba(245, 158, 11, 0.10);

        top: -250px;

        left: -100px;
    }


    .footer::after {
        content: "";

        position: absolute;

        width: 350px;

        height: 350px;

        border-radius: 50%;

        background:
            rgba(249, 115, 22, 0.10);

        bottom: -230px;

        right: -100px;
    }


    .footer-content {
        position: relative;

        z-index: 2;

        max-width: 750px;

        margin: auto;
    }


    .footer h2 {
        margin: 0 0 18px;

        font-size: 34px;

        line-height: 1.3;
    }


    .footer h2 span {
        color: #fbbf24;
    }


    .footer p {
        max-width: 650px;

        margin:
            0 auto 28px;

        color: #d6d3d1;

        line-height: 1.8;

        font-size: 16px;
    }


    .motivation {
        display: inline-block;

        padding: 14px 22px;

        border-radius: 50px;

        border:
            1px solid
            rgba(251, 191, 36, 0.25);

        background:
            rgba(255, 255, 255, 0.06);

        color: #fef3c7;

        font-size: 14px;

        font-weight: 600;

        animation:
            floating 3s ease-in-out infinite;
    }


    .footer-bottom {
        position: relative;

        z-index: 2;

        max-width: 1000px;

        margin:
            50px auto 0;

        padding-top: 20px;

        border-top:
            1px solid
            rgba(255, 255, 255, 0.12);

        color: #a8a29e;

        font-size: 13px;
    }


    /* =========================
       ANIMATIONS
    ========================= */

    @keyframes headerAnimation {

        from {
            opacity: 0;

            transform:
                translateY(-25px);
        }

        to {
            opacity: 1;

            transform:
                translateY(0);
        }

    }


    @keyframes pageAnimation {

        from {
            opacity: 0;

            transform:
                translateY(35px);
        }

        to {
            opacity: 1;

            transform:
                translateY(0);
        }

    }


    @keyframes titleAnimation {

        from {
            opacity: 0;

            transform:
                translateY(25px);
        }

        to {
            opacity: 1;

            transform:
                translateY(0);
        }

    }


    @keyframes contentAnimation {

        from {
            opacity: 0;

            transform:
                translateY(20px);
        }

        to {
            opacity: 1;

            transform:
                translateY(0);
        }

    }


    @keyframes lineAnimation {

        from {
            width: 0;

            opacity: 0;
        }

        to {
            width: 75px;

            opacity: 1;
        }

    }


    @keyframes floating {

        0%,
        100% {
            transform:
                translateY(0);
        }

        50% {
            transform:
                translateY(-6px);
        }

    }


    /* =========================
       MOBILE
    ========================= */

    @media (max-width: 700px) {

        .header {
            padding: 17px 0;
        }


        .logo {
            font-size: 22px;
        }


        .container {
            margin: 35px auto;

            padding:
                0 15px;
        }


        .article {
            border-radius: 18px;
        }


        .image-wrapper {
            height: 300px;
        }


        .article-content {
            padding:
                38px 25px 40px;
        }


        .article-title {
            font-size: 36px;

            letter-spacing:
                -0.8px;
        }


        .article-text {
            font-size: 16px;

            line-height: 1.85;
        }


        .article-text::first-letter {
            font-size: 3rem;
        }


        .back {
            width: 100%;

            justify-content: center;
        }


        .footer {
            margin-top: 50px;

            padding:
                55px 20px 25px;
        }


        .footer h2 {
            font-size: 28px;
        }

    }


    @media (max-width: 450px) {

        .image-wrapper {
            height: 250px;
        }


        .article-content {
            padding:
                32px 20px 35px;
        }


        .article-title {
            font-size: 30px;
        }

    }


    @media (prefers-reduced-motion: reduce) {

        *,
        *::before,
        *::after {

            animation-duration:
                0.01ms !important;

            animation-iteration-count:
                1 !important;

            transition-duration:
                0.01ms !important;
        }

    }

</style>

</head>

<body>

<header class="header">

<div class="header-inner" style="display: flex; justify-content: space-between; align-items: center;">

    <a
        href="{{ route('dashboard') }}"
        class="logo"
    >
        My<span>Blog</span>
    </a>

    <nav style="display: flex; gap: 15px; align-items: center;">
        @auth
            <a
                href="{{ route('admin.dashboard') }}"
                style="color: #ea580c; text-decoration: none; font-weight: 700; font-size: 15px;"
            >
                Admin Dashboard
            </a>
            <form action="{{ route('admin.logout') }}" method="POST" style="margin: 0;">
                @csrf
                <button type="submit" style="background: none; border: 1px solid #e7e0d8; padding: 6px 14px; border-radius: 8px; font-weight: 600; cursor: pointer; color: #78716c;">
                    Logout
                </button>
            </form>
        @else
            <a
                href="{{ route('login') }}"
                style="color: #78716c; text-decoration: none; font-weight: 600; font-size: 15px;"
            >
                Admin Login
            </a>
        @endauth
    </nav>

</div>

</header>

<main class="container">


<article class="article">


    @if($post->image)

        <div class="image-wrapper">

            <img
                src="{{ asset('storage/' . $post->image) }}"
                alt="{{ $post->title }}"
                class="article-image"
            >

            <div class="image-overlay"></div>

        </div>

    @else

        <div class="no-image">
            No Image
        </div>

    @endif


    <div class="article-content">


        <h1 class="article-title">
            {{ $post->title }}
        </h1>


        <div class="article-text">
            {{ $post->content }}
        </div>


        <a
            href="{{ route('dashboard') }}"
            class="back"
        >
            ← Back to Posts
        </a>


    </div>


</article>


</main>

<footer class="footer">


<div class="footer-content">

    <h2>
        Keep reading.
        <span>Keep growing.</span>
    </h2>

    <p>
        Every story has something to teach.
        Keep exploring new ideas, keep learning,
        and remember that every small step forward
        is progress.
    </p>

    <div class="motivation">
        Your next great idea could be one page away.
    </div>

</div>


<div class="footer-bottom">
    © 2026 My Blog. Keep moving forward.
</div>


</footer>

</body>

</html>
