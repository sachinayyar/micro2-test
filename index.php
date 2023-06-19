<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <form method="post" action="calculator.php">
        <label>Number 1:</label>
        <input type="number" name="num1" required><br><br>
        
        <label>Number 2:</label>
        <input type="number" name="num2" required><br><br>
        
        <label>Operator:</label>
        <select name="operator">
            <option value="+">Addition</option>
            <option value="-">Subtraction</option>
            <option value="*">Multiplication</option>
            <option value="/">Division</option>
        </select><br><br>
        
        <input type="submit" value="Calculate">
    </form>
</body>
</html>
