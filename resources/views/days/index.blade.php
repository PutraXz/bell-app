<?php
    $datas = $datas = [
        ['hari' => 'Senin', 'jam' => '07.30 |    08.00'],
        ['hari' => 'Selasa', 'jam' => '07.30'],
        ['hari' => 'Rabu', 'jam' => '07.30'],
        ['hari' => 'Kamis', 'jam' => '07.30'],
        ['hari' => 'Jumat', 'jam' => '07.30'],
        ['hari' => 'Sabtu', 'jam' => '07.30']
    ];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    @foreach ($days as $day)
    <p>
        {{$day->days}}
        {{$day->hours->hour}}
    </p>
    @endforeach

    <div class="container">
        <div class="wrapper">
            <table class="mt-5 w-25">
                <thead>
                    <th>No</th>
                    <th>Hari</th>
                    <th colspan="2">Jam</th>
                    <th></th>
                    <th></th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php foreach ($datas as $no => $data):?>
                    <tr>
                            <td><?= $no+1?></td>
                            <th><?=$data['hari']?></th>
                            <td><?=$data['jam'] ?></td>
                            <td></td>
                            <td></td>
                        <?php endforeach ?>
                    </tr>
                </tbody>
              </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
