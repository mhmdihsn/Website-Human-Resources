<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pelamar Kerja</title>
    <style>
        span{
            font-weight: bold;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center; /* Untuk menyelaraskan teks ke tengah secara horizontal */
        }
        .date {
            text-align: center; /* Menyelaraskan tanggal ke kanan */
            margin-bottom: 20px; /* Jarak di bawah tanggal */
        }

    </style>
</head>
<body>

    <h2 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Laporan Pelamar Kerja</h2>
    <div class="date">
        <span>Per Tanggal:</span>  {{ now()->format('d-m-Y') }} <!-- Menampilkan tanggal dan waktu saat ini -->
     </div>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Position</th>
                {{-- <th>CV</th> --}}
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @foreach($applyJobs as $index => $apply)
            <tr data-position="{{ $apply->position }}" data-status="{{ $apply->status }}">
                <td>{{ $index + 1 }}</td>
                <td>{{$apply->name}}</td>
                <td>{{$apply->email}}</td>
                <td>{{$apply->phone}}</td>
                <td>{{$apply->position}}</td>
                {{-- <td>{{$apply->cv}}</td> --}}
                <td>{{$apply->status}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
