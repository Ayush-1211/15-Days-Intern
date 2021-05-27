<html>
<body>
    <h1>Enter 5 Subjects Marks</h1>
    <form action="result.php" method="post">
        <table border='1'>
            <tr>
                <td>Enter Student Name:</td>
                <td><input type="text" name="name"/></td>
            </tr>
            <tr>
                <td>Enter Student Class:</td>
                <td><input type="number" min='11' max='12' name="class"/></td>
            </tr>
            <tr>
                <td>Enter Physics Marks:</td>
                <td><input type="number" min='0' max='100' name="sub1"/></td>
            </tr>
            <tr>
                <td>Enter Chemistry Marks:</td>
                <td><input type="number" min='0' max='100' name="sub2"/></td>
            </tr>
            <tr>
                <td>Enter Maths Marks:</td>
                <td><input type="number" min='0' max='100' name="sub3"/></td>
            </tr>
            <tr>
                <td>Enter Biology Marks:</td>
                <td><input type="number" min='0' max='100' name="sub4"/></td>
            </tr>
            <tr>
                <td>Enter Computer Marks:</td>
                <td><input type="number" min='0' max='100' name="sub5"/></td>
            </tr>
            <tr>
                <td><input type="submit"></td>
                <td><input type="reset"></td>
            </tr>
        </table>
    </form>

</body>
</html>