
<div>
    <br>
    <table id="table" class="table table-striped table-bordered shadow">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Offer Name</th>
                <th scope="col">Sms Content</th>
                <th scope="col">Status</th>
                <th scope="col">languages</th>
                <th scope="col">Send</th>
            </tr>
        </thead>
        <tbody>

            <!-- fetching all the values from the cposts table and putting Field by Field -->
            @foreach ($composes as $i=>$item)
            <tr class="{{$item->has_transaction ? 'text-success' : 'bg-white'}}">
                <th scope="row">{{ ++$i }}</th>
                <th scope="row">{{$item->sms_title}}</th>
                <td>{{$item->offer_name}}</td>
                <td>{{$item->sms_content}}</td>
                <td>{{$item->status == 1 ? 'Active' : 'Inactive'}}</td>
                <td>{{$item->languages}}</td>
                <td>
                    <!-- checking the weather if the customer already replyed to the offer -->
                    @if($item->has_transaction)
                    sent !
                    @else
                    <a href="{{route('sendoffers' , $item->id)}}" class="btn btn-primary btn-sm">Send</span>
                        @endif
                </td>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });

</script>
