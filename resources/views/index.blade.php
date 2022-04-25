<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <title>Currency</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form action="{{route('show')}} " method="post">
                    @csrf
dan <input type="date" class="form-control" name="dan">
gacha <input type="date" class="form-control" name="gacha">
<input type="submit" class="btn btn-outline-primary" value="Chiqarish">
</form>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Valute ID</th>
            <th scope="col">NumCode</th>
            <th scope="col">CharCode</th>
            <th scope="col">Name</th>
            <th scope="col">Value</th>
          </tr>
        </thead>
        <tbody>
       @foreach ($data as $item)
           <tr>
           <td> {{$item->valuteid}}</td>
           <td> {{$item->numcode}}</td>
           <td> {{$item->charcode}}</td>
           <td> {{$item->name}}</td>
           <td> {{$item->value}}</td>
           <td>
            <?php
            $dat = $item->updated_at;
            $newdate = date("d.m.Y", strtotime($dat));
            echo ($newdate);
            ?>

            </td>

           </tr>
       @endforeach

        </tbody>
      </table>
</body>
</html>
