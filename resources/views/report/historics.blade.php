<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Relatório</title>

    <!--Custon CSS (está em /public/assets/site/css/certificate.css)-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<table class="table tab-content">
    <thead>
    <tr>
        <th>#</th>
        <th>Valor</th>
        <th>Tipo</th>
        <th>Data</th>
        <th>Sender</th>
    </tr>
    </thead>
    <tbody>
    @forelse($historics as $historic)
        <tr>
            <td>{{ $historic->id }}</td>
            <td>{{ number_format($historic->amount, 2, ',', '.') }}</td>
            <td>{{ $historic->type($historic->type) }}</td>
            <td>{{ $historic->date }}</td>
            <td>
                @if ($historic->user_id_transaction)
                    {{ $historic->userSender->name }}
                @else
                    -
                @endif
            </td>
        </tr>

    @empty
    @endforelse
    </tbody>
</table>



</body>
</html>

