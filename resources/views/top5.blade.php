<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .items{
                width: 100%;
                display: grid;
                grid-template-columns: repeat(auto-fit, 200px);
                gap: 1.3rem;
                justify-content: center;
            }

            .item{
                padding: .8rem;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center; 
                border: 2px solid black;
                gap: .5rem;
            }

            .item img{
                width: 100%;
                height: 150px;
                object-fit: cover;
                border: 2px solid black;
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

            section.content{
                display: flex;
                flex-direction: column;
                gap: 1rem;
                padding-block: 1rem;
                width: 90%;
                margin-inline: auto;
                min-height: 66vh;
                box-sizing: border-box;
            }

            h2.title{
                text-align: center;
                margin-block: 2rem;
                font-size: 2rem;
            }
    </style>
</head>

<body>
    {{-- @foreach ($top5_brands as $brand)
        <a href="{{ route('brand', $brand) }}">{{ $brand->brand_name }}</a>
    @endforeach --}}
    @extends('template')
    @section('content') 
        <section class="content">
            <h2 class="title">TOP 5 BRANDS</h2>
            <div class="items">
                @foreach ($top5_brands as $brand)
                    <div class="item">
                        <img src="https://png.pngtree.com/png-vector/20201223/ourlarge/pngtree-cartoon-shoes-element-vector-png-image_2603024.jpg" alt="shoes">
                        <p class="orange">{{$brand->brand_name}}</p>
                        <a href="{{ route('brand', $brand) }}">Detail</a>
                    </div>
                @endforeach
            </div>
        </section>
    @endsection
</body>

</html>
