<?php
    $datas = $datas = [
        ['jam' => '1','senin' => '1','selasa' => '1','rabu' => '1','kamis' => '1','jumat' => '1','sabtu' => '1'],
        ['jam' => '2','senin' => '2','selasa' => '2','rabu' => '2','kamis' => '2','jumat' => '2','sabtu' => '2']
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
    <div class="container">
        <div class="wrapper">
            <table class="table table-hover mt-5">
                <thead>
                    <th>No</th>
                    <th>Jam</th>
                    <th>Senin</th>
                    <th>Selasa</th>
                    <th>Rabu</th>
                    <th>Kamis</th>
                    <th>Jumat</th>
                    <th>Sabtu</th>
                </thead>
                <tbody>
                    <?php foreach ($datas as $data):?>
                    <tr>
                        @php $i = 1; @endphp
                        <th>
                            @php echo $i++; @endphp
                        </th>

                            <td><?=$data['jam']?></td>
                            <td><?=$data['senin']?></td>
                            <td><?=$data['selasa']?></td>
                            <td><?=$data['rabu']?></td>
                            <td><?=$data['kamis']?></td>
                            <td><?=$data['jumat']?></td>
                            <td><?=$data['sabtu']?></td>
                        <?php endforeach ?>
                    </tr>
                </tbody>
              </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
