<!DOCTYPE html>
<html>
    <style>
        input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
    </style>
    <body>
        <h3>
            Area Calculation Form
        </h3>
        <div>
            <form action="areacalculation.php" method="POST">
                <label for="radius">
                    Radius
                </label>
                <input id="fnam" name="radius" placeholder="Radius" type="text">
                    <!-- <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.."> -->
                    <label for="country">
                        Select Shape Type
                    </label>
                    <select id="country" name="shapeType">
                        <option value="circle">
                            Circle
                        </option>
                        <option value="square">
                            Square
                        </option>
                        <option value="triangle">
                            Triangle
                        </option>
                    </select>
                    <input type="submit" value="Calculate">
                    </input>
                </input>
            </form>
        </div>
    </body>
</html>
