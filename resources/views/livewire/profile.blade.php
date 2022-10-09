<div class="container">

    <div class="row">

        <form class="">
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">First name</label>
                <input type="text" class="form-control" id="validationCustom01" value="" wire:model.defer="user.name">
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Last name</label>
                <input type="text" class="form-control" id="validationCustom02" value=""
                    wire:model.defer="user.last_name">
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Email</label>
                <input type="text" class="form-control" id="validationCustom02" value="" wire:model.defer="user.email">
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Mot de pass</label>
                <input type="password" class="form-control" id="validationCustom02" value=""
                    wire:model.defer="mot_passe-">
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-6 p-2">
                <button class="btn btn-primary" type="submit">UPDATE</button>
            </div>
        </form>

    </div>

</div>