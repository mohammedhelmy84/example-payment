<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment</title>
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Payemnt Page</h1>
    <div class="card">
        <div class="card-header">
          payments
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col"><i class="las la-shopping-cart" style="color:cyan; font-size:25px;"></i>product</th>
                <th scope="col"><i class="las la-money-bill" style="color:green; font-size:25px;"></i>price</th>
                <th scope="col"><i class="las la-file-invoice" style="color:blueviolet; font-size:25px;"></i>quantity</th>
                <th scope="col"><i class="las la-money-check" style="color:grey; font-size:25px;"></i>total</th>
                <th scope="col"><i class="lar la-folder-open" style="color:yellow; font-size:25px;"></i>action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td><span><i class="las la-mobile" style="color:black; font-size:25px;"></i>Mobile</span></td>
                <td>500</td>
                <td>2</td>
                <td>1000</td>
                <td><a href="#" class="btn btn-info btn-sm"><i class="las la-eye"></i>show</a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="las la-trash"></i>delete</a></td>
              </tr>
            </tbody>
          </table>
          <form action="{{route('excute_payment')}}" method="POST">
            @csrf
            <input type="hidden" name="amount" value="1000">
            <input type="hidden" name="product_name" value="Mobile">
            <button class="btn btn-success"><i class="las la-receipt"></i>Payment PayPal</button>
            <span class="badge text-bg-warning">Total:1000 USD</span>
          </form>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
