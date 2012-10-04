application- application specific code
config- database/server configuration
db- database backups
liibrary- framework code
public- application specific js/css/images
scripts- command-line utilities
tmp-temporary data


Model-View-Controller (MVC) is am arhitectural pattern used in software engineering. Successful use of the pattern isolates business logic from user interface considerations, resulting in an application where it is easier to modify either the visual appearance of the application or the underlying business rules without affecting the other. In MVC, the model represents the information, (the data) of the application; the view corresponds to elements of the user interface such as text, checkboc items, and so forth; and the controller manages the communication of data the business rules used to manipultae the data to and formm the model.

1. Model hangles all database logic. Using the model we connect to our database and provide an abstraction layer.
2. Controller represents our business logic i.e. all our ifs and else.
3. View represents our presentation logic.

View <-> Model -> Controller