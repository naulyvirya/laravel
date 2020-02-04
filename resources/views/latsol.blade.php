<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($pegawai as $data)
        @if ($data['jabatan'] == "Manager")
            @php $jabatan = 500000; @endphp
        @elseif ($data['jabatan'] == "Sekretaris")
            @php $jabatan = 350000; @endphp
        @elseif ($data['jabatan'] == "Staff")
            @php $jabatan = 250000; @endphp
        @endif

        @if ($data['jam_kerja'] > 250)
            @php $bonus = 0.10 * $jabatan; @endphp
        @elseif ($data['jam_kerja'] > 200)
            @php $bonus = 0.05 * $jabatan; @endphp
        @else
            @php $bonus = 0; @endphp
        @endif

        @php $ppn = 0.025 * $jabatan; @endphp
        @php $gaber = ($jabatan + $bonus) - $ppn; @endphp

        Nama          : {{ $data['nama'] }}
        NIP           : {{ $data['nip'] }}
        Agama         : {{ $data['agama'] }}
        Jenis Kelamin : {{ $data['jk'] }}
        Jabatan       : {{ $data['jabatan'] }}
        Jam Kerja     : {{ $data['jam_kerja'] }} Jam
        Gaji          : Rp {{ $jabatan }}
        Bonus         : Rp {{ $bonus }}
        PPN           : Rp {{ $ppn }}
        Gaji Bersih   : Rp {{ $gaber }}

    @endforeach
</body>
</html>
