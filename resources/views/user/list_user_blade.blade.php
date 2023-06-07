<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .odd{
            background: yellowgreen;

        }
    </style>
</head>
<body>
    <h1>List User Blade Template</h1>
    
    {{-- de may hieu dong sau la 1 bien thi dung @varbatim --}}
    @verbatim
        {{$name}}
    @endverbatim

    <?php

        $content = "<script>alert('123');</script>";

//         echo htmlspecialchars($content);
//         $arrayProduct = [
//             ['id' => 2, 'name'=>'Product A', 'price' => 32000],
//             ['id' => 4, 'name'=>'Product B', 'price' => 30000],
//             ['id' => 6, 'name'=>'Product C', 'price' => 35000],
//             ['id' => 8, 'name'=>'Product D', 'price' => 38000],
//             ['id' => 10, 'name'=>'Product E', 'price' => 40000],
// ];   
// $arrayProduct = []; 
    ?>

    @php
        // $content = "<script>alert('123');</script>";
        // echo htmlspecialchars($content);

  
        // $arrayProduct = []; 


    @endphp
            {{-- //echo 1 bien --}}
            {{-- {{$content}}; --}}
            {{$test}};
            {{$a ?? 'a'}}
    
            {{-- //echo 1 bien ko co specialchars
            // {!! $content !!}; --}}
    <table border="1">
        <tr>
            <td>STT</td>
            <td>ID</td>
            <td>Name</td>
            <td>Price</td>
        </tr>
        
        @forelse($arrayProduct as $key => $product)
        <tr class="<?= $key % 2 != 0 ? 'odd' : '' ?> ">
            <td><?php echo $key + 1; ?></td>
            <td><?= $product['id'] ?></td>
            <td><?= $product['name']?></td>
            <td><?= number_format($product['price'], 3) ?></td>
        </tr>
        @empty
            <tr>
                <td colspan="4">No Products</td>
            </tr>
        @endforelse

    </table>
    <table border="1">
        <tr>
            <td>STT</td>
            <td>ID</td>
            <td>Name</td>
            <td>Price</td>
        </tr>
        
        @forelse($arrayProduct as $key => $product)
        <tr class="<?= $loop->odd ? 'odd' : '' ?> ">
            <td>{{$loop->iteration}}</td>
            <td>{{$product['id']}}</td>
            <td>{!! $product['name'] !!}</td>
            <td>{{number_format($product['price'], 2)}}</td>
        </tr>
        @empty
            <tr>
                <td colspan="4">No Products</td>
            </tr>
        @endforelse

    </table>

</body>
</html>