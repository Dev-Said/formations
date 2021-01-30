<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;

        }

        * {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: black;
            text-decoration: none;
            font-size: 16px;
        }

        .container {
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        .nav {
            border-right: solid 1px #e9e9e9;
            height: 100vh;
            width: 200px;
            padding: 0;
            position: fixed;
            top: 0;
            left: 0;
        }

        ul {
            width: 200px;
            list-style-type: none;
            padding: 0;
        }

        li {
            height: 70px;
            width: 100%;
            border-bottom: solid 1px #e9e9e9;
            padding: 0 20px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .active {
            background-color: #f7f7f7;
            color: #292b2c;
        }

        .nouveau {
            background-color: #4d5051;
            color: white;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .list, .edit {
            width: calc(100% - 200px);
            height: 100vh;
            overflow: scroll;
            padding: 10px 20px;
            position: absolute;
            top: 0;
            left: 200px;
        }

        .edit {
            border: #e0e0e0 solid 1px;
            border-radius: 5px;
            margin-left: 50px;
            margin-top: 50px;
            width: auto;
            height: auto;
            overflow: hidden;
            padding: 50px 30px;
        }

        table {
            border-spacing: 0 10px;
        }

        td,
        th {
            padding-left: 15px;
        }

        td {
            border-bottom: solid 1px #f2f2f2;
            height: 35px;
        }

        th {
            text-align: left;
            background-color: #f7f7f7;
            padding: 10px;
        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        label {
            font-size: 14px;
            font-weight: bold;
            margin-left: 5px;
            color: #5b5b5b;
        }

        .edit input, .edit select {
            margin: 15px 0;
            padding-left: 10px;
            width: 400px;
            height: 45px;
            border: #e1e1e1 solid 1px;
            border-radius: 5px;
        }

        input[type=submit] {
            height: 45px;
            min-width: 90px;
            border-radius: 5px;
            display: block;
        }

        .supp {
            background-color: #d9534f;
            color: white;
        }

        .modif {
            background-color: #5bc0de;
            color: white;
        }
    </style>
</head>

<body class="myBody">
    <div class="container">
        <div class="nav">
            <ul>
                <a href="/users">
                    <li class="{{ 'users' == request()->path() ? 'active' : ' ' }}">Users</li>
                </a>
                <a href="/modules">
                    <li class="{{ 'modules' == request()->path() ? 'active' : ' ' }}">Modules</li>
                </a>
                <a href="/quizzes">
                    <li class="{{ 'quizzes' == request()->path() ? 'active' : ' ' }}">Quiz</li>
                </a>
                <a href="/questions">
                    <li class="{{ 'questions' == request()->path() ? 'active' : ' ' }}">Questions</li>
                </a>
                <a href="/reponses">
                    <li class="{{ 'reponses' == request()->path() ? 'active' : ' ' }}">Reponses</li>
                </a>
                <a href='{{ request()->path() ."/create" }}'>
                    <li class="nouveau">Nouveau</li>
                </a>
                <a href="/register">
                    <li>Inscription</li>
                </a>
            </ul>
        </div>

        @yield('content')


    </div>

</body>

</html>