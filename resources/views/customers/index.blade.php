<ol>
    @foreach($customers as $customer)
        <li><a href="{{ route('customers.show', $customer->id) }}">{{ $customer->name }}</a></li>
    @endforeach
</ol>