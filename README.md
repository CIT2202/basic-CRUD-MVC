# CRUD Operation using PDO

These examples demonstrate the use of PDO to implement CRUD (Create, Read, Update, Delete) functionality for a simple web application.

- [Follow these instructions if you are using Codespaces](#codespaces)
- [Follow these instruction if you are using XAMPP](#xampp)

## If you are using Codespaces <a name="codespaces"></a>

- Open your existing codespace (DON'T CREATE A NEW ONE) [https://github.com/codespaces](https://github.com/codespaces).
- In the terminal enter

```
git clone https://github.com/CIT2202/basic-CRUD-MVC
```

This will copy the contents of this repository into your codespace.

- From the _basic-CRUD-in-PHP_ folder, open _models/film-model.php_. Change the connection settings to match your database and enviornment. This is the line you need to change

```
    $conn = new PDO('mysql:host=localhost;dbname=MyDatabase', 'MyUsername', 'MyPassword');
```

You will need to change it to:

```
    $conn = new PDO('mysql:host=db;dbname=cht2520', 'root', 'secret');
```

- Start Apache (`apache2ctl start`)
- Browse to the _basic-CRUD-in-PHP_ folder. You should see the _index.php_ page displayed. It should be showing the list of films from the database.

Now move onto [Completing the practical work](#practical)

## If you are using XAMPP <a name="xampp"></a>

- Download this repository and unzip it. Move the folder into your _htdocs_ directory on XAMPP.

- Start with _index.php_. In the PHP code, change the connection settings to match your database. This is the line you need to change

```
    $conn = new PDO('mysql:host=localhost;dbname=MyDatabase', 'MyUsername', 'MyPassword');
```

You will need to change _MyDatabase_ to cht2520, and _MyUsername_ and _MyPassword_ to match the username and password you entered.

- View _index.php_ in a browser. You should see a list of films.

Now move onto [Completing the practical work](#practical).

## Completing the practical work <a name="practical"></a>

- Have a good look through the code in _index.php_. Make sure you understand what each line of code is doing.

### Getting the other operations to work

- If you click on one of the links in _index.php_, this takes you to _show.php_, and you'll get an error. Open up _show.php_ and edit the connection settings just like you did in _index.php_. The _show.php_ page should then work.
- Continue by changing the connection settings in the other files to get the whole application to work. Make sure you look carefully through the code so you understand how the application has been built.

## Testing your understanding

### Questions

- _create.php_ doesn't connect to the database. Why?
- In _show.php_ the details for a single film are shown, how does this page 'know' which film to display i.e. how is data passed from _index.php_ to _show.php_?
- _destroy.php_ (and _update.php_) also operate on a single film. How do these pages know which film to delete/update e.g. how is data passed from _show.php_ to _destroy.php_? How is this different to the way in which data is passed from _index.php_ to _show.php_?
- _index.php_ uses the `$conn->query()` method to execute SQL, why does _show.php_ use `$stmt->execute()`? Why isn't `$conn->query()` used in _show.php_?

### Editing the code

- In _index.php_ how can we display the year for the film alongside the title e.g. Jaws (1975)
- How would you edit the code so that the list of films in _index.php_ appears in date order with the most recent first.

### Optional extra

Make sure you really understand the basic CRUD code is this repository. However, if you fully understand the code, try the following:

- These examples are as simple as they can be. How could you perform some basic user input validation i.e. testing that the user has completed all the fields when adding a new film. Hint: You will need to add some code in _store.php_ to test the values from the form. If you detect a problem, `echo` out a message to the user and use `die();` to prevent the INSERT code from running.
