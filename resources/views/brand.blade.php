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
                font-size: 1.5rem;
                font-weight: 500;
            }

            .details .info p.orange{
                color: orange;
                font-size: 2.5rem;
                text-transform: capitalize;
            }

            .details .info p.small{
                font-size: 1.2rem;
            }

            .recommandation{
                display: flex;
                flex-direction: column;
                gap: 1rem;
                width: 90%;
                margin-inline: auto;
                padding-block: 2rem;
            }

            .recommandation h2{
                color: orange;
                font-size: 2rem;
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
                color: black;
                text-decoration: none;
            }
    </style>
</head>

<body>
    @extends('template')
    @section('content') 
        <section class="details">
            <img src="https://png.pngtree.com/png-vector/20201223/ourlarge/pngtree-cartoon-shoes-element-vector-png-image_2603024.jpg" alt="shoes">
            <div class="info">
                <p class="orange">{{ $brand->brand_name }}</p>
                <p>Address: Palmerah - Indonesia</p>
                <p>Email: {{ $brand->brand_name }}@gmail.com</p>
                <p class="small">Description:</p>
                <p class="small">{{ $brand->description }}</p>
            </div>
        </section>
        <section class="recommandation">
            <h2>{{ $brand->brand_name }}'s Item</h2>
            <div class="items">
                @foreach ($brand->items as $item)
                    <div class="item">
                        <img src="https://png.pngtree.com/png-vector/20201223/ourlarge/pngtree-cartoon-shoes-element-vector-png-image_2603024.jpg" alt="shoes">
                        <p>{{ $item->item_name }}</p>
                        <p class="orange">{{ $brand->brand_name }}</p>
                        <p>{{ $item->price }}</p>
                        <a href="{{ route('detail', $item) }}">Detail</a>
                    </div>
                @endforeach
            </div>
        </section>
    @endsection 
</body>

</html>
