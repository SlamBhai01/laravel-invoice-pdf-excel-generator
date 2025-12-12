<table border="1">
    <thead>
        <tr>
            <th>{{ $item_service }}</th>
            <th>{{ $description }}</th>
            <th>{{ $quantity }}</th>
            <th>{{ $rate }}</th>
            <th>{{ $amount }}</th>
        </tr>
    </thead>

    <tbody>
        @foreach($items as $item)
        <tr>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['desp'] }}</td>
            <td>{{ $item['qty'] }}</td>
            <td>{{ $item['rate'] }}</td>
            <td>{{ $item['qty'] * $item['rate'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
