<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verifikasi Akun</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        p {
            font-size: 16px;
            line-height: 1.5;
            color: #333333;
        }

        table {
            width: 100%;
            margin-top: 15px;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        h3 {
            color: #007bff;
        }

        b {
            color: blue;
        }

    </style>
</head>
<body>
    <div class="container">
        <p>
            Halo <b>{{$details['username']}}</b>!
        </p>

        <p>
            Anda Telah melakukan registrasi akun dengan menggunakan email ini.
        </p>

        <p>
            Berikut adalah data anda: 
        </p>

        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td>{{ $details['username'] }}</td>
            </tr>
            <tr>
                <td>Tanggal Register</td>
                <td>:</td>
                <td>{{$details['datetime']}}</td>
            </tr>
        </table>

        <center>
            <h3>
                Buka Link dibawah untuk melakukan verifikasi akun.
            </h3>

            <b>{{$details['url']}}</b>
        </center>

        <p>
            Terima kasih telah melakukan registrasi.
        </p>
    </div>
</body>
</html>