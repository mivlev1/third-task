<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>third-task</title>
</head>
<body>
<div class="my-form">
    <form method="POST">
        <div class="row mb-3">
            <label for="inputName3" class="col-sm-2 col-form-label">Имя</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name-field">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email-field">
            </div>
        </div>
        <div class="row mb-3">
            <label for="Date" class="col-sm-2 col-form-label">Дата</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="date" value="2012-12-12" placeholder="Дата" required>
            </div>
        </div>
        <fieldset>
            <label>Пол</label>
            <div class="row mb-3">
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio-gender" id="gridRadios1" value="male" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Мужчина
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio-gender" id="gridRadios2" value="female">
                        <label class="form-check-label" for="gridRadios2">
                            Женщина
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <label>Количество конечностей</label>
            <div class="row mb-3">
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio-kon" id="gridRadios1" value="2" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Две
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio-kon" id="gridRadios2" value="3">
                        <label class="form-check-label" for="gridRadios2">
                            Три
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="radio-kon" id="gridRadios3" value="4">
                        <label class="form-check-label" for="gridRadios3">
                            Четыре
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="row mb-3">
            <div class="col-sm-10">
                <label class="form-check-label">Выберите суперспособность</label>
                <select class="form-select" name="power[]" multiple>
                    <option value="1">Бессмертие</option>
                    <option value="2">Левитация</option>
                    <option value="3">Сверхсила</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-form-label col-sm-2 pt-0">Пользовательское соглашение</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1" name="checkz" value="1" checked="checked">
                    <label class="form-check-label" for="gridCheck1">
                        С условиями согласен
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>
</body>
</html>