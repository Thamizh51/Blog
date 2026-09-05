<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<title>Admin Login</title>


<style>

    * {
        box-sizing: border-box;
    }


    html {
        scroll-behavior: smooth;
    }


    body {
        margin: 0;

        min-height: 100vh;

        display: flex;

        align-items: center;

        justify-content: center;

        font-family: Arial, sans-serif;

        color: #292524;

        background:
            radial-gradient(
                circle at 10% 10%,
                rgba(245, 158, 11, 0.14),
                transparent 30%
            ),
            radial-gradient(
                circle at 90% 90%,
                rgba(234, 88, 12, 0.12),
                transparent 30%
            ),
            linear-gradient(
                135deg,
                #faf8f5,
                #fff7ed
            );

        overflow-x: hidden;
    }


    /* =========================
       BACKGROUND DECORATIONS
    ========================= */

    body::before {
        content: "";

        position: fixed;

        width: 350px;

        height: 350px;

        border-radius: 50%;

        background:
            rgba(249, 115, 22, 0.07);

        top: -150px;

        left: -100px;

        animation:
            floatOne 8s ease-in-out infinite;
    }


    body::after {
        content: "";

        position: fixed;

        width: 300px;

        height: 300px;

        border-radius: 50%;

        background:
            rgba(245, 158, 11, 0.08);

        right: -100px;

        bottom: -130px;

        animation:
            floatTwo 9s ease-in-out infinite;
    }


    /* =========================
       LOGIN CONTAINER
    ========================= */

    .container {
        position: relative;

        z-index: 2;

        width: 420px;

        max-width: calc(100% - 30px);

        padding: 42px;

        background:
            rgba(255, 255, 255, 0.96);

        border:
            1px solid #eadfd5;

        border-radius: 24px;

        box-shadow:
            0 25px 70px
            rgba(68, 50, 35, 0.13);

        animation:
            cardAnimation 0.8s ease;
    }


    /* =========================
       TOP BRAND
    ========================= */

    .brand {
        width: 58px;

        height: 58px;

        margin:
            0 auto 20px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 16px;

        color: white;

        font-size: 25px;

        font-weight: 900;

        background:
            linear-gradient(
                135deg,
                #ea580c,
                #f59e0b
            );

        box-shadow:
            0 12px 25px
            rgba(234, 88, 12, 0.23);

        animation:
            brandAnimation 0.9s ease;
    }


    /* =========================
       HEADING
    ========================= */

    h1 {
        margin:
            0 0 8px;

        text-align: center;

        color: #292524;

        font-size: 32px;

        letter-spacing: -1px;
    }


    .subtitle {
        margin:
            0 0 30px;

        text-align: center;

        color: #78716c;

        font-size: 14px;

        line-height: 1.6;
    }


    .heading-line {
        width: 55px;

        height: 4px;

        margin:
            0 auto 25px;

        border-radius: 20px;

        background:
            linear-gradient(
                90deg,
                #ea580c,
                #f59e0b
            );

        animation:
            lineAnimation 0.8s ease;
    }


    /* =========================
       ERROR
    ========================= */

    .error {
        margin-bottom: 20px;

        padding:
            13px 15px;

        border-radius: 10px;

        border:
            1px solid #fecaca;

        background:
            #fef2f2;

        color: #b91c1c;

        font-size: 13px;

        line-height: 1.5;

        animation:
            errorAnimation 0.5s ease;
    }


    .error::before {
        content: "!";

        display: inline-flex;

        align-items: center;

        justify-content: center;

        width: 21px;

        height: 21px;

        margin-right: 7px;

        border-radius: 50%;

        background: #dc2626;

        color: white;

        font-weight: 900;
    }


    /* =========================
       FORM
    ========================= */

    form {
        width: 100%;
    }


    label {
        display: block;

        margin-bottom: 7px;

        color: #44403c;

        font-size: 13px;

        font-weight: 700;
    }


    input {
        width: 100%;

        padding:
            14px 15px;

        margin-bottom: 20px;

        border:
            1px solid #ddd6ce;

        border-radius: 10px;

        outline: none;

        background:
            #fffdfb;

        color: #292524;

        font-family:
            Arial, sans-serif;

        font-size: 14px;

        transition:
            border-color 0.3s ease,
            box-shadow 0.3s ease,
            background 0.3s ease,
            transform 0.3s ease;
    }


    input:hover {
        border-color:
            #fdba74;
    }


    input:focus {
        border-color:
            #f97316;

        background: white;

        transform:
            translateY(-1px);

        box-shadow:
            0 0 0 4px
            rgba(249, 115, 22, 0.10);
    }


    /* =========================
       LOGIN BUTTON
    ========================= */

    button {
        width: 100%;

        margin-top: 5px;

        padding:
            14px 20px;

        border: none;

        border-radius: 10px;

        color: white;

        background:
            linear-gradient(
                135deg,
                #ea580c,
                #f59e0b
            );

        font-size: 14px;

        font-weight: 700;

        cursor: pointer;

        box-shadow:
            0 9px 22px
            rgba(234, 88, 12, 0.23);

        transition:
            transform 0.3s ease,
            box-shadow 0.3s ease;
    }


    button:hover {
        transform:
            translateY(-3px);

        box-shadow:
            0 14px 30px
            rgba(234, 88, 12, 0.32);
    }


    button:active {
        transform:
            translateY(-1px);
    }


    /* =========================
       REGISTER
    ========================= */

    .register {
        margin-top: 25px;

        padding-top: 20px;

        border-top:
            1px solid #eee7e0;

        text-align: center;

        color: #78716c;

        font-size: 13px;
    }


    .register a {
        color: #ea580c;

        font-weight: 700;

        text-decoration: none;

        transition:
            color 0.25s ease;
    }


    .register a:hover {
        color: #c2410c;

        text-decoration: underline;
    }


    /* =========================
       FOOTER TEXT
    ========================= */

    .motivation {
        margin-top: 22px;

        text-align: center;

        color: #a8a29e;

        font-size: 11px;

        letter-spacing: 0.2px;
    }


    /* =========================
       ANIMATIONS
    ========================= */

    @keyframes cardAnimation {

        from {
            opacity: 0;

            transform:
                translateY(35px)
                scale(0.97);
        }

        to {
            opacity: 1;

            transform:
                translateY(0)
                scale(1);
        }

    }


    @keyframes brandAnimation {

        from {
            opacity: 0;

            transform:
                translateY(-15px)
                rotate(-8deg);
        }

        to {
            opacity: 1;

            transform:
                translateY(0)
                rotate(0);
        }

    }


    @keyframes lineAnimation {

        from {
            width: 0;
        }

        to {
            width: 55px;
        }

    }


    @keyframes errorAnimation {

        from {
            opacity: 0;

            transform:
                translateY(-8px);
        }

        to {
            opacity: 1;

            transform:
                translateY(0);
        }

    }


    @keyframes floatOne {

        0%,
        100% {
            transform:
                translate(0, 0);
        }

        50% {
            transform:
                translate(25px, 20px);
        }

    }


    @keyframes floatTwo {

        0%,
        100% {
            transform:
                translate(0, 0);
        }

        50% {
            transform:
                translate(-25px, -20px);
        }

    }


    /* =========================
       MOBILE
    ========================= */

    @media (max-width: 500px) {

        body {
            padding:
                20px 0;
        }


        .container {
            padding:
                32px 23px;

            border-radius:
                20px;
        }


        h1 {
            font-size:
                29px;
        }


        .brand {
            width: 52px;

            height: 52px;

            font-size: 22px;
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

<div class="container">

<div class="brand">
    M
</div>


<div class="heading-line"></div>


<h1>
    Admin Login
</h1>


<p class="subtitle">
    Welcome back. Sign in to manage your blog.
</p>


@if ($errors->any())

    <div class="error">
        {{ $errors->first() }}
    </div>

@endif


<form
    action="{{ route('login.store') }}"
    method="POST"
>

    @csrf


    <label>
        Email
    </label>


    <input
        type="email"
        name="email"
        value="{{ old('email') }}"
        required
    >


    <label>
        Password
    </label>


    <input
        type="password"
        name="password"
        required
    >


    <button type="submit">
        Login
    </button>

</form>


<div class="register">

    Don't have an account?

    <a href="{{ route('register') }}">
        Register
    </a>

</div>


<div class="motivation">
    Build something meaningful. Keep moving forward.
</div>

</div>

</body>

</html>
