<div class="row">
    {{-- Because she competes with no one, no one can compete with her. --}}

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-md " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body">


                    <form class="row " wire:submit.prevent="register">
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">users id</label>
                            <input type="text" class="form-control" value="Mark" required wire:model="user.name">

                        </div>
                        <div class="col-md-6">
                            <label for="validationCusto2" class="form-label">montant</label>
                            <input type="text" class="form-control" ivalue="Otto" required>

                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom0" class="form-label">montant</label>
                            <input type="text" class="form-control" value="Otto" required wire:model.defer="montant">

                        </div>





                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="clear()"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" wire:loading.attr='disabled'>Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>







    <div class="m-3">

        <div>
            <button data-bs-toggle="modal" data-bs-target="#modalId " class="btn btn-outline-primary">NOUVEAU</button>
        </div>

    </div>

    <div class="mt-5 p-2">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">N</th>
                        <th scope="col">user</th>
                        <th scope="col">mont</th>
                        <th scope="col">statut</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($solde as $item)
                    <tr class="">
                        <td scope="row">{{$item->id}}</td>
                        <td>{{$item->user->name}}</td>

                        <td>{{$item->montant}}</td>

                        <td class="align-middle">
                            <button wire:click="update({{$item['id']}})" class="btn btn-outline-primary"><i
                                    class="fa fa-edit" aria-hidden="true"></i></button>
                            <button wire:click="delete({{$item['id']}})" class="btn btn-outline-danger"><i
                                    class="fa fa-trash" aria-hidden="true"></i></button>
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
                    
                    toastr.success(event.detail.message)
                    
                    
                    });

     window.addEventListener('error', event=> {
    $('#modalId').modal('hide');
    toastr.error(event.detail.message)
      
    });
    window.addEventListener('show', event=> {
    $('#modalId').modal('show');

    });
        



    </script>

</div>