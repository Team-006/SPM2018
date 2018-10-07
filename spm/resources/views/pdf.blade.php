<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <h3 class="text-center">Generated Intership Report</h3>
     <table class="table table-bordered table-striped">
         <thead>
           <tr>
            <th>Company Overview</th>
            <th>Project Overview</th>
            <th>procedures</th>
            <th>Objectives</th>
           </tr>
         </thead>
         <tbody>
                    <tr>
                        <td>
                          {{$formi6->company}}
                        </td>                    
                        <td>
                          {{$formi6->project}}
                        </td>
                        <td>
                          {{$formi6->procedures}}
                        </td>                      
                        <td>
                          {{$formi6->objectives}}
                        </td>
                    </tr>
         </tbody>
     
    </table>
</body>
</html>