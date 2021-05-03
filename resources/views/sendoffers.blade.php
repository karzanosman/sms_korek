

<div>
@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

    <form wire:submit.prevent="submit">

        <!-- Note that we used wire:model.defer like name for the input and wire:model.defer can't take any action until you hit the submit button -->
        <label>Phone Number</label>
        <input wire:model.defer="phonenumber" type="text" class="form-control  m-3">

        <!-- we used wire:model for this text box this can take action without hit the submit button like printing inside content while you're typing -->
        <label>Offer Shortcut Code</label>
        <input wire:model="code" type="text" class="form-control  m-3">


        <label>Offer Name</label>
        <select class="form-control  m-3" wire:model="sms_id">

        <!-- return all the values from the cposts table offer name field to the dropdown -->
            <option value="">Offer Name</option>
            @foreach ($offers as $item)
            <option value="{{$item->id}}">{{$item->offer_name}}</option>
            @endforeach
        </select>


        <label>Offer Content</label>
        <textarea cols="30" rows="10" wire:model.defer="content" class="form-control  m-3 bg-light" disabled></textarea>

        <button class="btn btn-dark btn-lg w-100">Send</button>
    </form>
</div>
