




@if( session('cart') )
    <h2>Выбраный товар</h2>
  

  <table class="table">
        <thead>
                <tr>
                    <th>Фото</th>
                    <th>Имя</th>
                    <th>Цена</th>
                    <th>Количество</th>
                    <th>Сумма</th>
                </tr>
        </thead>
        <tbody>
        @foreach (session('cart') as $product)
                <tr>
                    <td><img src="{{$product['img']}}" alt="" style="width: 70px"> </td>
                    <td>{{$product['name']}} <br> </td>
                    <td>{{$product['price']}}</td>
                    <td>
                        
                       <input type="hidden" name="product_plus" value="{{$product['id']}}">
                        <button type="button" > +  </button> 
                       

                       {{$product['qty']}} 

                       <button type="button" > -  </button> 
                     

                    <td>
                        <form class="product-delete">
                            @csrf
                        <input type="hidden" name="product_id" value="{{$product['id']}}">
                        <button class="btn btn-danger"><img src="https://img.icons8.com/ios/25/000000/trash.png"/></button>
                        </form>
                        {{$product['price'] * $product['qty']}}
                    </td>
                </tr>
        @endforeach
            </tbody>

<tfoot>
    <tr>
        <td colspan="3" class="text-right">Общее количество</td>
        <td><span class="cart-count">{{array_sum(array_column(session('cart'), 'qty'))}}  </span></td>
        <td colspan="1" class="text-left">{{session('totalSum')}}</td>
        <td colspan="2" class="text-left">  Общая сумма</td>
    </tr>
</tfoot>
</table>

@else
    Ваша корзина пуста


@endif



