<div class="container">
    <div class="py-4">
        {{-- Because she competes with no one, no one can compete with her. --}}

        <!-- Button trigger modal -->

        <!-- Modal -->
        <div wire:ignore.self class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
            aria-hidden="true">
            <div class="modal-dialog modal-md " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Modal Versement</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>
                    <div class="modal-body">



                        <form class="row " wire:submit.prevent="register">


                            <div class="col-md-6">
                                <label for="validationCustom0" class="form-label">CODE</label>
                                <input type="text" class="form-control" value="Otto" required wire:model.defer="code">

                            </div>





                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="clear()"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" wire:loading.attr='disabled'>Verser</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>







        <div class="m-3">
            <div>
                <p>Veuillez entrer le code de versement pour approuver la transaction</p>
            </div>
            <div>
                <button data-bs-toggle="modal" data-bs-target="#modalId " class="btn btn-outline-primary">Code</button>
            </div>

        </div>

        <div class="mt-5 p-2">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">N</th>
                            <th scope="col">user</th>
                            <th scope="col">montant</th>
                            <th scope="col">statut</th>
                            <th scope="col">created_at</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($solde as $item)
                        <tr class="">
                            <td scope="row">{{$item->id}}</td>
                            <td>{{$item->user->name}}</td>

                            <td>{{$item->solde}} CDF</td>
                            <td>
                                @if($item->status ==0)
                                <span class="badge rounded-pill text-bg-warning">non approuve</span>
                                @else
                                <span class="badge rounded-pill text-bg-success">approuvé</span>
                                @endif
                            </td>

                            <td class="align-middle">
                                {{$item->created_at}}
                            </td>

                        </tr>
                        @empty
                        <tr>Product not found</tr>
                        @endforelse


                    </tbody>
                </table>
                {{$solde->links("livewire::bootstrap")}}
            </div>

        </div>




        <script>
            window.addEventListener('success', event=> {

                toastr.options = ({
                "closeButton":true,
                "positionClass":"toast-bottom-right",
                
                });
                    
                    toastr.success(event.detail.message);
                  
     });

     window.addEventListener('error', event=> {
        

       
            Swal.fire({
            icon:'warning',
            title:"operation faild",
            text:event.detail.message,
            showConfirmButton: true,
            timer:3000
    
          });
          

    });
    window.addEventListener('show', event=> {
    $('#modalId').modal('show');

    });
        



        </script>

    </div>

</div>