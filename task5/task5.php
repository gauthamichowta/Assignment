<!DOCTYPE HTML>
<html>
<head>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>PHP Form Validation</h2>
        <form method="post" action="" novalidate>
            <div class="alert alert-danger display-error" style="display: none">
            </div>
            <div class="alert alert-success display-success"  style="display: none">
            </div>
            <div class="form-group">
                <div class="controls">
                    Text: <input type="text" name="text" id="text" class="form-control" value="" required>
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    Int: <input type="text" name="age" id="age" class="form-control" value="" required>
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    String: <input type="text" name="name" id="name" class="form-control" value="" required>
                </div>
            </div>
            <div class="form-group">
                <div class="controls">
                    E-mail: <input type="text" name="email" id="email" class="form-control" value="" required>
                </div>
            </div>
            <button type="submit" id="submit" value="Submit">Submit</button>
        </form>
    </div>
</body>

<script>
    // JQuery Script to submit Form
    $(document).ready(function() {
        $('#submit').click(function(e) {
            e.preventDefault();
            var name = $("#name").val();
            var email = $("#email").val();
            var text = $("#text").val();
            var age = $("#age").val();
            $.ajax({
                type: "POST",
                url: "submit.php",
                dataType: "json",
                data: {
                    name: name,
                    email: email,
                    text: text,
                    age: age
                },
                success: function(data) {
                    if (data.code == "200") {
                        $(".display-error").css("display", "none");
                        $(".display-success").html(data.msg);
                        $(".display-success").css("display", "block");
                    } else {
                        $(".display-error").html("<ul>" + data.msg + "</ul>");
                        $(".display-error").css("display", "block");
                    }
                }
            });
        });
    });
</script>

</html>
