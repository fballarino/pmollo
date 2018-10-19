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
        <td>Massa:</td>
        <td>{{ $vehicle->mass }}kg</td>
    </tr>
    <tr>
        <td>Attivo dal:</td>
        <td>{{ \Carbon\Carbon::parse($vehicle->active_from)->format('d M Y') }}</td>
    </tr>
</table>

