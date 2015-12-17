# joomla-works
Work and contents on Joomla programs
## JConfig customization
### Customization to handle JConfig properties from a remote database
We retrieve the value of user - host - db - password from a remote database by using the JConfig construct with the mechanism
$resultat is the array containing the different values from the remote database.

$credential = array("host" => $resultat['hostname'], "user" => $resultat['user'], "password" => $resultat['mdp'], "db" => $resultat['dbschema']);
foreach($credential as $key => $value) $this->{$key} = $value;
