<table style="border:1px solid grey;">
    <tr>
        <td>Name :</td>
        <td>{{ $data['firstname'] }} {{ $data['lastname'] }}</td>
    </tr>
    <tr>
        <td>Email :</td>
        <td>{{ $data['emailaddress'] }}</td>
    </tr>
    <tr>
        <td>Firma :</td>
        <td> {{ $data['firma'] }}</td>
    </tr>
    <tr>
        <td>Strasse :</td>
        <td> {{ $data['street'] }}</td>
    </tr>

    <tr>
        <td>PLZ / ORT :</td>
        <td> {{ $data['plz'] }}, {{ $data['ort'] }}</td>
    </tr>
    <tr>
        <td>Display Option:</td>
        <td> {{ $data['display_option']['orderCode'] }}</td>
    </tr>

    <tr>
        <td>Data Option :</td>
        <td> {{ $data['data_option']['orderCode'] }}</td>
    </tr>
        <tr>
        <td>Desinex Count :</td>
        <td> {{ $data['desinex_option'] }}</td>
    </tr>
</table>