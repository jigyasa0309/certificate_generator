<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Certificate</title>
        <style>
        .certificate {
            background-color:cyan;
            width: 600px;
            margin: 100px auto;
            padding: 40px;
            border: 2px solid grey;
        }

        h1 {
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .username {
            font-weight: bold;
            font-family:'fantasy';
        }
        .date {
            font-weight: bold;
            font-family:'fantasy';
        }

        @media screen and (max-width: 600px) {
            .certificate {
            width: 200px;
            margin: 50px auto;
        }
        }


    </style>
    </head>

    <body>
        <div class="certificate">
            <h1>Certificate of completion</h1>
            <p>This is to certify that Mr./Mrs.
                <span class="username"><?php echo $userName; ?></span>
                has successfully completed the<span id="course"><B><I>WEB DEVELOPMENT COURSE</B></I></span>
                in the specified duration of time.
                <br>
                This certificate is dated on 
                <span class="date"><?php echo date("d/M/Y"); ?>.</span>
            </p>
        </div>
    </body>

</html>