<?php
require 'model/configs.php';
require 'model/BaseModel.php';
require 'model/PostModel.php';

$bai_viet = new PostModel();
$id = !empty($_GET['id']) ? $_GET['id'] : 1;
$chi_tiet = $bai_viet->xemChiTiet($id);
?>

<html>
    <head>
        <title>Chi tiết bài viết</title>
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>Chi tiết</h1>

        Tiêu đề: <?php echo $chi_tiet['tieu_de']?>

        <h2 class="thich_ne">Thích nè <?php echo $chi_tiet['luot_thich'] ?></h2>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.thich_ne').click(function(){
                    link_url = '/api/luot_thich.php?id=<?php echo $chi_tiet['id'] ?>'
                    $.ajax({url: link_url, success: function(result){
                            var data = jQuery.parseJSON(result);
                            console.log(data);
                           $('.thich_ne').text('Thich ne: ' + data);
                        }});
                });
            });
        </script>
    </body>
</html>
