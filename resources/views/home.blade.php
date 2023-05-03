<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
            section.content{
                width: 90%;
                margin-inline: auto;
                display: flex;
                flex-direction: column;
                gap: 1.5rem;
                padding-block: 2rem;
            }

            .banner{
                width: 100%;
                background-color: rgb(211, 211, 211);
                text-align: center;
                padding: 3rem;
                font-size: 2.5rem;
            }

            .label{
                background-color: orange;
                width: 55%;
                padding: 1.1rem 1rem;
                font-size: 1.5rem;
                font-weight: bold;
            }

            .items{
                width: 100%;
                display: grid;
                grid-template-columns: repeat(auto-fit, 200px);
                gap: 1.3rem;
            }

            .item{
                padding: .8rem;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: center; 
                border: 2px solid black;
                gap: .5rem;
            }

            .item img{
                width: 100%;
                height: 150px;
                object-fit: cover;
            }

            .item p{
                font-weight: 600;
                font-size: 1.2rem;
            }

            .item p.orange{
                color: orange;
            }

            .item a{
                background-color: orange;
                padding: .5rem 1.2rem;
                border: none;
                outline: none;
                font-size: 1.2rem;
                text-decoration: none;
                color: black;
            }
    </style>
</head>

<body>
    @extends('template')
    @section('content') 
    <section class="content">
            <div class="banner">
                Banner Image
            </div>
            <div class="label">
                All Items
            </div>
            <div class="items">
                @foreach ($items as $item)
                    <div class="item">
                        <img src="https://png.pngtree.com/png-vector/20201223/ourlarge/pngtree-cartoon-shoes-element-vector-png-image_2603024.jpg" alt="shoes">
                        <p>{{$item->item_name}}</p>
                        <p class="orange">{{$item->brand->brand_name}}</p>
                        <p>Rp. {{$item->price}},- </p>
                        <a href="{{ route('detail', $item) }}">Detail</a>
                    </div>
                @endforeach
            </div>
    </section>
    @endsection 
</body>

</html>
