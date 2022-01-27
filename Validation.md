To use Regex:

```
using System.Text.RegularExpressions;
```



Regex to check if value has a number:

```
Regex {variable name for the regex} = new Regex(@"[0-9]+");
```



Regex to check if value has a upper case character:

```
Regex {variable name for the regex} = new Regex(@"[A-Z]+");
```



Regex to check if value has a certain amount of characters:

```
Regex {variable name for the regex} = new Regex(@".{0,8}");
```



Regex to check if value consists of only characters:

```
Regex {variable name for the regex} = new Regex("^[a-zA-Z ]+$");
```
