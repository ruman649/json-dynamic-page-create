<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="data">
        <div class="data">
            <!-- <table border='1px' cellspacing='0' cellpadding='10px'>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Age</th>
                    </tr>
                </thead>
                <tbody id="data">

                </tbody>
            </table> -->
        </div>
    </div>

    <div class="" id="msg_box">
        <div class="flex">
            <div class="" id="msg">adfadfad adfdfads dfds</div>
            <div class="" id="close">X</div>
        </div>
    </div>

<form action="">
    <input type="text" name="name" id="name" placeholder="name">
    <input type="text" name="age" id="age" placeholder="age">
    <input type="submit" id="submit" value="submit">
</form>

    <script src="./jquery.js"></script>
    <script>

$(document).ready(function(){
    $('#submit').on('click', function(e){
        e.preventDefault();
        let name = $('#name').val();
        let age = $('#age').val();

        if(name=='' || age==''){
            $('#msg_box').show().slideDown();
            $('#msg').removeClass('success').addClass('err').html("This is empty").slideDown();
        }
        else{
            $.ajax({
                url: "make_json.php",
                type: 'post',
                data: {name: name, age:age},
                success: function(data){
                    if(data==1){
                        $('#msg_box').show().slideDown();
                        $('#msg').removeClass('err').addClass('success').html("data make json successfull").slideDown();
                    }
                }
            })
        }
    })

    $('#close').on('click', function(){
        $('#msg_box').hide();
    })
})


        // $(document).ready(function(){
        //     $.ajax({
        //         url: "json_encode.php",
        //         type: "post",
        //         dataType:'json',
        //         data:{},
        //         success: function(data){
        //             $.each(data, function(key, value){
        //                 $('#data').append("<tr> <td>"+value.id+"</td> <td>"+value.name+"</td> <td>"+value.age+"</td> </tr>" );
        //             })
        //         }
        //     })
        // })

        // $(document).ready(function(){
        //     $.getJSON(
        //         'json_encode.php',
        //         function(data){
        //             // console.log(data);
        //             $.each(data, function(key, value){
        //                 $('#data').append("<tr> <td>"+value.id+"</td> <td>"+value.name+"</td> <td>"+value.age+"</td> </tr>" );
        //             })
        //         }
        //     )
        // })



    </script>
</body>
</html>