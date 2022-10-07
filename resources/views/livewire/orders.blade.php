<div>

    <div>
        <h2 class="">achat effectuer</h2>
    </div>

    <div class="m-2">

        <div class="table-responsive-md p-4 m-2">
            <table class="table table-striped">
                <thead class="">
                    <tr>
                        <th> N1</th>
                        <th>Client</th>
                        <th> Panier</th>
                        <th> Price</th>
                        <th> Date</th>
                    </tr>

                </thead>
                <tbody class="table-group-divider">
                    @forelse ( $Panier as $item)
                    <tr class="">
                        <td scope="row">{{$item->id}}</td>
                        <td>{{$item->user->name}}</td>
                        <td>
                            @foreach ($item->panier->items as $items)
                            {{$items['name'].', ' }}
                            @endforeach

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


</div>