@extends('layouts.dashboard')



{{-- overview of all posts --}}
@section('content')
    <div class="row">
        <div class="col-sm-6"><h1>Shopping Cart {!! Mdi::mdi('cart') !!}</h1></div>
        <div class="col-sm-6 text-end">
        </div>
    </div>
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Item</th>
                <th>Price</th>
                <th>Amount</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                <td>
                    {{ $item->id }}
                </td>
                <td>
                    {{ $item->name }}
                </td>
                <td>
                    € {{ $item->price }}
                </td>
                <td>
                    <form action="{{ route('dashboard.cart.update') }}" method="POST" class="d-flex">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="post_id" value="{{ $item->id }}">
                        <input type="number" name="quantity" value="{{ $item->quantity }}" style="width: 50px" class="form-control">
                        <button type="submit" class="btn btn-success">
                            {!! Mdi::mdi('cart') !!} 
                        </button>
                    </form>
                </td>
                <td>
                    € {{ $item->getPriceSum() }}
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <!-- total -->
                <td colspan="4" class="text-end">
                    Total
                </td>
                <td>
                    € {{ \Cart::getTotal() }}
                </td>

            </tr>
            <tr>
            </tr>
            <tr>
                <td>
                    <a href="{{ route('dashboard.cart.clear') }}" class="btn btn-danger">Clear cart</a>

                </td>
                <td colspan="4" class="text-end">
                    <a href="{{ route('dashboard.cart.checkout') }}" class="btn btn-success">Checkout</a>
                </td>
            </tr>
        </tfoot>
    </table>
@endsection

