<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<title>Admin Dashboard</title>


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
       NAVBAR
    ========================= */

    .navbar {
        position: sticky;

        top: 0;

        z-index: 1000;

        padding: 18px 40px;

        display: flex;

        justify-content: space-between;

        align-items: center;

        color: white;

        background:
            linear-gradient(
                135deg,
                #292524,
                #431407,
                #7c2d12
            );

        box-shadow:
            0 8px 25px
            rgba(41, 37, 36, 0.15);

        animation:
            navbarAnimation 0.7s ease;
    }


    .navbar::after {
        content: "";

        position: absolute;

        width: 250px;

        height: 250px;

        border-radius: 50%;

        background:
            rgba(245, 158, 11, 0.08);

        top: -170px;

        right: 15%;
    }


    .navbar h2 {
        position: relative;

        z-index: 2;

        margin: 0;

        font-size: 24px;

        letter-spacing: -0.5px;
    }


    .navbar h2::first-letter {
        color: #fbbf24;
    }


    /* =========================
       LOGOUT
    ========================= */

    .logout {
        position: relative;

        z-index: 3;
    }


    .logout button {
        border: 1px solid
            rgba(255, 255, 255, 0.15);

        background:
            rgba(255, 255, 255, 0.08);

        color: white;

        padding: 10px 17px;

        border-radius: 9px;

        cursor: pointer;

        font-size: 14px;

        font-weight: 700;

        transition:
            background 0.3s ease,
            transform 0.3s ease,
            box-shadow 0.3s ease;
    }


    .logout button:hover {
        background: #dc2626;

        transform:
            translateY(-2px);

        box-shadow:
            0 8px 20px
            rgba(220, 38, 38, 0.25);
    }


    /* =========================
       CONTAINER
    ========================= */

    .container {
        max-width: 1200px;

        margin: 55px auto;

        padding: 0 25px;

        animation:
            containerAnimation 0.8s ease;
    }


    /* =========================
       TOP SECTION
    ========================= */

    .top {
        display: flex;

        justify-content: space-between;

        align-items: center;

        gap: 20px;

        margin-bottom: 30px;
    }


    .top h1 {
        margin: 0;

        font-size: 42px;

        line-height: 1;

        letter-spacing: -1.5px;

        color: #292524;
    }


    .top h1::after {
        content: "";

        display: block;

        width: 60px;

        height: 5px;

        margin-top: 15px;

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
       CREATE BUTTON
    ========================= */

    .add-btn {
        display: inline-flex;

        align-items: center;

        gap: 8px;

        text-decoration: none;

        color: white;

        padding: 13px 20px;

        border-radius: 10px;

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


    .add-btn:hover {
        transform:
            translateY(-3px);

        box-shadow:
            0 13px 28px
            rgba(234, 88, 12, 0.32);
    }


    /* =========================
       SUCCESS MESSAGE
    ========================= */

    .success {
        position: relative;

        overflow: hidden;

        padding: 15px 18px;

        margin-bottom: 25px;

        border-radius: 12px;

        border:
            1px solid #bbf7d0;

        background:
            linear-gradient(
                135deg,
                #f0fdf4,
                #dcfce7
            );

        color: #166534;

        font-weight: 600;

        box-shadow:
            0 7px 20px
            rgba(22, 101, 52, 0.07);

        animation:
            successAnimation 0.6s ease;
    }


    .success::before {
        content: "✓";

        display: inline-flex;

        align-items: center;

        justify-content: center;

        width: 25px;

        height: 25px;

        margin-right: 9px;

        border-radius: 50%;

        background: #22c55e;

        color: white;

        font-size: 13px;

        font-weight: 900;
    }


    /* =========================
       TABLE CARD
    ========================= */

    .table-wrapper {
        overflow-x: auto;

        background: white;

        border-radius: 20px;

        border:
            1px solid #e7e0d8;

        box-shadow:
            0 15px 45px
            rgba(68, 50, 35, 0.08);

        animation:
            tableAnimation 0.8s ease;
    }


    table {
        width: 100%;

        min-width: 850px;

        background: white;

        border-collapse: collapse;
    }


    /* =========================
       TABLE HEADER
    ========================= */

    th {
        padding: 18px 20px;

        text-align: left;

        border-bottom:
            1px solid #e7e0d8;

        background:
            #fffaf5;

        color: #57534e;

        font-size: 13px;

        text-transform: uppercase;

        letter-spacing: 0.7px;
    }


    th:first-child {
        border-radius:
            20px 0 0 0;
    }


    th:last-child {
        border-radius:
            0 20px 0 0;
    }


    /* =========================
       TABLE BODY
    ========================= */

    td {
        padding: 18px 20px;

        text-align: left;

        border-bottom:
            1px solid #f0ebe6;

        color: #57534e;

        font-size: 14px;

        vertical-align: middle;

        transition:
            background 0.3s ease;
    }


    tbody tr {
        transition:
            transform 0.25s ease,
            background 0.25s ease;
    }


    tbody tr:hover {
        background:
            #fffaf5;
    }


    tbody tr:last-child td {
        border-bottom: none;
    }


    /* =========================
       POST IMAGE
    ========================= */

    .post-image {
        width: 82px;

        height: 62px;

        display: block;

        object-fit: cover;

        border-radius: 9px;

        border:
            1px solid #e7e0d8;

        box-shadow:
            0 5px 15px
            rgba(68, 50, 35, 0.10);

        transition:
            transform 0.35s ease,
            box-shadow 0.35s ease;
    }


    tbody tr:hover .post-image {
        transform:
            scale(1.06);

        box-shadow:
            0 8px 20px
            rgba(68, 50, 35, 0.15);
    }


    /* =========================
       NO IMAGE
    ========================= */

    td .no-image {
        display: inline-flex;

        align-items: center;

        justify-content: center;

        width: 82px;

        height: 62px;

        border-radius: 9px;

        background:
            linear-gradient(
                135deg,
                #fff7ed,
                #ffedd5
            );

        color: #c2410c;

        font-size: 11px;

        font-weight: 700;
    }


    /* =========================
       TITLE
    ========================= */

    td:nth-child(2) {
        max-width: 230px;

        color: #292524;

        font-weight: 700;

        font-size: 15px;
    }


    /* =========================
       CONTENT
    ========================= */

    td:nth-child(3) {
        max-width: 350px;

        line-height: 1.6;

        color: #78716c;
    }


    /* =========================
       ACTIONS
    ========================= */

    td:last-child {
        white-space: nowrap;
    }


    .edit-btn,
    .delete-btn {
        display: inline-flex;

        align-items: center;

        justify-content: center;

        min-width: 65px;

        padding: 8px 12px;

        border-radius: 8px;

        font-size: 13px;

        font-weight: 700;

        transition:
            transform 0.25s ease,
            box-shadow 0.25s ease;
    }


    .edit-btn {
        background:
            #fff7ed;

        color: #c2410c;

        border:
            1px solid #fed7aa;

        text-decoration: none;

        margin-right: 5px;
    }


    .edit-btn:hover {
        transform:
            translateY(-2px);

        background: #ffedd5;

        box-shadow:
            0 6px 15px
            rgba(234, 88, 12, 0.12);
    }


    .delete-btn {
        background:
            #fef2f2;

        color: #dc2626;

        border:
            1px solid #fecaca;

        cursor: pointer;
    }


    .delete-btn:hover {
        transform:
            translateY(-2px);

        background: #fee2e2;

        box-shadow:
            0 6px 15px
            rgba(220, 38, 38, 0.12);
    }


    /* =========================
       EMPTY STATE
    ========================= */

    .empty-row {
        text-align: center !important;

        padding: 70px 20px !important;

        color: #78716c !important;
    }


    .empty-icon {
        width: 60px;

        height: 60px;

        margin:
            0 auto 18px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 50%;

        background:
            #fff7ed;

        color: #ea580c;

        font-size: 25px;
    }


    /* =========================
       FOOTER
    ========================= */

    .footer {
        position: relative;

        overflow: hidden;

        margin-top: 80px;

        padding:
            65px 25px 25px;

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

        top: -240px;

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

        max-width: 750px;

        margin: auto;
    }


    .footer h2 {
        margin: 0 0 15px;

        font-size: 30px;
    }


    .footer h2 span {
        color: #fbbf24;
    }


    .footer p {
        margin: 0 auto;

        max-width: 650px;

        color: #d6d3d1;

        font-size: 15px;

        line-height: 1.8;
    }


    .footer-bottom {
        position: relative;

        z-index: 2;

        max-width: 1100px;

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

    @keyframes navbarAnimation {

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


    @keyframes tableAnimation {

        from {
            opacity: 0;

            transform:
                translateY(25px)
                scale(0.98);
        }

        to {
            opacity: 1;

            transform:
                translateY(0)
                scale(1);
        }

    }


    @keyframes successAnimation {

        from {
            opacity: 0;

            transform:
                translateY(-10px)
                scale(0.98);
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
            width: 60px;
        }

    }


    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 700px) {

        .navbar {
            padding:
                16px 20px;
        }


        .navbar h2 {
            font-size: 20px;
        }


        .logout button {
            padding:
                9px 12px;

            font-size: 12px;
        }


        .container {
            margin:
                35px auto;

            padding:
                0 15px;
        }


        .top {
            align-items:
                flex-start;

            flex-direction:
                column;

            margin-bottom:
                25px;
        }


        .top h1 {
            font-size: 34px;
        }


        .add-btn {
            width: 100%;

            justify-content:
                center;
        }


        .table-wrapper {
            border-radius: 15px;
        }


        table {
            min-width:
                760px;
        }


        .footer {
            margin-top:
                50px;

            padding:
                50px 20px 25px;
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

<div class="navbar">

<h2>
    Admin Dashboard
</h2>


<form
    action="{{ route('admin.logout') }}"
    method="POST"
    class="logout"
>

    @csrf

    <button type="submit">
        Logout
    </button>

</form>

</div>

<div class="container">

<div class="top">

    <h1>
        Manage Posts
    </h1>


    <a
        href="{{ route('admin.posts.create') }}"
        class="add-btn"
    >
        + Create Post
    </a>

</div>


@if(session('success'))

    <div class="success">
        {{ session('success') }}
    </div>

@endif


<div class="table-wrapper">

    <table>

        <thead>

            <tr>

                <th>
                    Image
                </th>

                <th>
                    Title
                </th>

                <th>
                    Content
                </th>

                <th>
                    Actions
                </th>

            </tr>

        </thead>


        <tbody>

            @forelse($posts as $post)

                <tr>

                    <td>

                        @if($post->image)

                            <img
                                src="{{ asset('storage/' . $post->image) }}"
                                class="post-image"
                                alt="{{ $post->title }}"
                            >

                        @else

                            <div class="no-image">
                                No Image
                            </div>

                        @endif

                    </td>


                    <td>
                        {{ $post->title }}
                    </td>


                    <td>
                        {{ Str::limit($post->content, 80) }}
                    </td>


                    <td>

                        <a
                            href="{{ route('admin.posts.edit', $post) }}"
                            class="edit-btn"
                        >
                            Edit
                        </a>


                        <form
                            action="{{ route('admin.posts.destroy', $post) }}"
                            method="POST"
                            style="display:inline;"
                        >

                            @csrf

                            @method('DELETE')

                            <button
                                type="submit"
                                class="delete-btn"
                                onclick="return confirm('Are you sure you want to delete this post?')"
                            >
                                Delete
                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td
                        colspan="4"
                        class="empty-row"
                    >

                        <div class="empty-icon">
                            +
                        </div>

                        No posts found.

                    </td>

                </tr>

            @endforelse

        </tbody>

    </table>

</div>

</div>

<footer class="footer">

<div class="footer-content">

    <h2>
        Create.
        <span>Improve.</span>
        Grow.
    </h2>

    <p>
        Great things are built one step at a time.
        Keep creating, keep learning, and keep
        improving your work every day.
    </p>

</div>


<div class="footer-bottom">
    © 2026 My Blog Admin. Keep moving forward.
</div>

</footer>

</body>

</html>
