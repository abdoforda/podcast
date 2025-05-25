<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />


    <title> @lang("Webinars") </title>
</head>

<body >


    <div class="page-content">
        <div
        class="container" style="background: #fefefe;
    box-shadow: 4px 4px 10px #ddd;
    border-radius: 16px;
    margin: 30px;"
    >
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th> @lang("ID") </th>
                <th> @lang("اسم صاحب الندوة") </th>
                <th> @lang("إسم  الندوة") </th>
                <th> @lang("تاريخ الندوة") </th>
                <th> @lang("عدد الإشتراكات") </th>
            </tr>
        </thead>
        <tbody>
            @php
                $webinars = App\Models\Webinar::where('start_date', '>', date('Y-m-d H:i:s'))->get();
            @endphp
            @foreach ($webinars as $index => $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->start_date }}</td>
                    <td><a href="{{ route('admin.registers.show', $item->id) }}">{{ $item->registers->count() }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>


    <style>

        /*! CSS Used from: https://apvarun.github.io/toastify-js/example/script.css */
*{box-sizing:border-box;}
.button{overflow:hidden;margin:10px;padding:12px 12px;cursor:pointer;-webkit-transition:all 200ms ease-in-out;transition:all 200ms ease-in-out;text-align:center;white-space:nowrap;text-decoration:none;text-transform:none;text-transform:capitalize;border-radius:4px;font-size:13px;font-weight:500;line-height:1.3;min-width:100px;display:inline-block;box-shadow:0 5px 20px rgba(22, 22, 22, 0.15);color:#5477f5;background-color:Snow;border:1px solid #5477f5;}
.button:hover{color:#FFFFFF;background:linear-gradient(135deg, #73a5ff, #5477f5);border:1px solid transparent;}

        .page-content{
            overflow: hidden;
    display: flex;
    height: 100%;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    background-color: whitesmoke;
    background-image: url(https://apvarun.github.io/toastify-js/example/pattern.png);
        }

        td, th,
        table.dataTable thead th, table.dataTable thead td, table.dataTable tfoot th, table.dataTable tfoot td,
        td a,
        table.dataTable th.dt-type-numeric, table.dataTable th.dt-type-date, table.dataTable td.dt-type-numeric, table.dataTable td.dt-type-date{
            text-align: center;
        }
    </style>

    <script>
        new DataTable('#example',{
            lengthMenu: [
                [100, 25, 50, -1],
                [100, 25, 50, 'All']
            ]
        });
    </script>
</body>

</html>
