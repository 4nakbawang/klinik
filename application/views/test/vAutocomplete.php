<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Autocomplete</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <h2>Autocomplete Codeigniter</h2>
        </div>
        <div class="row">
            <form>
                 <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Title" style="width:500px;" autofocus>
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" placeholder="Description" style="width:500px;"></textarea>
                 </div>
                  <div class="form-group">
                    <label>Tarif</label>
                    <textarea name="tarif" class="form-control" placeholder="Description" style="width:500px;"></textarea>
                 </div>
            </form>
        </div>
    </div>
 
	    <script
	  src="https://code.jquery.com/jquery-3.3.1.js"
	  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	  crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script
	  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
	  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
	  crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $( "#title" ).autocomplete({
              source: "<?php echo site_url('learn/get_autocomplete/?');?>",

              select: function (event, ui) {
                    $('[name="title"]').val(ui.item.label); 
                    $('[name="description"]').val(ui.item.nama); 
                    $('[name="tarif"]').val(ui.item.tarif); 
                }
            });
        });
    </script>
 
</body>
</html>