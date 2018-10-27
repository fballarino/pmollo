<table class="table-striped">
    <tr>
        <th>Societa'</th>
        <th>Indirizzo</th>
        <th>Cap</th>
        <th>Citta'</th>
        <th>Provincia</th>
    </tr>
    @foreach($customer->destinations as $destination)
        <tr>
            <td>{{ $destination->name }}</td>
            <td>{{ $destination->address }}, {{ $destination->civic }} </td>
            <td>{{ $destination->zip }}</td>
            <td>{{ $destination->city }}</td>
            <td>{{ $destination->region }}</td>
        </tr>
    @endforeach
</table>