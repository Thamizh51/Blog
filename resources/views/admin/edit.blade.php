<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<title>Edit Post</title>


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

        min-height: 100vh;

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
       TOP BAR
    ========================= */

    .topbar {
        position: sticky;

        top: 0;

        z-index: 1000;

        padding: 18px 30px;

        display: flex;

        align-items: center;

        justify-content: space-between;

        background:
            linear-gradient(
                135deg,
                #292524,
                #431407,
                #7c2d12
            );

        color: white;

        box-shadow:
            0 8px 25px
            rgba(41, 37, 36, 0.15);

        animation:
            topbarAnimation 0.7s ease;
    }


    .brand {
        color: white;

        text-decoration: none;

        font-size: 23px;

        font-weight: 900;

        letter-spacing: -0.5px;
    }


    .brand span {
        color: #fbbf24;
    }


    .back-dashboard {
        display: inline-flex;

        align-items: center;

        gap: 7px;

        color: white;

        text-decoration: none;

        padding: 9px 15px;

        border-radius: 9px;

        background:
            rgba(255,255,255,0.08);

        border:
            1px solid
            rgba(255,255,255,0.14);

        font-size: 13px;

        font-weight: 700;

        transition:
            transform 0.3s ease,
            background 0.3s ease;
    }


    .back-dashboard:hover {
        transform:
            translateY(-2px);

        background:
            rgba(255,255,255,0.16);
    }


    /* =========================
       CONTAINER
    ========================= */

    .container {
        width: 100%;

        max-width: 820px;

        margin:
            55px auto;

        padding:
            0 20px;

        animation:
            containerAnimation 0.8s ease;
    }


    /* =========================
       FORM CARD
    ========================= */

    .form-card {
        background: white;

        border-radius: 24px;

        padding:
            45px;

        border:
            1px solid #e7e0d8;

        box-shadow:
            0 20px 60px
            rgba(68, 50, 35, 0.09);
    }


    /* =========================
       HEADING
    ========================= */

    .heading {
        margin-bottom: 35px;
    }


    .heading-line {
        width: 65px;

        height: 5px;

        border-radius: 20px;

        margin-bottom: 20px;

        background:
            linear-gradient(
                90deg,
                #ea580c,
                #f59e0b
            );

        animation:
            lineAnimation 0.8s ease;
    }


    h1 {
        margin: 0 0 10px;

        font-size: 42px;

        letter-spacing: -1.5px;

        color: #292524;
    }


    .heading p {
        margin: 0;

        color: #78716c;

        font-size: 15px;

        line-height: 1.7;
    }


    /* =========================
       ERROR
    ========================= */

    .error {
        margin-bottom: 25px;

        padding: 16px 18px;

        border-radius: 12px;

        border:
            1px solid #fecaca;

        background:
            linear-gradient(
                135deg,
                #fef2f2,
                #fee2e2
            );

        color: #b91c1c;

        font-size: 14px;

        line-height: 1.7;

        animation:
            errorAnimation 0.5s ease;
    }


    .error::before {
        content: "!";
        
        display: inline-flex;

        align-items: center;

        justify-content: center;

        width: 24px;

        height: 24px;

        margin-right: 8px;

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

        margin-bottom: 8px;

        color: #44403c;

        font-size: 14px;

        font-weight: 700;
    }


    input[type="text"],
    textarea {
        width: 100%;

        border:
            1px solid #ddd6ce;

        border-radius: 11px;

        padding:
            14px 15px;

        margin:
            0 0 24px;

        outline: none;

        background:
            #fffdfb;

        color: #292524;

        font-family:
            Arial, sans-serif;

        font-size: 15px;

        transition:
            border-color 0.3s ease,
            box-shadow 0.3s ease,
            background 0.3s ease;
    }


    input[type="text"]:focus,
    textarea:focus {
        border-color: #f97316;

        background: white;

        box-shadow:
            0 0 0 4px
            rgba(249, 115, 22, 0.10);
    }


    textarea {
        height: 240px;

        resize: vertical;

        line-height: 1.7;
    }


    /* =========================
       CURRENT IMAGE
    ========================= */

    .current-image-box {
        margin-bottom: 25px;

        padding: 18px;

        border-radius: 14px;

        border:
            1px solid #e7e0d8;

        background:
            #fffaf5;
    }


    .current-image-label {
        margin-bottom: 12px;

        color: #57534e;

        font-size: 13px;

        font-weight: 700;
    }


    .current-image {
        width: 190px;

        height: 125px;

        display: block;

        object-fit: cover;

        border-radius: 10px;

        border:
            1px solid #e7e0d8;

        box-shadow:
            0 8px 20px
            rgba(68, 50, 35, 0.10);

        transition:
            transform 0.4s ease;
    }


    .current-image:hover {
        transform:
            scale(1.04);
    }


    /* =========================
       FILE INPUT
    ========================= */

    input[type="file"] {
        width: 100%;

        padding: 13px;

        margin:
            0 0 30px;

        border:
            1px dashed #fdba74;

        border-radius: 12px;

        background:
            #fff7ed;

        color: #78716c;

        cursor: pointer;

        transition:
            background 0.3s ease,
            border-color 0.3s ease;
    }


    input[type="file"]:hover {
        background:
            #ffedd5;

        border-color:
            #fb923c;
    }


    /* =========================
       UPDATE BUTTON
    ========================= */

    .button-row {
        display: flex;

        align-items: center;

        gap: 12px;

        margin-top: 5px;
    }


    button[type="submit"] {
        border: none;

        color: white;

        padding:
            14px 24px;

        border-radius: 10px;

        cursor: pointer;

        font-size: 14px;

        font-weight: 700;

        background:
            linear-gradient(
                135deg,
                #ea580c,
                #f59e0b
            );

        box-shadow:
            0 8px 20px
            rgba(234, 88, 12, 0.22);

        transition:
            transform 0.3s ease,
            box-shadow 0.3s ease;
    }


    button[type="submit"]:hover {
        transform:
            translateY(-3px);

        box-shadow:
            0 13px 28px
            rgba(234, 88, 12, 0.32);
    }


    .cancel-btn {
        display: inline-flex;

        align-items: center;

        justify-content: center;

        padding:
            13px 20px;

        border-radius: 10px;

        text-decoration: none;

        color: #57534e;

        background:
            #f5f5f4;

        border:
            1px solid #e7e0d8;

        font-size: 14px;

        font-weight: 700;

        transition:
            transform 0.3s ease,
            background 0.3s ease;
    }


    .cancel-btn:hover {
        transform:
            translateY(-2px);

        background:
            #e7e5e4;
    }


    /* =========================
       FOOTER
    ========================= */

    .footer {
        position: relative;

        overflow: hidden;

        margin-top: 80px;

        padding:
            60px 25px 25px;

        text-align: center;

        color: white;

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

        width: 380px;

        height: 380px;

        border-radius: 50%;

        background:
            rgba(245, 158, 11, 0.09);

        top: -250px;

        left: -100px;
    }


    .footer::after {
        content: "";

        position: absolute;

        width: 320px;

        height: 320px;

        border-radius: 50%;

        background:
            rgba(249, 115, 22, 0.09);

        bottom: -220px;

        right: -100px;
    }


    .footer-content {
        position: relative;

        z-index: 2;

        max-width: 700px;

        margin: auto;
    }


    .footer h2 {
        margin: 0 0 15px;

        font-size: 29px;
    }


    .footer h2 span {
        color: #fbbf24;
    }


    .footer p {
        margin: 0;

        color: #d6d3d1;

        font-size: 15px;

        line-height: 1.8;
    }


    .footer-bottom {
        position: relative;

        z-index: 2;

        max-width: 820px;

        margin:
            40px auto 0;

        padding-top: 20px;

        border-top:
            1px solid
            rgba(255,255,255,0.12);

        color: #a8a29e;

        font-size: 12px;
    }


    /* =========================
       ANIMATIONS
    ========================= */

    @keyframes topbarAnimation {

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


    @keyframes containerAnimation {

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


    @keyframes lineAnimation {

        from {
            width: 0;
        }

        to {
            width: 65px;
        }

    }


    @keyframes errorAnimation {

        from {
            opacity: 0;

            transform:
                translateY(-10px);
        }

        to {
            opacity: 1;

            transform:
                translateY(0);
        }

    }


    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 650px) {

        .topbar {
            padding:
                15px 18px;
        }


        .brand {
            font-size: 20px;
        }


        .back-dashboard {
            padding:
                8px 11px;

            font-size: 12px;
        }


        .container {
            margin:
                30px auto;

            padding:
                0 15px;
        }


        .form-card {
            padding:
                30px 22px;

            border-radius:
                18px;
        }


        h1 {
            font-size: 34px;
        }


        textarea {
            height: 200px;
        }


        .button-row {
            flex-direction:
                column;

            align-items:
                stretch;
        }


        button[type="submit"],
        .cancel-btn {
            width: 100%;
        }


        .current-image {
            width: 100%;

            height: 200px;
        }


        .footer {
            margin-top:
                50px;

            padding:
                50px 20px 25px;
        }


        .footer h2 {
            font-size: 26px;
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

<div class="topbar">

<a
    href="{{ route('dashboard') }}"
    class="brand"
>
    My<span>Blog</span>
</a>


<a
    href="{{ route('admin.dashboard') }}"
    class="back-dashboard"
>
    ← Dashboard
</a>

</div>

<div class="container">

<div class="form-card">


    <div class="heading">

        <div class="heading-line"></div>

        <h1>
            Edit Post
        </h1>

        <p>
            Update your post details and keep your content fresh.
        </p>

    </div>


    @if($errors->any())

        <div class="error">

            @foreach($errors->all() as $error)

                <div>
                    {{ $error }}
                </div>

            @endforeach

        </div>

    @endif


    <form
        action="{{ route('admin.posts.update', $post) }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf

        @method('PUT')


        <label>
            Title
        </label>


        <input
            type="text"
            name="title"
            value="{{ old('title', $post->title) }}"
            required
        >


        <label>
            Content
        </label>


        <textarea
            name="content"
            required
        >{{ old('content', $post->content) }}</textarea>


        @if($post->image)

            <div class="current-image-box">

                <div class="current-image-label">
                    Current Image
                </div>

                <img
                    src="{{ asset('storage/' . $post->image) }}"
                    class="current-image"
                    alt="{{ $post->title }}"
                >

            </div>

        @endif


        <label>
            New Image
        </label>


        <input
            type="file"
            name="image"
            accept="image/*"
        >


        <div class="button-row">

            <button type="submit">
                Update Post
            </button>


            <a
                href="{{ route('dashboard') }}"
                class="cancel-btn"
            >
                Cancel
            </a>

        </div>


    </form>


</div>

</div>

<footer class="footer">

<div class="footer-content">

    <h2>
        Keep creating.
        <span>Keep improving.</span>
    </h2>

    <p>
        Every update is progress. Keep building,
        keep learning, and keep making your ideas better.
    </p>

</div>


<div class="footer-bottom">
    © 2026 My Blog Admin. Keep moving forward.
</div>


</footer>

</body>

</html>
