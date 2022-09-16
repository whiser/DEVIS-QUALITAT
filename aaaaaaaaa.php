<?php include_once("dbconnect.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>

            body{
                background-color:#f5f5f5;
            }

            form{
                margin: 50px auto;
            }

            .form-row{
                margin-top: 10px;
            }

            fieldset 
            {
                border: 1px solid #ddd !important;
                margin: 0;
                xmin-width: 0;
                padding: 30px;       
                position: relative;
                border-radius:4px;
                background-color:#fff;
                padding-left:10px!important;
            }	

            legend
            {
                font-size:14px;
                font-weight:bold;
                margin-bottom: 0px; 
                width: 35%; 
                border: 1px solid #ddd;
                border-radius: 4px; 
                padding: 5px 5px 5px 10px; 
                background-color: #ffffff;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col-md-8">

                    <?php
                    if (isset($_POST['submit'])) {

                        $f1 = $_POST['f1'];
                        $f2 = $_POST['f2'];

                        $query = "INSERT INTO devis_client (id,c_name) VALUES 
                        ('$id','$c_name')";

                        $result = mysqli_query($conn, $query);
                        $id_client = $conn->insert_id;


                        foreach ($_POST['durchgefuhrte_arbeiten'] as $key => $value) {

                            $query1 = "INSERT INTO appareil(devis_client_id,app_name,tension,intensite,puissance,energie)VALUES 
                            ('" . $id_client . "','" . $_POST['durchgefuhrte_arbeiten'][$key] . "',
                            '" . $_POST['von'][$key] . "','" . $_POST['bis'][$key] . "',
                            '" . $_POST['std'][$key] . "','" . $_POST['std'][$key] . "')";
                           mysqli_query($conn, $query1);
                        }
                        
                       
                        
                    }
                    ?>


                    <form action="" method="post" enctype="">

                        <fieldset>
                            <legend>ITC Form</legend>


                            <div class="form-row">

                                <div class="col">
                                    <textarea class="form-control" name="c_name" placeholder="Nom du client" rows="4"></textarea>
                                </div>


                            <div id="dynamic_field">
                                <div class="form-row" >
                                    <div class="col">
                                        <input type="text" class="form-control" name="durchgefuhrte_arbeiten[]" placeholder="Durchgefuhrte Arbeiten">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="von[]" placeholder="VON">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="bis[]" placeholder="BIS">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="std[]" placeholder="std">
                                    </div>

                                    <div class="col">
                                        <td><button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus"></i></button></td>
                                    </div>
                                </div>
                            </div>
s
                            
                            <br>
                            <div class="form-row"><br>
                                <div class="col">
                                    <button type="submit" id='submit' name="submit" class="btn btn-primary " value="Save">Save the form data</button>
                                </div>
                            </div>
                            <br>
                            </form>
                        </fieldset>
                </div>
                <div class="col"></div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function () {
                var i = 1;
                $('#add').click(function () {
                    i++;
                    $('#dynamic_field').append('<div class="form-row" id="row' + i + '"> <div class="col"><input type="text" class="form-control" name="durchgefuhrte_arbeiten[]"> </div> <div class="col"> <input type="text" class="form-control" name="von[]"> </div> <div class="col"> <input type="text" class="form-control" name="bis[]"> </div> <div class="col"> <input type="text" class="form-control" name="std[]"> </div> <div class="col"> <td><button type="button" name="add" class="btn btn-danger btn_remove" id="' + i + '"><i class="fa fa fa-trash"></i></button></td> </div> </div>');
                });
                $(document).on('click', '.btn_remove', function () {
                    var button_id = $(this).attr("id");

                    $('#row' + button_id + '').remove();
                });



                $('#add2').click(function () {
                    i++;
                    $('#dynamic_field2').append('<div class="form-row"  id="row2' + i + '"> <div class="col"> <input type="text" class="form-control" name="mange[]"> </div> <div class="col"> <input type="text" class="form-control"  name="bezeichnung[]"> </div> <div class="col"> <input type="text" class="form-control" name="art_nr[]"> </div> <div class="col"> <td><button type="button" name="add" class="btn btn-danger btn_remove2" id="' + i + '"><i class="fa fa fa-trash"></i></button></td> </div> </div>');
                });
                $(document).on('click', '.btn_remove2', function () {
                    var button_id = $(this).attr("id");

                    $('#row2' + button_id + '').remove();
                });


                $('#add3').click(function () {
                    i++;
                    $('#dynamic_field3').append('<div class="form-row" id="row3' + i + '"> <div class="col"> <input type="text" class="form-control"  name="offene_pukte[]"> </div> <div class="col"> <input type="text" class="form-control" name="intern[]"> </div> <div class="col"> <td><button type="button" name="add"  class="btn btn-danger btn_remove3" id="' + i + '"><i class="fa fa fa-trash"></i></button></td> </div> </div>');
                });
                $(document).on('click', '.btn_remove3', function () {
                    var button_id = $(this).attr("id");

                    $('#row3' + button_id + '').remove();
                });



            });
        </script>

    </body>
</html>