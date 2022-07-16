<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
</head>

<body>
    <input type="text" placeholder="Type something..." id="textInput">
    <button type="button" onclick="getInputValue();">Click</button>
    <ul id="list"></ul>
    <script>
        function getInputValue() {

            // fetch value from the input element 
            var inputVal = document.getElementById("textInput").value;

            //split characters and number from text
            var splitResult = inputVal.split(/([0-9]+)/);
            letterArray = [];
            numberArray = [];

            for (i = 0; i < splitResult.length; i++) {

                //check if the array value is string or number
                if (isNaN(splitResult[i]) && typeof splitResult[i] === 'string') {
                    letterArray.push(splitResult[i]);
                } else if (Number(splitResult[i])) {
                    numberArray.push(splitResult[i]);
                }
            }
            list = '<li>' + letterArray + '</li><li>' + numberArray + '</li>';
            document.getElementById('list').innerHTML = list;
        }
    </script>
</body>

</html>