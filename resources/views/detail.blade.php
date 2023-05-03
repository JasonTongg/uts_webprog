<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
            .details{
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 1rem;
                align-items: center;
                justify-content: center;
                width: 65%;
                margin: 1.5rem auto;
            }

            .details img{
                width: 100%;
                height: 400px;
                object-fit: cover;
            }

            .details .info{
                display: flex;
                flex-direction: column;
                justify-content: center;
                gap: 1rem;
            }

            .details .info p{
                font-size: 2rem;
                font-weight: 500;
            }

            .details .info p.orange{
                color: orange
            }

            .details .info p.small{
                font-size: 1.2rem;
            }
        </style>
</head>

<body>
    @extends('template')
    @section('content') 
        <section class="details">
            <img src="https://png.pngtree.com/png-vector/20201223/ourlarge/pngtree-cartoon-shoes-element-vector-png-image_2603024.jpg" alt="shoes">
            <div class="info">
                <p>{{ $item->item_name }}</p>
                <p class="orange">{{ $item->brand->brand_name }}</p>
                <p>Rp. {{ $item->price }},-</p>
                <p class="small">Description:</p>
                <p class="small">{{ $item->description }}</p>
            </div>
        </section>
    @endsection 
</body>

</html>
