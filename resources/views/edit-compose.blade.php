

@if (session()->has('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif

<div>
    <br>

    <a href="{{route('/')}}" class="my-3 btn btn-primary btn-sm">Add Compose</a>

    <table id="table" class="table table-striped table-bordered shadow">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Offer Name</th>
                <th scope="col">Sms Content</th>
                <th scope="col">Status</th>
                <th scope="col">languages</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>

            <!-- fetching all the values from the cposts table and putting Field by Field -->
            @foreach ($composes as $i=>$item)
            <tr>
                <th scope="row">{{ ++$i }}</th>
                <th scope="row">{{$item->sms_title}}</th>
                <td>{{$item->offer_name}}</td>
                <td>{{$item->sms_content}}</td>
                <td>{{$item->status == 1 ? 'Active' : 'Inactive'}}</td>
                <td>{{$item->languages}}</td>
                <td><a href="{{route('update_compose' , $item->id)}}" class="btn btn-primary btn-sm">Edit</span></td>
                <td><span class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{$item->id}}">Delete</span>
                </td>
            </tr>

            <!-- Modal for delete -->
            <div class="modal fade" id="delete{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h1>Are You Sure To Delete This Record ?</h1>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                            <button type="button" class="btn btn-danger"
                                wire:click="delete(`{{$item->id}}`)">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </tbody>
    </table>
</div>



<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });

</script>
