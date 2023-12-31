<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Custom Format pada Input Form</title>
    </head>
    <style>
        .container {
            font-family: 'Roboto', Arial, Sans-serif;
            font-size: 16px;
            font-weight: 400;
            left: 50%;
            position: absolute;
            top: 0;
            transform: translate(-50%, 5%)
        }
        .group {
            display: block;
            margin-bottom: 1.5em
        }
        label {
            float: left;
            width: 75px;
        }
        input {
            border: 2px solid #ddd;
            border-radius:4px;
            font-family: 'Roboto', Arial, Sans-serif;
            font-size: 16px;
            outline: none;
            padding: .5em 1em;
        }
    </style>
    <body>
        <div class="container">
            <h3>Custom Format Input</h3>
            <br>
            <form action="#" method="post">
                <div class="group">
                    <label>Rp</label>
                    <input type="text" class="uang">
                </div>
            </form>
        </div>
        <script src="jquery371.js"></script>
        <script src="jquery.mask.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){

                // Format mata uang.
                $( '.uang' ).mask('000.000.000', {reverse: true});

            })
        </script>
    </body>
</html>