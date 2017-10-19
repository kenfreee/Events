<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delegation</title>
    <style>
        div {
            border: 2px solid blue;
            padding: 50px;
            text-align: center;
        }
        #container {
            border: 2px solid red;
        }

        .selected {
            background: green;
        }
    </style>
</head>
<body>
    <div id="container">
        container
        <div id="first">
            div 1
            <div id="second">
                div 2
                <div id="third">
                    div 3
                </div>
            </div>
        </div>
    </div>
<script>
    window.onload = function () {
        let container = document.querySelector('#container');

        container.onclick = function (event) {
            let target = event.target;
            let parent = target.parentNode;

            if (target !== container) {
                console.log(event);

                if (target.tagName === 'DIV') {
                    if (!target.classList.contains('selected')) target.classList.add('selected');

                    while (parent && parent.tagName === 'DIV') {
                        parent.classList.remove('selected');
                        parent = parent.parentNode;
                    }
                } else return;
            }
        };
    };
</script>
</body>
</html>