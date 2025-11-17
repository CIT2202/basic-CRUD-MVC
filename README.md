# CRUD Operation using PDO

These examples demonstrate the use of PDO to implement CRUD (Create, Read, Update, Delete) functionality using an MVC architecture for a simple web application.

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
- You should find that the create operation works fine. You should be able to add a new film and see its title listed on the homepage. 
- If you click on one of the links in _index.php_, this takes you to _show.php_, and you'll get an error. 
  - You need to add code to _show.php_ so this page will work. The comments in this file give you some advice on how to do this. You only need to edit _show.php_. You don't need to make any changes to the model or view files. 
- Once _show.php_ works, move on to getting the update and delete operations to work as well. Again, there are comments in these files that should help you. 

## Testing your understanding
One weakness is the user doesn't get any feedback when they have successfully created, updated or deleted a film. How can you use PHP sessions to pass a success message back to the home page so the user gets confirmation for each of these actions. 
