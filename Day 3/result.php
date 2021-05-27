<html>
    <body>
        <table border='1'>
            <tr>
                <td colspan="2"><center><h1>Result</h1></center></td>
            </tr>
            <tr>
                <td colspan="2"><h2>Name:: <?php echo $_POST["name"]; ?></h2></td>
            </tr>
            <tr>
                <td colspan="2"><h2>Student Class:: <?php echo $_POST["class"]; ?></h2></td>
            </tr>
            <tr>
                <td><b>Physics::</b></td>
                <td><b><?php echo $_POST["sub1"]; ?></b></td>
            </tr>
            <tr>
                <td><b>Chemistry::</b></td>
                <td><b><?php echo $_POST["sub2"]; ?></b></td>
            </tr>
            <tr>
                <td><b>Maths::</b></td>
                <td><b><?php echo $_POST["sub3"]; ?></b></td>
            </tr>
            <tr>
                <td><b>Biology::</b></td>
                <td><b><?php echo $_POST["sub4"]; ?></b></td>
            </tr>
            <tr>
                <td><b>Computer::</b></td>
                <td><b><?php echo $_POST["sub5"]; ?></b></td>
            </tr>
            <tr>
                <td><b>Total Marks::</b></td>
                <td>
                    <?php
                        $physics = $_POST["sub1"];
                        $chemistry = $_POST["sub2"];
                        $maths = $_POST["sub3"];
                        $biology = $_POST["sub4"];
                        $computer = $_POST["sub5"];
                        $sum = $physics + $chemistry + $maths + $biology + $computer;
                        echo "<b>$sum</b>";
                    ?>
                </td>
            </tr>
            <tr>
                <td><b>Percentage::</b></td>
                <td>
                    <?php
                        $totalmarks = 500;
                        $percentage = ($sum * 100) / $totalmarks;
                        echo "<b>$percentage%</b>";
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <?php
                        if($percentage < 45){
                            echo "<h2>Oops you failed this exam!!!!</h2>";
                        }
                        elseif($percentage < 60){
                            
                            echo "<h2>Conratulations!!! You Passed this exam with Third Class</h2>";
                        }
                        elseif($percentage < 80){
                            echo "<h2>Conratulations!!! You Passed this exam with Second Class</h2>";
                        }
                        elseif($percentage < 100){
                            echo "<h2>Congratulations!!! You Passed this exam with First Class</h2>";
                        }
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>