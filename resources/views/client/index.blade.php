<!DOCTYPE html>
<html>
<head>
    <title>Liste des Clients</title>
</head>
<body>
    <h1>Liste des Clients</h1>
    <a href="{{ route('clients.create') }}">Ajouter client</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Téléphone</th>
            <th>Actions</th>
        </tr>
        @foreach ($clients as $client)
        <tr>
            <td>{{ $client->IdClient }}</td>
            <td>{{ $client->NomClient }}</td>
            <td>{{ $client->AdresseClient }}</td>
            <td>{{ $client->TelClient }}</td>
            <td>
                <a href="{{ route('clients.edit', $client->IdClient) }}">Modifier</a>
                <form action="{{ route('clients.destroy', $client->IdClient) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
