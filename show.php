<?php require 'vendor/autoload.php'; 
        $client = new MongoDB\Client(
            'mongodb+srv://root:Chakrit1989+@cluster0.7nuhs.mongodb.net/myFirstDatabase?retryWrites=true&w=majority');
        $db = $client->mongodb; //connect db
        $collection = $db->mongodb;//connect table
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel=stylesheet href="assets/codemirror-5.62.0/lib/codemirror.css">
    <link rel=stylesheet href="assets/codemirror-5.62.0/doc/docs.css">
    <script src="assets/codemirror-5.62.0/lib/codemirror.js"></script>
    <script src="assets/codemirror-5.62.0/mode/xml/xml.js"></script>
    <script src="assets/codemirror-5.62.0/mode/javascript/javascript.js"></script>
    <script src="assets/codemirror-5.62.0/mode/css/css.js"></script>
    <script src="assets/codemirror-5.62.0/mode/htmlmixed/htmlmixed.js"></script>
    <script src="assets/codemirror-5.62.0/lib/codemirror/mode/clike/clike.js"></script>
    <script src='assets/codemirror-5.62.0/lib/codemirror/mode/php/php.js'></script>
    <script src='assets/codemirror-5.62.0/lib/codemirror/addon/selection/active-line.js'></script>
    <script src="assets/codemirror-5.62.0/addon/edit/matchbrackets.js"></script>
    <link rel="stylesheet" href="assets/codemirror-5.62.0/theme/material.css">
    <link rel="stylesheet" href="assets/codemirror-5.62.0/theme/material-darker.css">
    <link rel="stylesheet" href="assets/codemirror-5.62.0/theme/material-palenight.css">
    <link rel="stylesheet" href="assets/codemirror-5.62.0/theme/material-ocean.css">
    <link rel="stylesheet" href="assets/codemirror-5.62.0/theme/ambiance.css">

    <script src="assets/codemirror-5.62.0/doc/activebookmark.js"></script>

    <style>
    .CodeMirror { height: auto; border: 1px solid #ddd; }
    .CodeMirror-scroll { max-height: 200px; }
    .CodeMirror pre { padding-left: 7px; line-height: 1.25; }
    .banner { background: #ffc; padding: 6px; border-bottom: 2px solid silver; text-align: center }
    </style>
</head>
<body>
    <div class="container">
            <div class="row text-center">
                <h1>คำสั่งการใช้งาน MongoDB เบื้องต้น</h1>
            </div>
            <div class="row p-5">
                <div class="col-sm-12">
                    <h2 class="text-center">คำสั่งเชื่อมต่อ MongoDB Server Atlas</h2>
                </div>
                <div class="row">
                    <div class="card-body p-5">
                        <textarea name="code1" id="code1">
                            
                            $client = new MongoDB\Client(
                                'mongodb+srv://<username>:<password>@cluster0.7nuhs.mongodb.net/myFirstDatabase?retryWrites=true&w=majority');
                            $db = $client->ชื่อดาต้าเบส; //เชื่อมต่อ ฐานข้อมูล
                            $collection = $db->ชื่อตาราง; //เชื่อมตาราง

                        </textarea>
                    </div>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">การดึงข้อมูลมาโชว์ ด้วยคำสั่ง find()</h2>
                    <div class="row">
                        <div class="card-body p-5">
                            <textarea id="code2" name="code2">
                                    $record = $collection->find();//คำสั่ง select
                                    $i=1;
                                    foreach($record as $row){
                                        echo "<tr>";
                                        echo '<th scope="row">'.$i++.'</th>';
                                        echo '<td>'.$row["name"] .'</td>';
                                        echo '<td>'.$row["university"].'</td>';
                                        echo "</tr>";
                                    }
                            </textarea>
                        </div>
                    </div>
                    <br>
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">University</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $record = $collection->find();
                            $i=1;
                            foreach($record as $row){
                                echo "<tr>";
                                echo '<th scope="row">'.$i++.'</th>';
                                echo '<td>'.$row["name"] .'</td>';
                                echo '<td>'.$row["university"].'</td>';
                                echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
                </div>
            </div>
    </div>
    
<?php

// $record = $collection->find();//select
// // print_r($record);
// foreach($record as $i){
//         echo $i["name"] ." ".$i["university"]." ";
//         echo "<br>";
// }
// $collection->insertOne(['name'=>"malada",'university'=>"SSRU"]);//insert

// $record = $collection->find();//select
// foreach($record as $i){
//         echo $i["name"] ." ".$i["university"]." ";
//         echo "<br>";
// }

// $collection->deleteOne(['name'=>'malada']); //delect
// $record = $collection->find();//select
// foreach($record as $i){
//         echo $i["name"] ." ".$i["university"]." ";
//         echo "<br>";
// }

?>
</body>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script>
  CodeMirror.fromTextArea(document.getElementById("code1"), {
    mode: "htmlmixed",
    lineNumbers: true,
    styleActiveLine: true,
    matchBrackets: true,
    theme:'material',
    //theme : "ambiance",
	lineWiseCopyCut : true,
	undoDepth : 200
  });
CodeMirror.fromTextArea(document.getElementById("code2"), {
    mode: "htmlmixed",
    lineNumbers: true,
    styleActiveLine: true,
    matchBrackets: true,
    theme:'material',
    //theme : "ambiance",
	lineWiseCopyCut : true,
	undoDepth : 200
  });
</script>
</html>
