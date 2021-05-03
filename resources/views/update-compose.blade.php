<div>
                
                
    <div class="container">


        <!-- alert message -->

        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif



        @if($errors->any())
        {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
        @endif


        <!-- while we are about to update field value -->
        <form wire:submit.prevent="update">


            <label> SMS Title </label>

            <input type="text"  wire:model="sms_title" class="form-control form-control-lg my-1" placeholder="SMS Title">


            <label> Offer Name </label>

            <input type="text" wire:model="offer_name" class="form-control form-control-lg my-1" placeholder="Offer Name">

            
            <label> SMS Content </label>

           <textarea cols="30" wire:model="sms_content" rows="10" class="form-control my-1" placeholder="SMS Content"></textarea>


           <label> Status </label>

           <select class="form-control form-control-lg my-3" wire:model="status">
               <option value="0">Inactive</option>
               <option value="1">Active</option>
           </select>

                                                    <!-- we used wire:click for taking the value of the button that we have clicked on it --> 
           <label> Languages </label>

        <div class="d-flex flex-wrap">
            <span class="btn btn-{{$languages == "English" ? 'secondary' : 'outline-secondary'}} m-2 " wire:click="setLanguage(`English`)">English</span>
            <span class="btn btn-{{$languages == "Arabic" ? 'secondary' : 'outline-warning'}} m-2" wire:click="setLanguage(`Arabic`)">Arabic</span>
            <span class="btn btn-{{$languages == "Kurdish" ? 'secondary' : 'outline-info'}} m-2" wire:click="setLanguage(`Kurdish`)">Kurdish</span>
        </div>


        
        <button class="btn btn-primary btn-lg my-3 ">Submit</button>

        </form>
    </div>

</div>
