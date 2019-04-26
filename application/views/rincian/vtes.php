<!DOCTYPE html>
<html>

<head>
    <title>Latihan ajax</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
</head>

<body>

    <select class="sel-task" id="sel-task" name="state">
        <option value="AL">Alabama</option>
        ...
        <option value="WY">Wyoming</option>
    </select>
    <script type="text/javascript">
        $(document).ready(function() {
            var list = $('.sel-task').select2({
                placeholder: "Select a Task",
                allowClear: true,
                sorter: function(data) {
                    return data.sort(function(a, b) {
                        if (a.text > b.text) {
                            return 1;
                        }
                        if (a.text < b.text) {
                            return -1;
                        }
                        return 0;
                    });
                },
                closeOnSelect: false,
            }).on("select2:closing", function(e) {
                e.preventDefault();
            }).on("select2:closed", function(e) {
                list.select2("open");
            });

            list.select2("open");
        });
    </script>
</body>

</html>