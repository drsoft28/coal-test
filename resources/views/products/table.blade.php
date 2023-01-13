<table class="table" id="product_list" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Qty</th>
      <th scope="col">Price</th>
      <th scope="col">Created</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    @foreach($items as $item)
    @include('products.row')
    @endforeach
  </tbody>
</table>