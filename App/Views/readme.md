# Views

`Defaults` folder is a special folder where default header and footer is kept. Other folder should be added based on the name of the controller class. Each file inside the folder is the method name with a `.php` extension.

Example: If there's a controller class called `Main` and it contains methods `home` and `about`,
there should be a folder in the `Views` folder called `Main` which should contain `home.php` and `about.php`.

*Note: If a method in the controller doesn't require any view, it shouldn't be added in the `View` folder.*


