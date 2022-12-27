<table class="table">
    <tr>
        <td>nama</td>
        <td>
            <input type="text" name="nama" value="{{ $model -> nama }}" class="form-control">
            @foreach($errors -> get('nama') as $msg)
                <small class="text-danger">{{ $msg }}</small>
            @endforeach
        </td>
    </tr>
    <tr>
        <td>tanggal lahir</td>
        <td>
            <input type="text" name="tanggal_lahir" value="{{ $model -> tanggal_lahir }}" class="form-control">
            @foreach($errors -> get('tanggal_lahir') as $msg)
                <small class="text-danger">{{ $msg }}</small>
            @endforeach
        </td>
    </tr>
    <tr>
        <td>gelar</td>
        <td>
            <input type="text" name="gelar" value="{{ $model -> gelar }}" class="form-control">
            @foreach($errors -> get('gelar') as $msg)
                <small class="text-danger">{{ $msg }}</small>
            @endforeach
        </td>
    </tr>
    <tr>
        <td>nip</td>
        <td>
            <input type="text" name="nip" value="{{ $model -> nip }}" class="form-control">
            @foreach($errors -> get('nip') as $msg)
                <small class="text-danger">{{ $msg }}</small>
            @endforeach
        </td>
    </tr>
</table>
<button class="btn btn-sm btn-info" type="submit">save</button>
