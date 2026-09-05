<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<title>Posts</title>

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
                circle at 0% 0%,
                rgba(245, 158, 11, 0.10),
                transparent 30%
            ),
            radial-gradient(
                circle at 100% 100%,
                rgba(234, 88, 12, 0.08),
                transparent 30%
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

        background: rgba(250, 248, 245, 0.90);

        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);

        border-bottom: 1px solid #e7e0d8;

        padding: 20px 0;

        animation: headerAnimation 0.7s ease;
    }

    .header-inner {
        max-width: 1250px;

        margin: auto;

        padding: 0 25px;

        display: flex;
        justify-content: space-between;
        align-items: center;
    }


    .logo {
        text-decoration: none;

        font-size: 26px;

        font-weight: 900;

        color: #292524;

        letter-spacing: -1px;

        transition: 0.3s ease;
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
        max-width: 1250px;

        margin: auto;

        padding: 75px 25px 85px;
    }


    /* =========================
       HERO
    ========================= */

    .page-title {
        max-width: 760px;

        margin-bottom: 55px;

        animation: heroAnimation 0.9s ease;
    }


    .page-title h1 {
        margin: 0;

        font-size: clamp(42px, 7vw, 76px);

        line-height: 1;

        letter-spacing: -3px;

        font-weight: 900;

        color: #292524;
    }


    .page-title h1 span {
        color: #ea580c;
    }


    .page-title p {
        margin: 25px 0 0;

        max-width: 650px;

        color: #78716c;

        font-size: 18px;

        line-height: 1.8;
    }


    .title-line {
        width: 80px;

        height: 6px;

        margin-top: 28px;

        border-radius: 20px;

        background:
            linear-gradient(
                90deg,
                #ea580c,
                #f59e0b
            );

        animation:
            lineAnimation 1s ease 0.5s both;
    }


    /* =========================
       POSTS
    ========================= */

    .posts {
        display: grid;

        grid-template-columns:
            repeat(3, 1fr);

        gap: 30px;
    }


    /* =========================
       POST CARD
    ========================= */

    .post-card {
        position: relative;

        background: #ffffff;

        border-radius: 22px;

        overflow: hidden;

        border: 1px solid #e7e0d8;

        box-shadow:
            0 10px 35px rgba(68, 50, 35, 0.07);

        transition:
            transform 0.5s cubic-bezier(.2,.8,.2,1),
            box-shadow 0.5s ease,
            border-color 0.4s ease;

        animation:
            cardAnimation 0.8s ease both;
    }


    .post-card:nth-child(1) {
        animation-delay: 0.1s;
    }

    .post-card:nth-child(2) {
        animation-delay: 0.2s;
    }

    .post-card:nth-child(3) {
        animation-delay: 0.3s;
    }

    .post-card:nth-child(4) {
        animation-delay: 0.4s;
    }

    .post-card:nth-child(5) {
        animation-delay: 0.5s;
    }

    .post-card:nth-child(6) {
        animation-delay: 0.6s;
    }


    .post-card:hover {
        transform: translateY(-12px);

        border-color: #fdba74;

        box-shadow:
            0 25px 60px rgba(68, 50, 35, 0.14);
    }


    /* =========================
       IMAGE
    ========================= */

    .post-image {
        width: 100%;

        height: 245px;

        display: block;

        object-fit: cover;

        transition:
            transform 0.8s ease;
    }


    .post-image-wrapper {
        position: relative;

        overflow: hidden;
    }


    .post-card:hover .post-image {
        transform: scale(1.08);
    }


    .post-image-wrapper::after {
        content: "";

        position: absolute;

        inset: 0;

        background:
            linear-gradient(
                to bottom,
                transparent 50%,
                rgba(41, 37, 36, 0.38)
            );

        opacity: 0.65;

        transition:
            opacity 0.4s ease;
    }


    .post-card:hover
    .post-image-wrapper::after {
        opacity: 0.35;
    }


    /* =========================
       NO IMAGE
    ========================= */

    .no-image {
        width: 100%;

        height: 245px;

        display: flex;

        align-items: center;
        justify-content: center;

        background:
            linear-gradient(
                135deg,
                #fff7ed,
                #ffedd5,
                #fef3c7
            );

        color: #c2410c;

        font-size: 16px;

        font-weight: 700;

        position: relative;

        overflow: hidden;
    }


    .no-image::before {
        content: "";

        position: absolute;

        width: 200px;
        height: 200px;

        border-radius: 50%;

        background:
            rgba(245, 158, 11, 0.12);

        top: -100px;
        right: -60px;
    }


    .no-image::after {
        content: "";

        position: absolute;

        width: 150px;
        height: 150px;

        border-radius: 50%;

        background:
            rgba(234, 88, 12, 0.09);

        bottom: -80px;
        left: -50px;
    }


    /* =========================
       CONTENT
    ========================= */

    .post-content {
        padding: 27px;
    }


    .post-title {
        margin: 0 0 14px;

        font-size: 22px;

        line-height: 1.35;

        color: #292524;

        transition:
            color 0.3s ease;
    }


    .post-card:hover .post-title {
        color: #ea580c;
    }


    .post-text {
        margin: 0 0 24px;

        color: #78716c;

        font-size: 15px;

        line-height: 1.75;
    }


    /* =========================
       BUTTON
    ========================= */

    .read-more {
        display: inline-flex;

        align-items: center;

        gap: 9px;

        padding: 12px 18px;

        border-radius: 10px;

        text-decoration: none;

        color: white;

        font-size: 14px;

        font-weight: 700;

        background:
            linear-gradient(
                135deg,
                #ea580c,
                #f59e0b
            );

        box-shadow:
            0 7px 18px
            rgba(234, 88, 12, 0.22);

        transition:
            transform 0.3s ease,
            box-shadow 0.3s ease,
            gap 0.3s ease;
    }


    .read-more::after {
        content: "→";

        transition:
            transform 0.3s ease;
    }


    .read-more:hover {
        transform: translateY(-3px);

        gap: 13px;

        box-shadow:
            0 12px 25px
            rgba(234, 88, 12, 0.32);
    }


    .read-more:hover::after {
        transform: translateX(4px);
    }


    /* =========================
       EMPTY
    ========================= */

    .empty {
        background: #ffffff;

        padding: 70px 30px;

        text-align: center;

        border-radius: 22px;

        border: 1px solid #e7e0d8;

        box-shadow:
            0 15px 40px
            rgba(68, 50, 35, 0.06);

        animation:
            heroAnimation 0.8s ease;
    }


    .empty h2 {
        margin: 0 0 12px;

        font-size: 28px;

        color: #292524;
    }


    .empty p {
        margin: 0;

        color: #78716c;
    }


    /* =========================
       FOOTER
    ========================= */

    .footer {
        position: relative;

        overflow: hidden;

        background:
            linear-gradient(
                135deg,
                #292524,
                #431407,
                #7c2d12
            );

        color: white;

        padding: 75px 25px 30px;

        text-align: center;
    }


    .footer::before {
        content: "";

        position: absolute;

        width: 420px;
        height: 420px;

        border-radius: 50%;

        background:
            rgba(245, 158, 11, 0.10);

        top: -270px;
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

        bottom: -220px;
        right: -100px;
    }


    .footer-content {
        position: relative;

        z-index: 2;

        max-width: 800px;

        margin: auto;
    }


    .footer h2 {
        margin: 0 0 18px;

        font-size: 35px;

        line-height: 1.25;

        font-weight: 800;
    }


    .footer h2 span {
        color: #fbbf24;
    }


    .footer p {
        margin: 0 auto 30px;

        max-width: 650px;

        color: #d6d3d1;

        font-size: 16px;

        line-height: 1.8;
    }


    .motivation {
        display: inline-block;

        padding: 14px 23px;

        border:
            1px solid
            rgba(251, 191, 36, 0.25);

        border-radius: 50px;

        background:
            rgba(255, 255, 255, 0.06);

        color: #fef3c7;

        font-size: 15px;

        font-weight: 600;

        animation:
            floating 3s ease-in-out infinite;
    }


    .footer-bottom {
        position: relative;

        z-index: 2;

        max-width: 1250px;

        margin: 55px auto 0;

        padding-top: 22px;

        border-top:
            1px solid
            rgba(255,255,255,0.12);

        color: #a8a29e;

        font-size: 13px;
    }


    /* =========================
       ANIMATIONS
    ========================= */

    @keyframes headerAnimation {

        from {
            opacity: 0;
            transform: translateY(-25px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }

    }


    @keyframes heroAnimation {

        from {
            opacity: 0;
            transform: translateY(35px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }

    }


    @keyframes cardAnimation {

        from {
            opacity: 0;
            transform:
                translateY(40px)
                scale(0.97);
        }

        to {
            opacity: 1;
            transform:
                translateY(0)
                scale(1);
        }

    }


    @keyframes lineAnimation {

        from {
            width: 0;
        }

        to {
            width: 80px;
        }

    }


    @keyframes floating {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-6px);
        }

    }


    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 1000px) {

        .posts {
            grid-template-columns:
                repeat(2, 1fr);
        }

    }


    @media (max-width: 650px) {

        .header-inner {
            padding: 17px 20px;
        }

        .logo {
            font-size: 22px;
        }

        .container {
            padding:
                50px 15px 60px;
        }

        .page-title {
            margin-bottom: 38px;
        }

        .page-title h1 {
            font-size: 45px;
            letter-spacing: -2px;
        }

        .page-title p {
            font-size: 16px;
        }

        .posts {
            grid-template-columns: 1fr;
            gap: 22px;
        }

        .post-image,
        .no-image {
            height: 240px;
        }

        .post-content {
            padding: 23px;
        }

        .footer {
            padding:
                55px 20px 25px;
        }

        .footer h2 {
            font-size: 28px;
        }

    }


    @media (prefers-reduced-motion: reduce) {

        *,
        *::before,
        *::after {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
        }

    }

</style>

</head>

<body>

<header class="header">


<div class="header-inner">

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

<div class="page-title">

    <h1>
        Latest <span>Posts.</span>
    </h1>

    <p>
        Discover ideas, stories and updates.
        Take a moment to read, learn something new,
        and keep moving forward.
    </p>

    <div class="title-line"></div>

</div>


@if($posts->count())

    <div class="posts">

        @foreach($posts as $post)

            <article class="post-card">


                @if($post->image)

                    <div class="post-image-wrapper">

                        <img
                            src="{{ asset('storage/' . $post->image) }}"
                            alt="{{ $post->title }}"
                            class="post-image"
                        >

                    </div>

                @else

                    <div class="no-image">
                        No Image
                    </div>

                @endif


                <div class="post-content">

                    <h2 class="post-title">
                        {{ $post->title }}
                    </h2>


                    <p class="post-text">
                        {{ Str::limit($post->content, 120) }}
                    </p>


                    <a
                        href="{{ route('posts.show', $post) }}"
                        class="read-more"
                    >
                        Read More
                    </a>

                </div>


            </article>

        @endforeach

    </div>

@else

    <div class="empty">

        <h2>No Posts Yet</h2>

        <p>
            There are currently no posts available.
        </p>

    </div>

@endif


</main>

<footer class="footer">


<div class="footer-content">

    <h2>
        Keep learning.
        <span>Keep growing.</span>
    </h2>

    <p>
        Every idea you discover is a step forward.
        Keep reading, keep creating, and never stop
        becoming a better version of yourself.
    </p>

    <div class="motivation">
        Believe in your journey. Your best chapter is still ahead.
    </div>

</div>


<div class="footer-bottom">
    © 2026 My Blog. Keep moving forward.
</div>


</footer>

</body>

</html>
