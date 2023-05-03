<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UTS - 2301877294</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <style>
            .content{
                display: flex;
                flex-direction: column;
                justify-content: center;
                gap: 1rem;
                width: 90%;
                margin-inline: auto;
                padding-block: 2rem;
                min-height: 65.5vh;
            }

            .content p.underline{
                text-decoration: underline;
                font-weight: bold;
            }

            .content h2{
                font-size: 2.5rem;
                margin-bottom: 1.5rem;
            }

            .content p{
                font-size: 1.2rem;
            }
        </style>
    </head>
    <body>
        @extends('template')
        @section('content') 
        <section class="content">
            <h2>Top Reseller</h2>
            <p class="underline">Address</p>
            <p>Binus Anggrek <br/> 2, Jl. Raya Kb. Jeruk No.27, RT.1/RW.9, Kb. Jeruk, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530</p>
            <p>Email: reseller-midterm.binus.ac.id</p>
            <p>Phone: 021-0987654321</p>
            <p class="underline">Open Hours</p>
            <p>Daily (include weekend): 08:00 AM - 05:00 PM</p>
        </section>
        @endsection 
    </body>
</html>
