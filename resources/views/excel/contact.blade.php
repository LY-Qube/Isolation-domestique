<table>
    <thead>
    <tr>
        <th>Nom et Prénom</th>
        <th>Numéro de Téléphone</th>
        <th>Adresse E-mail</th>
        <th>Email verifier</th>
        <th>Vous êtes?</th>
        <th>Département</th>
        <th>Mode de Chauffage</th>
        <th>nombre de personnes</th>
        <th>Age de la Maison</th>
        <th>ANAH</th>
    </tr>
    </thead>
    <tbody>
    @foreach($contacts as $contact)
        <tr>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->phone }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->email_verified_at }}</td>
            <td>{{ $contact->you_ar }}</td>
            <td>{{ $contact->department }}</td>
            <td>{{ $contact->mode }}</td>
            <td>{{ $contact->persons }}</td>
            <td>{{ $contact->age }}</td>
            <td>{{ $contact->anah }}</td>
        </tr>
    @endforeach
    </tbody>
</table>