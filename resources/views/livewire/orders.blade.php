<div>

    <div>

    </div>

    <div class="table-responsive-md p-4 m-2">
        <table class="table table-striped
    table-hover	
    table-borderless
    align-middle">
            <thead class="">
                <caption>Table Name</caption>
                <tr>
                    <th> N1</th>
                    <th>Client</th>
                    <th> Panier</th>
                    <th> Price</th>
                    <th> Date</th>
                </tr>

                uantity
            </thead>
            <tbody class="table-group-divider">
                @forelse ( $Panier as $item)
                <tr class="">
                    <td scope="row">Item</td>
                    <td>{{$item->user->name}}</td>
                    <td>
                    </td>
                    <td>{{$item->totalPrice}}</td>
                    <td>{{$item->created_at}}</td>
                </tr>
                @empty

                @endforelse

            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>


</div>