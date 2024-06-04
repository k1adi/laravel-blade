<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Directive</title>
</head>
<body>
    <form action="">
        <div>
            <input type="checkbox" name="premium" id="premium" @checked($user['premium']) value="Premium"> Premium
        </div>
        <div>
            <select name="education" id="education">
                <option value="sd">SD</option>
                <option value="smp">SMP</option>
                <option value="sma" @selected(true)>SMA</option>
            </select>
        </div>
        <div>
            <input type="text" name="disabled" id="disabled" placeholder="Disabled" @disabled(true)>
        </div>
        <div>
            <input type="text" placeholder="Read Only" value="{{$user['name']}}" @readonly(!$user['admin'])>
        </div>
        <div>
            <input type="text" name="required" id="required" @required(true)>
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>