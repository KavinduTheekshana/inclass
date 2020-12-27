@foreach($data as $newdata)
<tr>
    <td>{{$newdata->id}}</td>
    <td>{{$newdata->name}}</td>
    <td>
        <button onclick="sweet('{{$newdata->id}}')" type="button" class="btn btn-danger">
            <i class="material-icons icon--left">delete</i> Delete
        </button>
    </td>
</tr>
@endforeach