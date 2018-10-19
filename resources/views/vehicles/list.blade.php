<table>
    @foreach($vehicles as $vehicle)
        <tr>
            <td><a href="{{ route('vehicles.show', $vehicle->id) }}">{{ $vehicle->code }}</a></td>
            <td>{{ $vehicle->serial }}</td>
        </tr>
    @endforeach
</table>