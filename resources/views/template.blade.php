<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UTS - 2301877294</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <style>
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            body{
                width: 100%;
            }
            header{
                text-align: center;
                height: 150px;
                line-height: 150px;
                background-color: rgb(144, 184, 247);
                width: 100%;
            }
            header h2{
                font-size: 3rem;
            }
            Footer{
                width: 100%;
                text-align: center;
                padding:.5rem 1rem;
                background-color: rgb(144, 184, 247);
            }
            nav{
                width: 100%;
                padding-block: 1rem;
                background-color: yellow;
                position: relative;
            }
            nav ul{
                list-style: none;
                display: flex;
                align-content: center;
                justify-content: space-evenly;
            }
            nav ul li{
                font-size: 1.5rem;
                cursor: pointer;
            }
            nav ul li a{
                text-decoration: none;
            }
            .popup{
                flex-direction: column;
                align-items: flex-start;
                justify-content: center;
                position: absolute;
                top: 100%;
                left: 33%;
                width: 130px;
                display: none;
            }
            .popup.active{
                display: flex;
            }
            .popup a{
                text-decoration: none;
                font-size: 1.1rem;
                font-weight: bold;
                background-color: yellow;
                padding-inline: 1rem;
                width: 100%;
                padding-block: .5rem;
            }
            .popup a:hover{
                background-color: rgb(251, 251, 155);
            }
        </style>
    </head>
    <body>
        <header>
            <h2>Top Reseller</h2>
        </header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li class="category">
                    Category
                </li>
                <li><a href="/brand">Top 5 Brands</a></li>
                <li><a href="/about">About us</a></li>
            </ul>
            <div class="popup">
                <a href="/category/1">Shirt</a>
                <a href="/category/2">Bag</a>
                <a href="/category/3">Shoe</a>
                <a href="/category/4">Dress</a>
            </div>
        </nav>
        @yield('content')
        <footer>&copy; Top Reseller 2023</footer>
        <script defer>
            let popup = document.querySelector(".popup");
            document.querySelector(".category").addEventListener("click", () => {
                popup.classList.toggle("active");
            })
        </script>
    </body>
</html>
