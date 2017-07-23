<table border="1">
    <tr>
        <td>no.</td>
        <td>danh mục</td>
    </tr>
    @foreach($categories as $key => $item)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$item->title}}</td>
        </tr>

        @endforeach
</table>