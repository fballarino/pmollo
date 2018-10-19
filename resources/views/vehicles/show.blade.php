<table>
    <tr>
        <td>Veicolo:</td>
        <td>{{ $vehicle->code }}</td>
    </tr>
    <tr>
        <td>Matricola:</td>
        <td>{{ $vehicle->serial }}</td>
    </tr>
    <tr>
        <td>Descrizione:</td>
        <td>{{ $vehicle->description }}</td>
    </tr>
    <tr>
        <td>Lunghezza:</td>
        <td>{{ $vehicle->length }}cm</td>
    </tr>
    <tr>
        <td>Larghezza:</td>
        <td>{{ $vehicle->width }}cm</td>
    </tr>
    <tr>
        <td>Altezza:</td>
        <td>{{ $vehicle->height }}cm</td>
    </tr>
    <tr>
        <td>Massa:</td>
        <td>{{ $vehicle->mass }}kg</td>
    </tr>
    <tr>
        <td>Attivo dal:</td>
        <td>{{ \Carbon\Carbon::parse($vehicle->active_from)->format('d M Y') }}</td>
    </tr>
</table>

